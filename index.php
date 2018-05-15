<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head><title>Sahayatri</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
        background-color: #2F4F4F;
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
        background-color: #2F4F4F;
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

<body>
<body style="background:url('img/intro-bg.jpg'); background-size:100%">
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Signup</button>

    <div id="id01" class="modal">
        <form method="post" class="modal-content animate" action="index.php">
   
            <div class="container">
            <?php include('errors.php') ?>
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

                        <label><b>Email</b></label>
            <input type="text" placeholder="Enter email" name="email" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password_1" required>
        
            <label><b>Reenter Password</b></label>
            <input type="password" placeholder="Enter Password" name="password_2" required>
            
            
            <button type="submit" name="reg_user">Signup</button>
           
        
            <p>Welcome.</p>
            </div>
        </form>
    </div>
 
  <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>

    <div id="id02" class="modal">
        <form method="post" class="modal-content animate" action="index.php">
   
            <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
        
            <button type="submit" name="login_user">Login</button>
            <p>Let's go</p>
            </div>
        </form>
    </div>
   
        <script>
        var model = document.getElementById('id01');
        var modal = document.getElementById('id02');
        
        window.onclick = function(event) {
        if (event.target == model) {
        model.style.display = "none";
        }
        if (event.target == modal) {
        modal.style.display = "none";
        }
        }
    </script>
    <div class="title">
        <b style="font-size: 500%; text-align: center; color: #2F4F4F">SAHAYATRI</b>
        <h3 style="text-align: center; color: #2F4F4F">A Traveller's Destination</h3>
    </div>
<div class="footer">
        <p>4th Semester Educational project @ Kathmandu university</p>
    </div>

</body>
</html>
