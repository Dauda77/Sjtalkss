
window.addEventListener('DOMContentLoaded', async () => {
    const apiKey = 'c2e1b26355c04fc198473034233005';
  
    try {
      // Get the user's current location
      const getPosition = () => {
        return new Promise((resolve, reject) => {
          navigator.geolocation.getCurrentPosition(resolve, reject);
        });
      };
  
      const position = await getPosition();
      const latitude = position.coords.latitude;
      const longitude = position.coords.longitude;
  
      // Make an API request using the user's location
      const url = `https://api.weatherapi.com/v1/current.json?key=${apiKey}&q=${latitude},${longitude}`;
      const response = await fetch(url);
      const data = await response.json();
  
      // Extract the relevant weather information
      const city = data.location.name;
      const temperature = data.current.temp_c;
      const condition = data.current.condition.text;
      const weatherCode = data.current.condition.code;
      const Word = "And for Today at";
      const WordB = "it is ";
  
      // Load the JSON data with the weather icons and find the corresponding icon URL
      const iconsData = [
        {
          "code": 1000,
          "day": "Sunny",
          "night": "Clear",
          "icon": "113.png"
        },
        {
          "code": 1003,
          "day": "Partly cloudy",
          "night": "Partly cloudy",
          "icon": "284.png"
        },
        // ... add the remaining weather conditions and icons
        {
          "code": 1282,
          "day": "Moderate or heavy snow with thunder",
          "night": "Moderate or heavy snow with thunder",
          "icon": "path_to_icon.png" // Replace with the correct path to your icon image
        }
      ];
  
      const weatherIcon = iconsData.find(icon => icon.code === weatherCode);
  
      // Update the webpage with the weather information and icon
      const weatherDivs = document.getElementsByClassName('meteo');
      if (weatherDivs.length > 0) {
        const weatherDiv = weatherDivs[0];
        const iconImg = document.createElement('img');
        iconImg.src = weatherIcon.icon;
        iconImg.alt = condition;
        iconImg.className = 'weather-icon';
  
        weatherDiv.appendChild(iconImg);
        weatherDiv.insertAdjacentHTML('beforeend', `<div>${Word},${city},${WordB} ${temperature}°C, ${condition}</div>`);
      }
    } catch (error) {
      console.error(error);
    }
  });