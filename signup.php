<?php
require "includes/common.php";
if (isset($_SESSION['email'])) 
    { 
        header('location: products.php'); 
    }
?>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<?php
        include 'includes/header.php';
        ?>
         <div class="container" style="margin-top: 50px;margin-left: 460px;margin-bottom: 200px">
            <div class="row">
                <div class="col-xs-4">
                    <h1> Sign Up</h1>
                    <form method="post" action="signup_script.php">
                        <div class="form-group">
                            <input type="text"  class="form-control" name="name"  placeholder="Name" required = "true" >
                        </div>
                        <div class="form-group">
                            <input type="email"  class="form-control" name="email" placeholder="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="password"  placeholder="Password (Min. 6 characters)" required = "true" pattern=".{6,}">
                        </div>
                        <div class="form-group">
                            <input type="number"  class="form-control" name="contact" placeholder="Contact" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="city" placeholder="City">
                        </div>
 		                <div class="form-group">
                            <input type="text"  class="form-control" name="address" placeholder="Address" required = "true">
                        </div>
                        <button class="btn btn-primary" style="margin-bottom: 10px">Submit</button>
                    </form>
                </div>
            </div>
        </div>
<?php
        include 'includes/footer.php';
        ?>
</body>

