<?php
 session_start();
 if(!isset($_SESSION['mid'])){
 header('location:registration/menlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>College</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicon -->
  <!-- <link href="img/uvce2.png" rel="icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


</head>

<body>
  <!-- Page Content
    ================================================== -->
  <!-- Hero -->

  <section class="hero">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <a class="hero-brand" href="index.php" title="Home"><img alt="Bell Logo" src="img/ai.jpg" width="70" height="70"></a>
        </div>
      </div>

      <div class="col-md-12">
        <h1>
            College Management
          </h1>

        <p class="tagline">
          "An investment in knowledge always pays the best interest." ... 
        </p>
        <a class="btn btn-full" href="studentdet.php"> Students Details</a>
          <a class="btn btn-full" href="registration/logout.php">Logout</a>
      </div>
    </div>

  </section>
  <!-- /Hero -->

  <!-- Header -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left"> -->
        <a href="mentor.php"><img src="img/ai.jpg" alt="" title="" /></img></a>
        
      </div> 

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="registration/internal1.php">Ist Internal</a></li>
          <li><a href="registration/internal2.php">2nd Internal</a></li>
          <li><a href="registration/internal3.php">3rd Internal</a></li>
        
          
            
         
        </ul>
      </nav>
      <!-- #nav-menu-container -->

      
    </div>
  </header>
  <!-- #header -->

  <!-- About -->

  <?php
   include("about.php");
  ?>
  <!-- /About -->
  <!-- Parallax -->

  
  <!-- /Parallax -->
  <!-- Features -->

  
 

  <!-- /Portfolio -->
  <!-- Team -->

  <?php
   include("footer.php");
  ?>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/tether/js/tether.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/lockfixed/lockfixed.min.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

</body>
</html>
