<?php
// CONNECTION
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'zaq12wsx';
$db     = 'prana';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db);

session_start();

// LOGIN
if(ISSET($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($mysqli, "SELECT * FROM `admins` WHERE `username`='$username' && `password`='$password'") or die(mysqli_error());
  $fetch=mysqli_fetch_array($query);
  $count=mysqli_num_rows($query);

  if($count > 0){
    $_SESSION['username']=$fetch['username'];
    header('location: dashboard.php');
  }else{
    echo "<div class='alert alert-danger'>Invalid email or password</div>";
  }
}


// ACCEPT APPOINTMENT REQUESTS
if(ISSET($_POST['accept_request'])){
  $id = $_POST['accept_request'];
  $sql = "UPDATE appointments SET status=1 WHERE id='$id'";
  mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
  header('location: dashboard.php');
}
 ?>