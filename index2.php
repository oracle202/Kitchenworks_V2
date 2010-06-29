<?php include 'header.php'; ?>
        
		<!--BEGIN #slider-container-->
		<div id="slider-container">	
        	
			<div id="slider-nav">
            
				<!--BEGIN #slider-->
				<div id="slider">
					<ul>
						<li>
							<a href="#" title="A featured post"><img src="http://www.unispheredesign.com/demo/assets/vision/slider_alt_1.jpg" alt="A featured post" class="ie6fix" /></a>
							<div class="text-bg"></div>
							<div class="text">
								<h2><a href="#" title="">3 different Portfolio Templates</a></h2>
								<p>Etiam velit nulla, pharetra in tempus non</p>
							</div>
						</li>
						<li>
							<a href="#" title="A featured post"><img src="http://www.unispheredesign.com/demo/assets/vision/slider_alt_2.jpg" alt="A featured post" class="ie6fix" /></a>
							<div class="text-bg"></div>
							<div class="text">
								<h2><a href="#" title="">Full Width Page Template</a></h2>
								<p>Maecenas vehicula quam et nunc</p>
							</div>
						</li>
						<li>
							<a href="#" title="A featured post"><img src="http://www.unispheredesign.com/demo/assets/vision/slider_alt_3.jpg" alt="A featured post" class="ie6fix" /></a>
							<div class="text-bg"></div>
							<div class="text">
								<h2><a href="#" title="">Fully functional Ajax Contact Form (PHP)</a></h2>
								<p>Curabitur vehicula purus in enim porta lobortis</p>
							</div>
						</li>
					</ul>
				<!--END #slider-->
				</div>            

				<div id="slider-nav-left" class="ie6fix">&nbsp;</div>
				<div id="slider-nav-right" class="ie6fix">&nbsp;</div>
                
			</div>
            
		<!--END #slider-container-->
		</div>

		<!--BEGIN slider-full-width jQuery initializer-->
		<script type="text/javascript">		    
			jQuery(document).ready(function(){                
				jQuery("#slider").css("display", "block");					
				jQuery("#slider").jCarouselLite({
					visible: 1,
					speed: 800,			    
					auto: 3000,
					vertical: false,
					pauseOnHover: true,
					btnNext: "#slider-nav-right",
					btnPrev: "#slider-nav-left"
				});                
			});	
		</script>
		<!--END slider-full-width jQuery initializer-->

		<!--BEGIN #content-->
		<div id="content">

			<!--BEGIN #home-3-sections-->
			<div id="home-3-sections" class="clearfix">

				<div class="home-section-1">
					<span class="meta">dolor sit amet</span>
					<h3>What we do</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p><p>inventore veritatis et quasi architecto beatae vitae dicta. <a href="#" class="more-link">Read more &raquo;</a></p>
					<p><img src="http://www.unispheredesign.com/demo/assets/vision/prop_280_1.jpg" alt="Lorem ipsum" /></p>
				</div>

				<div class="home-section-2">
					<span class="meta">dolor sit amet</span>
					<h3>Our portfolio</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p><p>inventore veritatis et quasi architecto beatae vitae dicta. <a href="#" class="more-link">Read more &raquo;</a></p>
					<p><img src="http://www.unispheredesign.com/demo/assets/vision/prop_280_2.jpg" alt="Lorem ipsum" /></p>
				</div>

				<div class="home-section-3">
					<span class="meta">dolor sit amet</span>
					<h3>Get in touch</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p><p>inventore veritatis et quasi architecto beatae vitae dicta. <a href="#" class="more-link">Read more &raquo;</a></p>
					<p><img src="http://www.unispheredesign.com/demo/assets/vision/prop_280_3.jpg" alt="Lorem ipsum" /></p>
				</div>

			<!--END #home-3-sections-->
			</div>

		<!--END #content-->
		</div>		

<?php include 'footer.php'; ?>