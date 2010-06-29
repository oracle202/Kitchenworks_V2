<?php include 'header.php'; ?>

		<!--BEGIN #content-->
		<div id="content">

			<!--BEGIN #slider-full-width-->
			<div id="slider-full-width">
				<ul id="slider-full-width-items">
					<li>
						<a href="#" title="A featured post"><img src="images/image1.jpg" alt="Transitional" class="ie6fix" /></a>
						<div class="text-bg"></div>
						<div class="text">
							<h2><a href="#" title="">Design Fusion</a></h2>
							<p>Where modern taste meets traditional comfort...</p>
						</div>
					</li>
					<li>
						<a href="#" title="A featured post"><img src="images/image2.jpg" alt="A featured post" class="ie6fix" /></a>
						<div class="text-bg"></div>
						<div class="text">
							<h2><a href="#" title="">This is a Nice Title</a></h2>
							<p>This is a very very nice description.</p>
						</div>
					</li>
					<li>
						<a href="#" title="A featured post"><img src="images/image3.jpg" alt="A featured post" class="ie6fix" /></a>
						<div class="text-bg"></div>
						<div class="text">
							<h2><a href="#" title="">This is a Nice Title</a></h2>
							<p>This is a very very nice description.</p>
						</div>
					</li>
					<li>
						<a href="#" title="A featured post"><img src="images/image4.jpg" alt="A featured post" class="ie6fix" /></a>
						<div class="text-bg"></div>
						<div class="text">
							<h2><a href="#" title="">This is a Nice Title</a></h2>
							<p>This is a very very nice description.</p>
						</div>
					</li>
					<li>
						<a href="#" title="A featured post"><img src="images/image5.jpg" alt="A featured post" class="ie6fix" /></a>
						<div class="text-bg"></div>
						<div class="text">
							<h2><a href="#" title="">This is a Nice Title</a></h2>
							<p>This is a very very nice description.</p>
						</div>
					</li>				
				</ul>
                
                <ul id="slider_nav">
					<li class="slide_4"></li>
					<li class="slide_3"></li>
					<li class="slide_2"></li>            
					<li class="slide_1"></li>            
					<li class="slide_0"></li>            
				</ul>
                
			<!--END #slider-full-width-->
			</div>
            
			<!--BEGIN slider-full-width jQuery initializer-->
			<script type="text/javascript">
				jQuery(document).ready(function(){
					jQuery("#slider-full-width").css("display", "block");
					jQuery("#slider-full-width-items").innerfade({ animationtype: "fade", speed: 1000, timeout: 7000, type: "sequence", containerheight: "434px", slide_timer_on: "yes", slide_ui_parent: "slider-full-width-items", slide_ui_text: "null", pause_button_id: "null", slide_nav_id: "slider_nav" });
					jQuery.setOptionsButtonEvent();
				});	
			</script>
  			<!--END slider-full-width jQuery initializer-->

			<!--BEGIN #home-3-sections-->
			<div id="home-3-sections" class="clearfix">

				<div class="home-section-1">
					<span class="meta">dolor sit amet</span>
					<h3>Custom Cabinetry</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p><p>inventore veritatis et quasi architecto beatae vitae dicta. <a href="#" class="more-link">Read more &raquo;</a></p>
					<p><img src="http://www.unispheredesign.com/demo/assets/vision/prop_280_1.jpg" alt="Lorem ipsum" /></p>
				</div>

				<div class="home-section-2">
					<span class="meta">dolor sit amet</span>
					<h3>Fine Appliances</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p><p>inventore veritatis et quasi architecto beatae vitae dicta. <a href="#" class="more-link">Read more &raquo;</a></p>
					<p><img src="http://www.unispheredesign.com/demo/assets/vision/prop_280_2.jpg" alt="Lorem ipsum" /></p>
				</div>

				<div class="home-section-3">
					<span class="meta">dolor sit amet</span>
					<h3>Interior Design</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p><p>inventore veritatis et quasi architecto beatae vitae dicta. <a href="#" class="more-link">Read more &raquo;</a></p>
					<p><img src="http://www.unispheredesign.com/demo/assets/vision/prop_280_3.jpg" alt="Lorem ipsum" /></p>
				</div>

			<!--END #home-3-sections-->
			</div>
	
		<!--END #content-->
		</div>		
		
<?php include 'footer.php'; ?>