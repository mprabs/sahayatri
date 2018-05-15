<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sahayatri</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
</head>
<style type="text/css">
    /*a
    {
        align-content: center;
    }*/

    #wrong-letters {
        border-style:solid;
        border-radius:40px;
        padding-left: 5%;
        border-color: black;
        font-family: forte;
        font-size: 180%;
        width: 450px;
        margin-left: 90px;
    }

    .container-fluid {
        text-align: center;
    }
    button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}


.container2{
    position: fixed;
    clear: both;
    left: 18%;
    /*margin-top: 30px;*/
    width: 64%;
    height: 80%;
    font-size: 10px;
    /*background-color:white;*/
    color: black;
    text-align: center;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
} 

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

</style>
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

<div class="container2" style="float: center;">
    <!-- <div class="container"> -->
    <b style="text-align: center; font-size: 280%;">Add the contents here.</b>
    <hr>
      <form method="post" action="addhotel.php">
        <?php include('errors.php') ?>
       
       <label for="lname">Place</label>
        <input type="text" id="street" name="place" placeholder="Street name..">
 
        <label for="fname">Name of hotel</label>
        <input type="text" id="fname" name="hotelname" placeholder="Its name..">

        
        <label for="lname">Website</label>
        <input type="text" id="website" name="website" placeholder="Website">
        
        <label for="lname">Contact</label>
        <input type="text" id="lname" name="contact" placeholder="Contact">
        
       <!--  <label for="subject">Contact</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
     -->
        <button type="submit" class="btn btn-danger" name="add_hotel" onclick="history.go(-1)"> Add </button>
        </form><br><br>

      

</div>
</body>
</html>