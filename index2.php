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
<head><title>Sahayatri</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.title {
    height: 200px;
    width: 400px;
    color: white;
    position: fixed;
    top: 50%;
    left: 50%;
    margin-top: -100px;
    margin-left: -200px;
}
 .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    font-size: 10px;
    background-color:#2F4F4F;
    color: white;
    text-align: center;
}
   </style>
</head>
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


    <?php if (isset($_SESSION['success'])) : ?>
    <?php endif ?>
    <div style="float: right; font-size: 15px; margin-right: 40px">
    <a href="addinfo.php" style="color: White"> Add New</a>
</div>
<div>
    

    
    <div id="destination" class="text-center">
  <div class="container">
    
    <?php if (isset($_SESSION['success'])) : ?>
    <?php endif ?>
    
	
      <h2>Destination</h2>
      <hr>
    			<ul style="font-size: 18px;">
				<?php
                    while($row=mysqli_fetch_assoc($data)){
                    echo("<a href='content.php?id={$row['place']}';>".strtoupper($row['place']). " </a><br>");
                    $row++;}
                ?>
            </u1>
		
		
	
</div>
</div>

        <div style="">
            <h3 style="color: white;">
            <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
            ?>
            </h3>
        </div>
        <div class="footer">
        <p>4th Semester Educational project @ Kathmandu university</p>
    </div>
</body>
</html>