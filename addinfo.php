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
    height: 100%;
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

<b style="text-align: center; font-size: 280%;">Add the contents here.</b>
   <hr>
      <form method="post" action="addinfo.php">
        <?php include('errors.php') ?>
        <label for="fname" style="float: left;">Place</label>
        <input type="text" id="fname" name="place" placeholder="Place name..">

        <label for="lname" style="float: left;">District</label>
        <input type="text" id="street" name="district" placeholder="Disctrict name..">
    
        <label for="subject" style="float: left;">Description</label>
        <textarea id="subject" name="description" placeholder="Write something.." style="height:160px"></textarea>
    
        <button type="submit" class="btn btn-danger" name="add_info" onclick="history.go(-1)"> Add </button>
        </form>
    
</div>
</body>
</html>