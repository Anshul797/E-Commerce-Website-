<?php 
require "includes/common.php";
 $query = "SELECT  id,email FROM users WHERE email = '$email'";
 $query_result = mysqli_query($con, $query);
  $number_of_products = mysqli_num_rows($query_result);
  if (mysqli_num_rows>0){
    echo "email id already exist";   
}
else{
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$contact = mysqli_real_escape_string($con, $_POST['contact']);
	$city = mysqli_real_escape_string($con, $_POST['city']);
	$address = mysqli_real_escape_string($con, $_POST['address']);
	$query = "insert into users(name, email, password, contact, city, address)values('$name', '$email', '$password', '$contact', '$city','$address')";
	$submit = mysqli_query($con, $query) or die(mysqli_error($con));
	$_SESSION['email'] = $email;
	$_SESSION['id'] = mysqli_insert_id($con);
	header('location: products.php'); 
}
?>