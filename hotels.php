<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hotels and Stay</title>
    
    <style>
        /*.header2{
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            font-size: 10px;
            background-color:#4CAF50;
            color: white;
            text-align: center;
            } 
*/
         .container2{
            position: fixed;
            clear: both;
            left: 18%;
            /*margin-top: 30px;*/
            width: 64%;
            height: 100%;
            font-size: 10px;
            background-color:white;
            color: black;
            text-align: center;

            } 
       

            #customers {
                position:fixed;
                left:20%;
                top:20%;
                 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 60%;
                font-size: 15px;
                text-align: left;
                margin-top: 60px;
            }

            #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            font-size: 10px;
            background-color: grey;
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
                    <li><a href="#" onclick="history.go(-1)" selected> <?php 
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
<div  style="float: center">
    <h2 style="text-align: center" >HOTELS AND STAY </h2>
    <a href="addhotel.php" style="float: right; font-size: 20px; margin-right:150px; color: white">Add new</a>
    <table id="customers">
  <tr>
    <th>S.No</th>
    <th>Hotel Name</th>
    <th>Website</th>
    <th>Contact</th>
  </tr>
  <?php
        $name2=$_GET['id'];
        // echo $name2;
        $sno=1;
        while($row=mysqli_fetch_assoc($hoteldata)){
            if($row['place']==$name2){
                echo('<b><tr><td>'.$sno.'</td><td>' .$row['hotelname'].'</td>
                <td>'.$row['website'].'</td>
                <td>'.$row['contact'].'</td></tr></b>');
                $sno++;
            }
            ++$row;
        }
      ?>
</table>
</div>

    <div class="footer">
        <p>4th Semester Educational project @ Kathmandu university</p>
    </div>
</body>
</html>