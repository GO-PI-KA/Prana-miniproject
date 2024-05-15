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
    .icon-box {
      max-height: 12em;
    }
  </style>
</head>

<body class="h-100">

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-music-player" style="color: #ff689b;"></i></div>
            <h4 class="title"><a href="audios.php">Calming Audios</a></h4>
            <p class="description">“No matter what race or religion or nationality or sexual orientation or gender that you are, Music has the power to unite us.” <i>__Lady Gaga</i> </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-camera-video" style="color: #e9bf06;"></i></div>
            <h4 class="title"><a href="videos.php">Videos</a></h4>
            <p class="description">We put together a collection of short videos for our own emotional well-being. The videos feature strategies and techniques shared by mental health experts at Prana</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-phone-landscape" style="color: #3fcdc7;"></i></div>
            <h4 class="title"><a href="games.php">Games</a></h4>
            <p class="description">Games can be a great way to stimulate your mind and improve your mental health</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-info-square" style="color:#41cf2e;"></i></div>
            <h4 class="title"><a href="tips.php">Tips</a></h4>
            <p class="description">We have included some tips to make a change in your routine.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-bar-chart-steps" style="color: #d6ff22;"></i></div>
            <h4 class="title"><a href="statustracker.php">Status Tracker</a></h4>
            <p class="description">We provided a status tracker which indicates your current mental health phase based on the answers you give.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-calendar2-date" style="color: #4680ff;"></i></div>
            <h4 class="title"><a href="appointment.php">Appointment</a></h4>
            <p class="description">Book an appointment to start recieving your sessions regarding your problems. We are here to help you!</p>
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