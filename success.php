<?php
include 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['id'];
$item_ids_string = $_GET['itemsid'];
$query = "UPDATE user_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<head>
	<title>Success | Lifestyle Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<?php
        include 'includes/header.php';
        ?>
	<div class="container" style="text-align: center;margin-top: 90px;margin-bottom: 550px">
		Your order is confirmed. Thank you for shopping with us.<a href="products.php">Click here</a> to purchase any other item.
	</div>
<?php
        include 'includes/footer.php';
        ?>
</body>
