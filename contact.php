<?php 
//If the form is submitted
if(isset($_POST['submitted'])) {

	$name = trim($_POST['contact_name']);
	$email = trim($_POST['contact_email']);
	$subject = trim($_POST['contact_subject']);

	if(function_exists('stripslashes')) {
		$message = stripslashes(trim($_POST['contact_message']));
	} else {
		$message = trim($_POST['contact_message']);
	}

	/*****************************************************************************************************/
	// Enter your email address in the following variable	
	$emailTo = 'info@thekitchenworks.com';
	/*****************************************************************************************************/
	
	$subject_email = 'Contact Form Submission from '.$name. ' | '.$subject;
	$body = "Name: $name \n\nEmail: $email \n\Message: $message";
	$headers = 'From: Kitchenworks.com Form <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
	
	mail($emailTo, $subject_email, $body, $headers);
	
} ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--BEGIN html-->
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<!--BEGIN head-->
<head profile="http://purl.org/uF/hAtom/0.1/ http://purl.org/uF/2008/03/">

	<title>The Kitchenworks Inc.</title>

	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />

	<!-- Skin -->
	<link rel="stylesheet" href="css/skins/light/skin.css" type="text/css" media="screen, projection" />
	<!--<link rel="stylesheet" href="css/skins/dark/skin.css" type="text/css" media="screen, projection" />-->
    <!--<link rel="stylesheet" href="css/skins/blue/skin.css" type="text/css" media="screen, projection" />-->
    <!--<link rel="stylesheet" href="css/skins/orange/skin.css" type="text/css" media="screen, projection" />-->
    <!--<link rel="stylesheet" href="css/skins/green/skin.css" type="text/css" media="screen, projection" />-->
    
	<!-- PrettyPhoto -->
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
    
    <!-- jqTransform -->
	<link rel="stylesheet" href="css/jqtransform.css" type="text/css" />

	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/browserDetect.js"></script>
	<script type="text/javascript" src="js/supersubs.js"></script>
	<script type="text/javascript" src="js/jquery.bgiframe.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<!--<script type="text/javascript" src="js/ChunkFive_400.font.js"></script>-->
	<!-- The following font script reference loads the Tertre Font which supports a wider range of characters, uncomment the following line and comment the above line for it to load -->
	<script type="text/javascript" src="js/sansation.font.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousellite.pauseOnHover.min.js"></script>
	<script type="text/javascript" src="js/jquery.innerfade.js"></script>
	<script type="text/javascript" src="js/jquery.jqtransform.js"></script>
<!--END head-->
</head>

