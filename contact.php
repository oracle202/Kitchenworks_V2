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
	$emailTo = 'your_email@your_domain.com';
	/*****************************************************************************************************/
	
	$subject_email = 'Contact Form Submission from '.$name. ' | '.$subject;
	$body = "Name: $name \n\nEmail: $email \n\Message: $message";
	$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
	
	mail($emailTo, $subject_email, $body, $headers);
	
} ?>

<?php include 'header.php'; ?>

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