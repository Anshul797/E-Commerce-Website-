<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<?php
        include 'includes/header.php';
        ?>
    <div class="container" style="margin-top: 100px;margin-bottom: 440px">
            <table class="table table-striped">
                <?php
                    $sum = 0;
                    $user_id = $_SESSION['id'];
                    $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM user_items JOIN items ON user_items.item_id = items.id WHERE user_items.user_id='$user_id' and status='Added to cart'";
                    $result = mysqli_query($con, $query)or die(mysqli_error($con));
                    if (mysqli_num_rows($result) >= 1) {
                ?>
                 <thead>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>                                    
                        <th></th>
                    </tr>
                </thead>                    
                <tbody>
                    <?php
                        while ($row = mysqli_fetch_array($result)) {
                            $sum+= $row["Price"];
                            $id="";
                            $id .= $row["id"] . ",";
                            echo "<tr> <td>" . "#" . $row["id"] . "</td> <td>" . $row["Name"] . 
                            "</td>
                            <td>Rs " . $row["Price"] . "</td>
                                              <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> X </a></td>
                                          </tr>";
                                }
                                $id = rtrim($id, ",");
                                echo "<tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs " . $sum . "</td>
                                          <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                                          </tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<center><h2>Add items to the cart first!</h2></center>";
                        }
                        ?>
                        <?php
                        ?>
            </table>
        </div>
    <?php
        include 'includes/footer.php';
        ?>
</body>
