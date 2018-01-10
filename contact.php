<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Monali Mirel Chuatico | Contact</title>
	<link rel="stylesheet" type="text/css" href="stylereset.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,height=device-height initial-scale=1.0">
	
	<!--BOOTSTRAP-->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	
	<!-- Custom Fonts -->
	<script src="https://use.fontawesome.com/bff4988543.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="page-top" class="index">
<nav class="site-navigation page-navigation navbar navbar-fixed-top">
	<div class="container">
	<div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
        </button>
        <div class="row">
         <a class="navbar-brand" href="index.html" style="color: white; font-size: 25px; font-family: 'helvetica'">Monali Mirel Chuatico</a>
         </div>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="menu nav navbar-nav navbar-right">
				<li class="page-scroll"><a href="index.html#about">About</a></li>
				<li class="page-scroll"><a href="index.html#portfolio">Portfolio</a></li>
				<li class="page-scroll"><a href="index.html#contact">Contact</a></li>
			</ul>
		</div>
		</div>
	</nav>
	<!--CONTACT-->	
	<section id="contact">
		 <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">	
                	<?php
                        if(isset($_POST['submit'])){
                        	$to = 'monalimirel@gmail.com';
                        	$subject = 'Feedback from my site';
                        }
                            $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
                            $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
                            $message .= 'Message: '.$_POST['message'];
                            $success = mail($to, $subject, $message);
					?>
                                       
                    <?php if (isset($success) && $success) {?>
                        <h4>Thank you <?php echo $_POST["name"]; ?> for visiting, your message has been sent! I'll be in touch soon.<h4>
						<h4 style="font-weight: bold">Email me directly at: <a href="mailto:monalimirel@gmail.com" style="color:#ff9999; text-decoration:none">monalimirel@gmail.com</a></h4>
                    <?php } else { ?>
                        <h4>Oops! There was a problem sending your message</h4>
                        <h4 style="font-weight: bold">Email me directly at: <a href="mailto:monalimirel@gmail.com" style="color:#ff9999; text-decoration:none">monalimirel@gmail.com</a></h4>
                    <?php } ?>
					<br/>
				</div>
			 </div>
			 
	 <!-- jQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     <!-- javaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			
</body>
</html>