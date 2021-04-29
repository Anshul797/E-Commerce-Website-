<?php
require "includes/common.php";
if (isset($_SESSION['email'])) 
	{ 
		header('location: products.php'); 
	}
?>
<head>
	<title>Lifestyle Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	 <?php
        include 'includes/header.php';
        ?>
    <!--     <div id="content"> -->
            <div  class= "banner-image" style="min-height: 500px;">
                <div class="container">	
                    <div class="inner-banner-image">
                    <center>
                        <div class="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            </div>
			<div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="camera.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="watch.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="shirt.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
<!--         </div> -->
	<?php
        include 'includes/footer.php';
        ?>
</body> 
</html>