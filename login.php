<?php
require "includes/common.php";
if (isset($_SESSION['email'])) 
    { 
        header('location: products.php'); 
    }
?>
<head>
	<title>Log in</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
     	<?php
        include 'includes/header.php';
        ?>
         <div class="container" style="margin-top: 60px; margin-left: 460px;margin-bottom: 230px">
            <div class="row row_style">
                <div class="col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Login</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form action="login_submit.php" method="POST" >
                        	<div class="form-group"> email:<input type="email"  class="form-control" name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="email"></div>
                        	<div class="form-group"> password:   <input type="password"  class="form-control" name="password" required = "true" pattern=".{6,}"placeholder="password"></div>
                    		</form>
                            <a href="login_submit.php" class="btn btn-primary">Submit</a>
                        </div>
                        <div class="panel-footer">Don't have an account? <a href="signup.php">Register!</a></div>
                    </div>
                </div>
            </div>
        </div>
	<?php
        include 'includes/footer.php';
        ?>
</body>

