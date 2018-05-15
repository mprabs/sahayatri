<?php
    session_start(); 
    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first.";
        header('location: index.php');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: index.php");
    }
?>
<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>About </title>
</head>
<style type="text/css">
     .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        font-size: 10px;
        background-color:#2F4F4F ;
        color: white;
        text-align: center;
}
</style>
<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
<body style="background:url('img/intro-bg.jpg'); background-size:100%">
<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="index2.php" style="font-family: forte; font-size: 20px; font-style: bold;">SAHAYATRI</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" style="float: right">                    
                    <li><a href="about.php" selected>About</a></li>
                    <li><a href="contact.php">Team</a></li>
                    <li><a href="contactus.php">Contact us</a></li>
                    <li><a href="index2.php?logout='1'"><?php  if (isset($_SESSION['username'])) : ?>
    <?php echo strtoupper($_SESSION['username']); ?><sup>Logout</sup>
    <?php endif ?></a></li>
                </ul>
            </div>
        </div>
    </nav>

<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2 style="text-align: center; color:#2F4F4F">ABOUT US</h2>
      <hr>
    </div>
    <div class="row">
      
      <div class="col-md-6" style="color:#2F4F4F">
        <div class="about-text">
          <h4>Who We Are</h4>
          <p>We are the group of enthusiastic youths working for the proper guidance to the users about the basic required factors about different places before travelling. </p>
          <p>Travelling should be a wonderful experience and we are here to make it happen. </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="about-text" style="color:#2F4F4F">
          <h4>What We Do</h4>
          <p>For the users who are in between the clouds of doubt, we provide a complete set of imormation regarding the following. 
          <ul>
            <li>Hotels and Stay</li>
            <li>Shopping</li>
            <li>Best destinations</li>
            <li>Location Map</li>
            <li>Destination Photos</li>
          </ul>
          </p>
        </div>
      </div>
    </div>
    </div>
  </div>
<!-- </div> -->
<div class="footer">
        <p>4th Semester Educational project @ Kathmandu university</p>
    </div>

</body>
</html>