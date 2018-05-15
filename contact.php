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
  <title>Contact </title>
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
      <h2 style="text-align: center; color: #2F4F4F">MEET THE TEAM</h2>
      <hr>
      <div class="col-md-3" style="color:#2F4F4F">
       
        <img src="team/02.jpg" height="250px" width="250px">
        <h3 style="color:#2F4F4F">Prabin Acharya</h3>
        <u>acharyaprabin03@gmail.com</u><br><br>
      </div>
      <div class="col-md-3"; style="color:#2F4F4F">
       
        <img src="team/01.jpg" height="250px" width="250px"><h3 style="color:#2F4F4F">Rohit Shrestha</h3>
        <u>rohitshrestha@gmail.com</u><br><br>
      </div>
      <div class="col-md-3" ; style="color:#2F4F4F">
       
        <img src="team/03.jpg" height="250px" width="250px"><h3 style="color:#2F4F4F">Sanjeeb Mahat</h3>
        <u>mahatsanjeeb@gmail.com</u><br><br>
      </div>
      <div class="col-md-3"; style="color:#2F4F4F">
       
        <img src="team/04.jpg" height="250px" width="250px"><h3 style="color:#2F4F4F">Anil TImalsina</h3>
        <u>timalsinaanil96@gmail.com</u><br><br>
      </div>
    </div>
  </div>
</div><br><br><br>
<div class="footer">
        <p>4th Semester Educational project @ Kathmandu university</p>
    </div>
</body>
</html>