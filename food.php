<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Students</title>
	
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
                    <li><a href="#" onclick="history.go(-1)" selected> 
                            <?php 
                            $schoolname=$_GET['id'];
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
	<h2 style="text-align: center" >STUDENTS </h2>
	<a href="addfood.php" style="float: right; font-size: 20px; margin-right: 150px; color: white">Add new</a>
	<table id="customers">
  <tr>
  	<?php
        require_once "Classes/PHPExcel.php";
        $tmpfname = "test.xls";
        $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
        $excelObj = $excelReader->load($tmpfname);
        $worksheet = $excelObj->getSheet(0);
        $lastRow = $worksheet->getHighestRow();
        $lastColumn = $worksheet->getHighestDataColumn();
        echo "<table>";
        $alphas = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        for ( $i = 0; $i <= $lastRow; $i++) {
            echo "<a href='new.html'>";
            echo $worksheet->getCell($alphas[$i].'1')->getValue();
            echo "</a>";
        }
        for ($p = 2; $p <= $lastRow; $p++) {
             echo "<tr>";
             for ($row=0; $row < $lastRow; $row++) { 
                echo "<td>";
                echo $worksheet->getCell($alphas[$row].$p)->getValue();
                echo "</a></td>";   
             }
             echo "</tr>";
        }
        echo "</table>";    
    ?>
</table>
</div>
	<div class="footer">
  		<p>4th Semester Educational project @ Kathmandu university</p>
	</div>
</body>
</html>