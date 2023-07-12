<?php
include("header.php")
?>
  



  <!-- PROFILE PAGE -->
  <div class="container-profile">
    <div class="profile-head">
      <div class="profile-header">
        <!-- <div class="profile-picture">
          <img src="profile-picture.jpg" alt="Profile Picture">
        </div> -->
        <div class="author d-grid">
        <div class="author-image-box">
            <img src="profile_pic/passport.jpg" alt="Current Profile Picture" class="article-image">
        </div>

      <h1>Your Name</h1>
      <p>Job Title / Bio</p>

  <!-- Form to upload a new profile picture -->
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="profilePicture">
    <button type="submit">Change Profile Picture</button>
  </form>
</div>

            
        <ul class="list social-media for-profile-page">
          <li class="list-item">
              <a href="#" class="list-link"><i class="ri-instagram-line"></i></a>
          </li>
          <li class="list-item">
              <a href="#" class="list-link"><i class="ri-facebook-circle-line"></i></a>
          </li>
          <li class="list-item">
              <a href="#" class="list-link"><i class="ri-twitter-line"></i></a>
          </li>
      </ul>
      <ul>
        <li><a href="#">postyys</a></li>
        <li><a href="#">Followers</a></li>
        <li><a href="#">Following</a></li>
        <li><a href="#">Edit Profile</a></li>
      </ul>
      </div>
    </div>
    <main class="mainyy">
      <section>
        <h2>About</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit commodo nisl eget rutrum.
          Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin
          pharetra sem et turpis placerat, vitae efficitur odio feugiat. Fusce at malesuada mi. Nullam
          gravida malesuada mauris, vel bibendum nulla consequat ac. Donec tristique, risus id tincidunt
          efficitur, tellus dolor pellentesque justo, in sollicitudin est purus in justo. Nullam ut ligula
          id nisl consequat tincidunt.
        </p>
      </section>
      <section>
        <h2>postys</h2>
        <div class="posty-list">
          <div class="posty">
            <h3>posty Title</h3>
            <p>posty content goes here...</p>
            <a href="#">Read More</a>
          </div>
          <div class="posty">
            <h3>posty Title</h3>
            <p>posty content goes here...</p>
            <a href="#">Read More</a>
          </div>
        </div>
      </section>
    </main>
  </div>
    <!-- Custom script -->
    <!-- Footer -->
    <?php
include("footer.php")
?>

