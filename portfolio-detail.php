<?php include 'header.php'; ?>

		<!--BEGIN #sub-header-container-->
		<div id="sub-header-container">

			<!--BEGIN #sub-header-->
			<div id="sub-header">

				<h2>Portfolio</h2>
				<span class="meta">some of my work</span>
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
			
			<!--BEGIN #page-portfolio-detail-->
			<div id="page-portfolio-detail" class="portfolio clearfix">

				<div id="portfolio-detail-description">
					<h2>I Love Print</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mollis eros quis nunc venenatis varius cursus eros consectetur. Duis libero leo, venenatis vel laoreet sit amet, volutpat id nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et elit a lectus interdum sodales et eget tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc eget nisl massa. Etiam varius ultricies porttitor.</p>
					<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut lobortis blandit augue ac faucibus. In hac habitasse platea dictumst. Class aptent taciti sociosque.</p>
					<p>Ut lobortis blandit augue ac faucibus. In hac habitasse platea dictumst. Class aptent taciti sociosque.</p>
				</div>

				<ul id="portfolio-detail-items">

					<li>
						<a href="http://www.unispheredesign.com/demo/assets/vision/portfolio_full4.jpg" title="I Love Print" class="portfolio-image" rel="lightbox[1]">
							<img src="http://www.unispheredesign.com/demo/assets/vision/portfolio_detail_thumb4.jpg" alt="I Love Print" class="ie6fix" />
						</a>
					</li>

					<li>
						<a href="http://www.unispheredesign.com/demo/assets/vision/portfolio_full2.jpg" title="I Love Print" class="portfolio-image" rel="lightbox[1]">
							<img src="http://www.unispheredesign.com/demo/assets/vision/portfolio_detail_thumb2.jpg" alt="I Love Print" class="ie6fix" />
						</a>
					</li>

					<li>
						<a href="http://www.unispheredesign.com/demo/assets/vision/portfolio_full3.jpg" title="I Love Print" class="portfolio-image" rel="lightbox[1]">
							<img src="http://www.unispheredesign.com/demo/assets/vision/portfolio_detail_thumb3.jpg" alt="I Love Print" class="ie6fix" />
						</a>
					</li>

					<li>
						<a href="http://www.unispheredesign.com/demo/assets/vision/portfolio_full5.jpg" title="I Love Print" class="portfolio-image" rel="lightbox[1]">
							<img src="http://www.unispheredesign.com/demo/assets/vision/portfolio_detail_thumb5.jpg" alt="I Love Print" class="ie6fix" />
						</a>
					</li>

				</ul>

				<!--BEGIN slider-full-width jQuery initializer-->
				<script type="text/javascript">
					jQuery(document).ready(function(){
						jQuery("#portfolio-detail-items").css("display", "block");
						jQuery("#portfolio-detail-items").innerfade({ animationtype: "fade", speed: 1000, timeout: 3000, type: "sequence", slide_timer_on: "yes", slide_ui_parent: "portfolio-detail-items", slide_ui_text: "null", pause_button_id: "null", slide_nav_id: "null" });
						jQuery.setOptionsButtonEvent();
					});
				</script>
				<!--END slider-full-width jQuery initializer-->

			<!--END #page-portfolio-detail-->
			</div>            

		<!--END #content-->
		</div>		

<?php include 'footer.php'; ?>