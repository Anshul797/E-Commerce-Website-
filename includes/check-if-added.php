<?php
function check_if_added_to_cart($item_id){
    include 'common.php';
    $user_id=$_SESSION['id'];
    $query="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' AND status='Added to cart' ";
    $query_result=  mysqli_query($con, $query) or die(mysqli_error($con));
    if (mysqli_num_rows($query_result)>=1){
        return 1;
        }
 else {
     return 0;}
}
?>