<?php include 'header.php'; ?>

		<!--BEGIN #sub-header-container-->
		<div id="sub-header-container">

			<!--BEGIN #sub-header-->
			<div id="sub-header">

				<h2>Products</h2>
				<span class="meta">ecommerce example</span>
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
        
        	<!--BEGIN #products-main-->
			<div id="products-main">

				<h2 class="highlight">Product 1</h2>
                
                <div id="product-detail-description">
                	<a href="http://www.unispheredesign.com/demo/assets/vision/portfolio_full4.jpg" title="I Love Print" class="product-image" rel="lightbox[1]">
						<img src="http://www.unispheredesign.com/demo/assets/vision/portfolio_detail_thumb4.jpg" alt="I Love Print" class="ie6fix" />
                    </a>
					<div id="product-detail-options" class="clearfix">
                    	<div class="clearfix">
							<div id="product-cart"><a href="#">+ Add to Cart</a></div>
							<div id="product-price">Price: <span id="price">$37</span></div>
					    </div>
                                        
                        <div class="product-option">
                            <label for="Color">Color:</label>
                            <p><select name="Color" id="Color">
                                <option value="Red">Red</option>
                                <option value="blue">blue</option>
                                <option value="white">white</option>
                                <option value="green">green</option>
                            </select></p>
                        </div>
                                            
                        <div class="product-option">
                            <label for="Size">Size:</label>
                            <p><select name="Size" id="Size">		
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                                <option value="XXXL">XXXL</option>
                            </select></p>
                        </div>
    
                        <div class="product-option">
                            <label for="Print">Print:</label>
                            <p><select name="Print">		
                                <option value="Front">Front</option>
                                <option value="Back">Back</option>
                                <option value="Both">Both</option>
                            </select></p>
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
				</div>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mollis eros quis nunc venenatis varius cursus eros consectetur. Duis libero leo, venenatis vel laoreet sit amet, volutpat id nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et elit a lectus interdum sodales et eget tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc eget nisl massa. Etiam varius ultricies porttitor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut lobortis blandit augue ac faucibus.</p>
    
                    <!--
                    <ul id="product-detail-items">
    
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
                    -->
    
                    
    
                <!--END #page-portfolio-detail-->
                </div>  					

			<!--END .hfeed-->
			</div>

			<!--BEGIN #products-aside-->
			<div id="products-aside" class="clearfix">

				<!--BEGIN .widget-->
				<div class="widget">
					<h3>Categories</h3>
					<ul>
						<li><a href="#" title="All">All</a></li>
						<li><a href="#" title="Books">Books</a></li>
						<li><a href="#" title="DVDs">DVDs</a></li>
						<li><a href="#" title="Themes">Themes</a></li>
					</ul>
				<!--END .widget-->
				</div>
                
			<!--END .aside-->
			</div>

		<!--END #content-->
		</div>		

<?php include 'footer.php'; ?>