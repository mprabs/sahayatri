<?php
if(session_id() == '') {
    session_start();
}
$username = "";
$email    = "";
$errors = array(); 

$place="";
$district="";
$description="";
$status="";

$_SESSION['success'] = "";

$database = mysqli_connect('localhost', 'root', '', 'sahayatri');
$data=mysqli_query($database,"SELECT*FROM infos");
$hoteldata=mysqli_query($database,"SELECT*FROM hotels");
$shopdata=mysqli_query($database,"SELECT*FROM shops");
$fooddata=mysqli_query($database,"SELECT*FROM food");

if(isset($_POST['reg_user'])) {
	$username = mysqli_real_escape_string($database, $_POST['username']);
	$email = mysqli_real_escape_string($database, $_POST['email']);
	$password_1 = mysqli_real_escape_string($database, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($database, $_POST['password_2']);

	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) {
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) {
		array_push($errors, "Password is required"); }

	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	if (count($errors) == 0) {
		$query = "INSERT INTO users (username, email, password) 
				  VALUES('$username', '$email', '$password_1')";
		mysqli_query($database, $query);

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		$status='true';
		header('location: index2.php');
	}

}

if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($database, $_POST['username']);
	$password = mysqli_real_escape_string($database, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($database, $query);
		
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			$status='true';
			header('location: index2.php');
		}
		else {
			array_push($errors, "Wrong Username/Password combination");
		}
	}
}

if (isset($_POST['add_info'])) {
	$place = mysqli_real_escape_string($database, $_POST['place']);
	$district = mysqli_real_escape_string($database, $_POST['district']);
	$description = mysqli_real_escape_string($database, $_POST['description']);

	if (empty($place)) {
		array_push($errors, "Place is required");
	}
	if (empty($district)) {
		array_push($errors, "District is required");
	}
	if (empty($description)) {
		array_push($errors, "Description is required");
	}
	if (count($errors) == 0) {
		$query = "INSERT INTO infos(place,district,description)
				  VALUES('$place','$district','$description')";
		mysqli_query($database, $query);
		$_SESSION['success']="Successfully Added !!";
		header('location:index2.php');
	}
}

if (isset($_POST['add_hotel'])) {
	$hotelname = mysqli_real_escape_string($database, $_POST['hotelname']);
	$place = mysqli_real_escape_string($database, $_POST['place']);
	$website = mysqli_real_escape_string($database, $_POST['website']);
	$contact = mysqli_real_escape_string($database, $_POST['contact']);

	if (empty($hotelname)) {
		array_push($errors, "Hotel Name is required");
	}
	if (empty($website)) {
		array_push($errors, "Website is required");
	}
	if (empty($contact)) {
		array_push($errors, "Contact is required");
	}
	if (count($errors) == 0) {
		$query = "INSERT INTO hotels(hotelname,place,contact,website)
				  VALUES('$hotelname','$place','$contact','$website')";
		mysqli_query($database, $query);
		$_SESSION['success']="Successfully Added !!";
		header('location:index2.php');
	}
}

if (isset($_POST['add_shop'])) {
	$name = mysqli_real_escape_string($database, $_POST['name']);
	$place = mysqli_real_escape_string($database, $_POST['place']);
	$website = mysqli_real_escape_string($database, $_POST['website']);
	$contact = mysqli_real_escape_string($database, $_POST['contact']);

	if (empty($name)) {
		array_push($errors, "Name of the shop is required");
	}
	if (empty($website)) {
		array_push($errors, "Website is required");
	}
	if (empty($contact)) {
		array_push($errors, "Contact is required");
	}
	if (count($errors) == 0) {
		$query = "INSERT INTO shops(name,place,contact,website)
				  VALUES('$name','$place','$contact','$website')";
		mysqli_query($database, $query);
		$_SESSION['success']="Successfully Added !!";
		header('location:index2.php');
	}
}

if (isset($_POST['add_food'])) {
	$name = mysqli_real_escape_string($database, $_POST['name']);
	$place = mysqli_real_escape_string($database, $_POST['place']);
	$website = mysqli_real_escape_string($database, $_POST['website']);
	$contact = mysqli_real_escape_string($database, $_POST['contact']);

	if (empty($name)) {
		array_push($errors, "Name of the restaurant is required");
	}
	if (empty($website)) {
		array_push($errors, "Website is required");
	}
	if (empty($contact)) {
		array_push($errors, "Contact is required");
	}
	if (count($errors) == 0) {
		$query = "INSERT INTO food(name,place,contact,website)
				  VALUES('$name','$place','$contact','$website')";
		mysqli_query($database, $query);
		$_SESSION['success']="Successfully Added !!";
		header('location:index2.php');
	}
}
?>