<?php
include "includes/common.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us | Lifestyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="index.css" rel="stylesheet" type="text/css"/> 
    </head>
    <body style="padding-top: 50px;">
    <?php include 'includes/header.php'; ?>
    <br>
    <div class="container">
    <div class="row">
        <div class="col-sm-10">
		  <h1 class="title">LIVE SUPPORT</h1>
		  <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3><br>
          <div>
             <p>The contact us page is one of the most visited pages on the website. That seems like a compelling enough reason to redesign your contacts section to better meet your users' needs and grab their attention. While working on this post, I came across hundreds of beautifully made websites, yet their Contact us pages were, for the most part, disappointing. Most contact pages are made for show, with just an email address, phone, location, and some short boring text on plain background.</p>
          </div>
      </div>
        <div class="col-sm-2">
         <img align="right" src="contact.jpg" alt="contact us" style="width: 100%">
        </div>
    </div>
<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h2>Contact Us</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="sendemail.php">		    
                    <div class="form-group col-sm-9">
				        <input type="text" name="name" class="form-control" required="required" placeholder="Name" >
				    </div>
                    <div class="form-group col-sm-9">
				        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				    </div>
                    <div class="form-group col-sm-9">
				        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>  
                    <div class="form-group col-sm-7">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
				    </div>
				</form>
        </div>
    </div>
        <div class="col-sm-3">
	       <div class="contact-info">
	           <h2 class="title">Company Information</h2>
	               <address>
				    <b><p>Gurugram, India- 122018</p>
				    <p>Phone: 844 844 4853</p>
				    <p>Email: trainings@internshala.com</p></b>
	               </address>
            </div>
        </div>
    </div>
</div>
      <?php include 'includes/footer.php'; ?>
    </body>
</html>