<!--BEGIN body-->
<body>
	
	<!--BEGIN .container-->
	<div class="container">

		<!--BEGIN #header-container-->
		<div id="header-container">
			
			<!--BEGIN #header-->
			<div id="header">
        
				<!--BEGIN #logo-->
				<h1 id="logo">
					<a href="index.html" title="The Kitchenworks"><img src="images/kwlogo.png" alt="The Kitchenworks" class="ie6fix" /></a>
                    
				<!--END #logo-->
				</h1>
                
				<!--BEGIN .menu-->
				<div class="menu">
					<ul class="nav">
						<li><a href="index.html">Home</a></li>
							
						<li><a href="portfolio.html" title="Portfolio">Portfolio</a>
					
						</li>
						
                        <li><a href="appliances.html" title="Appliances">Appliances</a>
						</li>
						<li><a href="blog.html" title="Blog">Blog</a>
							<ul>
								<li><a href="post.html" title="Post Detail">Front-Loader Laundry Shoot-out!</a></li>
								<li><a href="post.html" title="Post Detail">Miele Rotary Iron Review</a></li>
							</ul>
						</li>
						<li class="current_page_item"><a href="contact.php" title="Contact">Contact</a></li>
                        
					</ul>
                    
				<!--END .menu-->
				</div>
                
			<!--END #header-->
			</div>

		<!--END #header-container-->
		</div>

		<!--BEGIN #sub-header-container-->
		<div id="sub-header-container">

			<!--BEGIN #sub-header-->
			<div id="sub-header">

				<h2>Contact us</h2>
				<span class="meta">don't forget to say hi!</span>
			

			<!--END #sub-header-->
			</div>

		<!--END #sub-header-container-->
		</div>

		<!--BEGIN #content-->
		<div id="content">
			
			<!--BEGIN .hfeed-->
			<div id="page-contact" class="hfeed page">

				<h2>Let's Connect</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus turpis, cursus faucibus lacinia sed, vehicula in metus.</p>
				<p>Fusce volutpat ullamcorper tortor aliquam viverra. </p>

				<div id="contact-form">

					<h2 class="highlight">Leave us a message</h2>
            
					<form action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>" id="contactForm" method="post">

						<div class="form-section">
							<p><input type="text" tabindex="3" id="contact_name" name="contact_name" value="<?php if(isset($_POST['contact_name'])) echo $_POST['contact_name'];?>" class="requiredField" /></p>
							<label for="contact_name">Name</label>
						</div>

						<div class="form-section">
							<p><input type="text" tabindex="4" id="contact_email" name="contact_email" value="<?php if(isset($_POST['contact_email']))  echo $_POST['contact_email'];?>" class="requiredField email" /></p>
							<label for="contact_email">Email</label>                                
						</div>

						<div class="form-section">
							<p><input type="text" tabindex="5" id="contact_subject" name="contact_subject" value="<?php if(isset($_POST['contact_subject'])) echo $_POST['contact_subject'];?>" class="requiredField" /></p>
							<label for="contact_subject">Subject</label>
						</div>		

						<div class="form-section">
							<p><textarea cols="65" rows="9" tabindex="6" id="contact_message" name="contact_message" class="requiredField"><?php if(isset($_POST['message'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['message']); } else { echo $_POST['message']; } } ?></textarea></p>
							<label for="contact_subject" style="display: none;">Message</label>
						</div>

						<div class="form-section">
							<button tabindex="7" type="submit" id="submit" name="submit">Submit</button>
							<input type="hidden" name="submitted" id="submitted" value="true" />
						</div>                            

					</form>

				</div>

			<!--END .hfeed-->
			</div>

			<!--BEGIN .aside-->
			<div class="aside clearfix">

				<!--BEGIN .widget-->
				<div class="widget">
					<h3>Our Showroom</h3>
					<div>
						<p>1808 East Sunrise Blvd. <br />Fort Lauderdale, FL 33304<br />P  954 764 1482  |  F  954 764 4650</p>
						<p><img src="images/contact_office.jpg" class="ie6fix" alt="Office" /></p>
					</div>
				</div>
				<!--END .widget-->

				<!--BEGIN .widget-->
				<div class="widget">
					<h3>How to get here</h3>
					<div>                        
						<p><img src="http://maps.google.com/maps/api/staticmap?center=Avenida+da+Boavista,Porto,PT&amp;zoom=13&amp;size=280x150&amp;maptype=roadmap&amp;markers=color:red|color:red|label:O|41.162455,-8.655936&amp;sensor=false" class="ie6fix" alt="Lorem ipsum" /></p>
					</div>
				</div>
				<!--END .widget-->

			<!--END .aside-->
			</div>

		<!--END #content-->
		</div>		
		<!--END .container-->
		</div>     

		<!--BEGIN #footer-widgets-container-->
		<div id="footer-widgets-container" class="clearfix">

			<!--BEGIN #widget-footer-->
			<div id="footer-widgets" class="clearfix">

			

				<div class="footer-widget-box widget">
					<h3>Testimonials</h3>
					<div id="testimonials">
	                    <div class="single-comment">
	                        <p>"The professionalism and sheer volume of knowledge in cabinetry design have made Kitchenworks the only place I refer my clients."</p>
	                        <div class="comment-arrow"></div>
	                        <div class="person"><strong>Susan Storrs</strong>, Interior Designer</div>
	                    </div>
		        	</div>
					<div id="testimonials">
	                    <div class="single-comment">
	                        <p>"Susan and the rest of the team at The Kitchenwors are truly in a league of their own."</p>
	                        <div class="comment-arrow"></div>
	                        <div class="person"><strong>Dr. Joseph Arena</strong>, MD</div>
	                    </div>
		        	</div>
				</div>


				<div class="footer-widget-box widget">
					<h3>Our Showroom</h3>
					<div>
						<p><img src="images/map.jpg" alt="Map" /></p>
						<p>1808 East Sunrise Blvd.<br/>Fort Lauderdale, FL 33304<br/>P 954 764 1482  |  F 954 764 4650</p>
					</div>
				</div>

			<!--END #footer-widgets-->
			</div>

		<!--END #footer-widgets-container-->
		</div>

		<!--BEGIN #footer-container-->
		<div id="footer-container">

			<!--BEGIN #footer-->
			<div id="footer">

				<ul id="footer-pages">
					<li><a href="index.html" title="Home">Home</a></li>
					<li><a href="page.html" title="Templates">Portfolio</a></li>
					<li><a href="portfolio.html" title="Portfolio">Appliances</a></li>
					<li><a href="blog.html" title="Blog">Blog</a></li>
					<li><a href="contact.html" title="Contact">Contact</a></li>
				</ul>

				<p id="copyright">Copyright &copy; 2010 The Kitchenworks Inc., All rights reserved</p>

				<ul id="social">
					<li><a href="#"><img src="images/rss.png" alt="RSS" /></a></li>
					<li><a href="http://www.twitter.com/thekitchenworks"><img src="images/twitter.png" alt="Twitter" /></a></li>
					<li><a href="#"><img src="images/facebook.png" alt="Facebook" /></a></li>
					<li><a href="#"><img src="images/flickr.png" alt="Flickr" /></a></li>
					<li><a href="#"><img src="images/linkedin.png" alt="LinkedIn" /></a></li>
				</ul>

			<!--END #footer-->
			</div>

		<!--END #footer-container-->
		</div>

		<!--[if IE 6]>
		<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
		<script type="text/javascript">		
			DD_belatedPNG.fix(".ie6fix");
		</script>
		<![endif]--> 

		<script type="text/javascript" src="js/screen.js"></script>

	<!--END body-->
	</body>
	<!--END html-->
	</html>