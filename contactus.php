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

  <title>Contact us</title>
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

<div class="text-center" >
  
    <div class="section-title center"; style="color: #2F4F4F">
      <h2>Contact us</h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2"; style="color: #2F4F4F">
      <h3>Leave us a message</h3>
      <br>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"; ></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-danger" >Send Message</button>
      </form>
      
    </div>
  </div>
</div>
<!-- </div> -->
<div class="footer">
        <p>4th Semester Educational project @ Kathmandu university</p>
    </div>

</body>
</html>