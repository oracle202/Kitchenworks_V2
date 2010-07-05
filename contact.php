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
				<div id="sub-header-search">
					<form class="searchform" method="get" action="#">
						<p><input class="search" name="s" type="text" value="" tabindex="1" /><button class="search-btn" type="submit" tabindex="2">Search</button></p>
					</form>
				</div>

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
					<h3>Porto Office!</h3>
					<div>
						<p>River Street, 534<br />4250-123 Porto, Portugal</p>
						<p><img src="http://www.unispheredesign.com/demo/assets/vision/contact_office.jpg" class="ie6fix" alt="Porto Office" /></p>
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
		
<?php include 'footer.php'; ?>