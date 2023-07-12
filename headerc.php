<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Favicon -->
     <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon.png">
     <!-- Remix icons -->
     <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
     <!-- Swiper.js styles -->
     <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css"/>
     <!-- Custom styles -->
     <link rel="stylesheet" href="news.css">

    <title> Comments</title>
</head>
<body class="comie">
     <!-- Header -->
     <header class="header" id="header">

<nav class="navbar container">
    <a href="./index.php">
        <h2 class="logo">SJTalkss</h2>
    </a>

    <div class="menu" id="menu">
        <ul class="list">
            <li class="list-item">
                <a href="home.php" class="list-link ">Home</a>
            </li>
            <li class="list-item">
                <a href="categories.php" class="list-link">Categories</a>
            </li>
            <li class="list-item">
                <a href="news.php" class="list-link ">News</a>
            </li>
            <li class="list-item">
                <a href="comment.php" class="list-link current">Comments</a>
            </li>
            <li class="list-item screen-lg-hidden">
                <a href="profile.php" class="list-link">Profile <i class="ri-user-3-fill"></i></a>
            </li>
        </ul>
    </div>

    <div class="list list-right">
        <button class="btn place-items-center" id="theme-toggle-btn">
            <i class="ri-sun-line sun-icon"></i>
            <i class="ri-moon-line moon-icon"></i>
        </button>

        <button class="btn place-items-center" id="search-icon">
            <i class="ri-search-line"></i>
        </button>

        <button class="btn place-items-center screen-lg-hidden menu-toggle-icon" id="menu-toggle-icon">
            <i class="ri-menu-3-line open-menu-icon"></i>
            <i class="ri-close-line close-menu-icon"></i>
        </button>

        <a href="profile.php" class="btn sign-up-btn fancy-border screen-sm-hidden">
            <span>Profile <i class="ri-user-3-fill"></i></span>
        </a>
    </div>

</nav>

</header>

    <!-- Search -->
    <div class="search-form-container container" id="search-form-container">

        <div class="form-container-inner">

            <form action="" class="form">
                <input class="form-input" type="text" placeholder="What are you looking for?">
                <button class="btn form-btn" type="submit">
                    <i class="ri-search-line"></i>
                </button>
            </form>
            <span class="form-note">Or press ESC to close.</span>

        </div>

        <button class="btn form-close-btn place-items-center" id="form-close-btn">
            <i class="ri-close-line"></i>
        </button>

    </div>

    <script src="news.js"></script>
  <script async src="commie.js"></script>
</body>
</html>
