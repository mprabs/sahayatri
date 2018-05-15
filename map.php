<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head><title>Sahayatri</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    font-size: 10px;
    background-color:#4CAF50 ;
    color: white;
    text-align: center;
}
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
                    <li><a href="#" onclick="history.go(-1)" selected> 
                            <?php 
                            $placename=$_GET['id'];
                            echo strtoupper($placename);
                            ?> 
                        </a>
                    </li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Team</a></li>
                    <li><a href="contactus.php">Contact us</a></li>
                    <li><a href="index2.php?logout='1'"><?php  if (isset($_SESSION['username'])) : ?>
    <?php echo strtoupper($_SESSION['username']); ?><sup>Logout</sup>
    <?php endif ?></a></li>
                </ul>
            </div>
        </div>
    </nav>

 <h2 style="text-align: center" >FIND LOCATION </h2>
    <hr>
    <div style="width: 50%"><iframe width="200%" height="500" src="https://maps.google.com/maps?width=90%&amp;height=600&amp;hl=en&amp;q=<?php 
        $placename=$_GET['id'];
        echo strtoupper($placename);
    ?> +(Sahayatri)&amp;ie=UTF8&amp;t=h&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Create Google Map</a></iframe></div><br />
    
</body>
</html>