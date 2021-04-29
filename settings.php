<?php
include 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<head>
	<title>Settings</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <?php
        include 'includes/header.php';
        ?>
<div class="container" style="margin-top: 50px;margin-bottom: 350px;">
            <div class="row">
                <div class="col-xs-4">
                    <h1> Change Password</h1>
                    <form method="POST" action="settings_script.php">
                        <div class="form-group">
                            <input type="password"  class="form-control" name="oldpass"  placeholder="Old Password" >
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="newpass" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="retype"  placeholder="Re-type New Password" >
                        </div>
                        <button class="btn btn-primary"style="margin-bottom: 10px">Change</button>
                    </form>
                </div>
            </div>
</div>
 <?php
        include 'includes/footer.php';
        ?>
</body>
