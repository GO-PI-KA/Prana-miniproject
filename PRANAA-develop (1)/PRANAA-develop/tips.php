<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prana</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <style media="screen">
    .services{
      padding: 20px 0;
    	font-family: "Fira Sans", Helvetica, Arial, sans-serif;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
    .card {
      max-height: 400px;
      /* border: none; */
      box-shadow: 1px 1px 1px #fff;
      overflow: scroll;
    }
  </style>
</head>
<body class="h-100">

  <!-- ======= Services Section ======= -->
  <section id="services" class="services pb-5">
    <div class="container mb-5">
      <div class="section-title">
        <h2>Tips</h2>
      </div>

      <div class="w-75 mx-auto">
        <div class="card p-3">
          <div class="tip border-bottom pb-4">
            <p>1. Positive self talk</p>
          </div>
          <div class="tip border-bottom pb-4">
            <p>2. Sleep seven to eight hours a night</p>
          </div>
          <div class="tip border-bottom pb-4">
            <p>3. Keep company with good people</p>
          </div>
          <div class="tip border-bottom pb-4">
            <p>4. Get regular exercise</p>
          </div>
          <div class="tip border-bottom pb-4">
            <p>5. Do something meaningful each day</p>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Services Section -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center " style="background: rgba(21, 5, 23, 0.5) linear-gradient(rgba(26, 0, 33, 0.5) 0%, rgba(26, 0, 33, 0.5) 5%, rgba(38, 6, 51, 0.5) 40%, rgba(147, 47, 69, 0.7) 76%, rgba(236, 97, 93, 0.7) 94%, rgba(236, 97, 93, 0.5) 100%) repeat scroll 0% 0%;">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <!-- <h1 class="logo me-auto me-lg-0"><a href="index.html">Valera</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo me-auto me-lg-0"><img src="img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto  active" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto" href="doctors.php">Our Doctors</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
          <?php if(!ISSET($_SESSION['user_name'])){ ?>
            <li><a class="nav-link scrollto" href="login.php">Login</a></li>
          <?php }
          else { ?>
            <li><a class="nav-link scrollto" href="home.php"><?php echo $_SESSION['user_name']; ?></a></li>
          <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

</body>
</html>

<?php
  require 'connection.php';
?>
