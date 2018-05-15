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
<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
<style>
        
/* align all contents inside the box */
        input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        }

/*login button*/
        button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        float: right;
        }

        button:hover {
        opacity: 0.8;
        }


/*margin of container*/
        .container {
        padding: 25px;
        }

        span.psw {
        float: right;
        padding-top: 16px;
        }

/* Background dim*/
        .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
        padding-top: 60px;
        }

/* Box focus */
        .modal-content {
        background-color: #fefefe;
        margin: 0% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 35%; /* Could be more or less, depending on screen size */
}
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

    <h2 style=" text-align: center; color: #2F4F4F; font-family: forte">    <?php 
        $placename=$_GET['id'];
        echo strtoupper($placename);
    ?> </h2>
    <hr>

<div style="margin-top: 5%; text-align: center;">
    <div class="col-md-3">
       
            <?php    
            $placename=$_GET['id'];
            $link = '<a href="hotels.php?id='.$placename.'"<br>
    <img src="img/Hotel.png" height="150" width="150"><br> </a>';
            echo($link);
        ?>
        <p>Check out
             the places 
             to stay in.</p>
    </div>
    <div class="col-md-3">
        
            <?php    
            $placename=$_GET['id'];
            $link = '<a href="shops.php?id='.$placename.'"<br>
    <img src="img/market.png" height="150" width="150"> </a>';
            echo($link);
        ?>
        <P>Where lies the best places to shop</P>
    </div>
    <div class="col-md-3">
        
            <?php    
            $placename=$_GET['id'];
            $link = '<a href="food.php?id='.$placename.'"<br>
    <img src="img/plate.png" height="100" width="150"> </a>';
            echo($link);
        ?><br>
       <br><br><br> <p>Hungry? No problem. Find out best places for food over here.</p>
    </div>
    <div class="col-md-3">
       
            <?php    
            $placename=$_GET['id'];
            $link = '<a href="map.php?id='.$placename.'"<br>
     <img src="img/maps.png" height="120" width="120"><br> </a>';
            echo($link);
        ?><br><br><p style="color: white"> hello there. maps over here</p>
    </div>
</div>
<div class="footer">
        <p>4th Semester Educational project @ Kathmandu university</p>
    </div>
</body>
</html>
