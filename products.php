<?php
include 'includes/common.php';
?>
<head>
	<title>Products</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
    ?>
            <div class="container">
        <div class="jumbotron">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt
                around, we have all in one place.</p>
        </div>
    </div>
    <div class="container">
            <div class="row" style="text-align: center;">
                <div class=" col-md-3"> 
                    <div class="thumbnail">
                        <a href="#">
                        <img src="5.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h2>Canon EOS</h2>
                                <p>price ₹36000.0</p>
                            </div>
                        </a>
                        <?php if (!isset($_SESSION['email']))
                        { ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                        } else { 
                            if (check_if_added_to_cart(1)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
                <div class=" col-md-3"> 
                    <div class="thumbnail">
                        <a href="#">
                        <img src="2.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h2>Sony DSLR</h2>
                                <p>price ₹40000.0</p>
                            </div>
                        </a>
                        <?php if (!isset($_SESSION['email']))
                        { ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                        } else { 
                            if (check_if_added_to_cart(2)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
                <div class=" col-md-3"> 
                    <div class="thumbnail">
                        <a href="#">
                        <img src="3.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h2>Sony DSLR</h2>
                                <p>price ₹50000.0</p>
                            </div>
                        </a>
                        <?php if (!isset($_SESSION['email']))
                        { ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                        } else { 
                            if (check_if_added_to_cart(3)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
                <div class=" col-md-3"> 
                    <div class="thumbnail">
                        <a href="#">
                        <img src="4.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h2>Olympus DSLR</h2>
                                <p>price ₹80000.0</p>
                            </div>
                        </a>
                        <?php if (!isset($_SESSION['email']))
                        { ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                        } else { 
                            if (check_if_added_to_cart(4)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
        </div>
        <div class="row" style="text-align: center;">
                <div class=" col-md-3"> 
                    <div class="thumbnail">
                        <a href="#">
                        <img src="9.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h2>Titan Model #301</h2>
                                <p>price ₹13000.0</p>
                            </div>
                        </a>
                       <?php if (!isset($_SESSION['email']))
                        { ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                        } else { 
                            if (check_if_added_to_cart(5)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
                <div class=" col-md-3"> 
                    <div class="thumbnail">
                        <a href="#">
                        <img src="10.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h2>Titan Model #201</h2>
                                <p>price ₹3000.0</p>
                            </div>
                        </a>
                        <?php if (!isset($_SESSION['email']))
                        { ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                        } else { 
                            if (check_if_added_to_cart(6)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
                <div class=" col-md-3"> 
                    <div class="thumbnail">
                        <a href="#">
                        <img src="11.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h2>HMT Milan</h2>
                                <p>price ₹8000.0</p>
                            </div>
                        </a>
                        <?php if (!isset($_SESSION['email']))
                        { ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                        } else { 
                            if (check_if_added_to_cart(7)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
                <div class=" col-md-3"> 
                    <div class="thumbnail">
                        <a href="#">
                        <img src="12.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h2>Faber Luba#111</h2>
                                <p>price ₹18000.0</p>
                            </div>
                        </a>
                        <?php if (!isset($_SESSION['email']))
                        { ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                        } else { 
                            if (check_if_added_to_cart(8)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
        </div>
        <div class="row" style="text-align: center;">
                <div class=" col-md-3"> 
                    <div class="thumbnail">
                        <a href="#">
                        <img src="shirt.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h2>H & W</h2>
                                <p>price ₹800.0</p>
                            </div>
                        </a>
                        <?php if (!isset($_SESSION['email']))
                        { ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                        } else { 
                            if (check_if_added_to_cart(9)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
                <div class=" col-md-3"> 
                    <div class="thumbnail">
                        <a href="#">
                        <img src="6.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h2>Luis Phil</h2>
                                <p>price ₹1000.0</p>
                            </div>
                        </a>
                        <?php if (!isset($_SESSION['email']))
                        { ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                        } else { 
                            if (check_if_added_to_cart(10)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
                <div class=" col-md-3"> 
                    <div class="thumbnail">
                        <a href="#">
                        <img src="13.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h2>John Zok</h2>
                                <p>price ₹1500.0</p>
                            </div>
                        </a>
                        <?php if (!isset($_SESSION['email']))
                        { ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                        } else { 
                            if (check_if_added_to_cart(11)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
                <div class=" col-md-3"> 
                    <div class="thumbnail">
                        <a href="#">
                        <img src="14.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h2>Jhalsani</h2>
                                <p>price ₹1300.0</p>
                            </div>
                        </a>
                        <?php if (!isset($_SESSION['email']))
                        { ?>
                          <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php 
                        } else { 
                            if (check_if_added_to_cart(12)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
        </div>
    </div>
	   <?php
        include 'includes/footer.php';
        ?>
</body>

