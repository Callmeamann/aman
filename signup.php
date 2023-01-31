<?php include('server.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/signup.css">

</head>
<body>
    
<!-- header -->

<header class="header">

    <div class="header-1">

        <a href="#" class="logo"> <i class="fas fa-book"></i> BookWorm </a>

        

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <div id="login-btn" class="fas fa-user"></div>
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#featured">featured</a>
            <a href="#arrivals">arrivals</a>
            <a href="#reviews">reviews</a>
            <a href="#blogs">blogs</a>
        </nav>
    </div>

</header>


<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
</nav>

<!-- Account Details -->


<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <div class="form">
        <h3>user information</h3>
        <img src="./image/icons8-user-90.png" alt="">
        <h6>username</h6>
        <p>unkown</p>
        <span>email</span>
        <p>user@xyz.com</p>
        
        <span>Auther or reader</span>
        <p>reader</p>
    </div>

</div>

<!-- home -->

<section class="home" id="home">
            
      <div class="tab-content">
        <div id="signup">
          <form method="post" action="signup.php">
            <?php include('error.php'); ?>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="Username" placeholder="Enter your name" value="<?php echo $username; ?>">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" name="password_1" placeholder="Enter password" >
            </div>
            <div class="form-group">
              <label for="confirm password">Password:</label>
              <input type="password" class="form-control" id="password_2" placeholder="Confirm password" >
            </div>
            <button type="submit" class="btn btn-primary">Signup</button>
          </form>
        </div>
        <div id="login">
          <form>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
      <div class="tab-menu">
        <a href="#signup" class="active">Signup</a>
        <a href="#login">Login</a>
      </div>
    </div>


    

</section>


<!-- footer -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit"> creator : <span>mr. aman gusain</span> | all rights reserved! </div>

</section>

















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/signup.js"></script>

</body>
</html>