<?php 
require ("includes/common.php");
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $_POST['password']);
$password = md5($password);
 $query = "SELECT  id,email FROM users WHERE email = '" .$email. "'AND password='" .$password. "'";
 $query_result = mysqli_query($con, $query)or die($mysqli_error($con));;
  $number_of_products = mysqli_num_rows($query_result);
if ($number_of_products==0){
     $error = $_GET['error'];
  $error = "<span class='red'>Enter Correct E-mail and Password Combination</span>";
  header('location: login.php?error='.$error);   
}
else{
	$row = mysqli_fetch_array($query_result);
	$_SESSION['email'] = $email;
	$_SESSION['id'] = $row['id'];
	header('location: products.php'); 
}?>