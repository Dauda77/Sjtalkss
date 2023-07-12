 // Simulated comments data (replace with actual data from the server)
 var commentsData = [
    {
      username: "John",
      content: "Great article!",
      post: "Anime",
      created_at: "2023-06-16 10:00:00"
    },
    {
      username: "Jane",
      content: "I learned a lot. Thanks!",
      post: "Anime",
      created_at: "2023-06-16 11:30:00"
    }
  ];

  // Function to render comments
  function renderComments() {
    var commentsContainer = document.getElementById("comments");
    commentsContainer.innerHTML = "";

    commentsData.forEach(function(comment) {
      var commentDiv = document.createElement("div");
      commentDiv.className = "comment";

      var contentPara = document.createElement("p");
      contentPara.className = "comment-content";
      contentPara.textContent = comment.content;

      var infoPara = document.createElement("p");
      infoPara.className = "comment-info";
      infoPara.textContent = "Posted by: " + comment.username + " on post: " + comment.post;

      var timePara = document.createElement("p");
      timePara.className = "comment-time";
      timePara.textContent = comment.created_at;

      commentDiv.appendChild(contentPara);
      commentDiv.appendChild(infoPara);
      commentDiv.appendChild(timePara);

      commentsContainer.appendChild(commentDiv);
    });
  }

  // Function to handle comment submission
  function handleCommentSubmit(event) {
    event.preventDefault();

    var usernameInput = document.getElementById("usernamus");
    var contentInput = document.getElementById("comment-content");
    var postTitleInput = document.getElementById("post-title");

    var newComment = {
      username: usernameInput.value,
      content: contentInput.value,
      post: postTitleInput.value,
      created_at: new Date().toLocaleString() // Simulated timestamp (replace with server-generated timestamp)
    };

    commentsData.push(newComment);

    renderComments();

    // Clear the form
    usernameInput.value = "";
    contentInput.value = "";
  }

  // Event listener for comment form submission
  var commentForm = document.getElementById("comment-form");
  commentForm.addEventListener("submit", handleCommentSubmit);

  // Initial rendering of comments
  renderComments();