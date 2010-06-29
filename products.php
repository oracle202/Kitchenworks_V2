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

				<h2 class="highlight">Welcome to our store</h2>
                
                <div id="ecommerce-filter" class="ecommerce-order-by">
                	<ul>
                    	<li>Order by:</li>
                        <li class="current"><a href="#" title="Ascending">Ascending</a></li>
                        <li><a href="#" title="Descending">Descending</a></li>
                    </ul>
                </div>
                
                <div id="ecommerce-filter" class="ecommerce-sort-by">
                	<ul>
                    	<li>Sort by:</li>
                        <li><a href="#" title="Price">Price</a></li>
                        <li><a href="#" title="Name">Name</a></li>
                        <li class="current"><a href="#" title="Date">Date</a></li>
                        <li><a href="#" title="Sales">Sales</a></li>
                    </ul>
                </div>
                
                <div id="products-list">
                
                	<ul class="clearfix">				    	

						<li class="product-item-1">
							<a href="product-detail.php" title="Lorum ipsum" class="product-image">
								<img src="http://www.unispheredesign.com/demo/assets/vision/portfolio_thumb1.jpg" alt="Lorum Ipsum" />
							</a>
							<div class="product-text-container">
								<h3 class="product-title">Product 1</h3>
								<span class="product-price">$37</span>
								<a class="product-more-link" href="product-detail.php" title="Lorum Ipsum">View details</a>								
							</div>
						</li>

						<li class="product-item-2">
							<a href="product-detail.php" title="Lorum Ipsum" class="product-image">
								<img src="http://www.unispheredesign.com/demo/assets/vision/portfolio_thumb2.jpg" alt="Lorum Ipsum" />
							</a>
							<div class="product-text-container">
								<h3 class="product-title">Product 2</h3>
								<span class="product-price">$37</span>
								<a class="product-more-link" href="product-detail.php" title="Lorum Ipsum">View details</a>	
							</div>
						</li>

						<li class="product-item-3">
							<a href="product-detail.php" title="Lorum Ipsum" class="product-image">
								<img src="http://www.unispheredesign.com/demo/assets/vision/portfolio_thumb3.jpg" alt="Lorum Ipsum" />
							</a>
							<div class="product-text-container">
								<h3 class="product-title">Product 3</h3>
								<span class="product-price">$37</span>
								<a class="product-more-link" href="product-detail.php" title="Lorum Ipsum">View details</a>	
							</div>
						</li>

					</ul>
                    
                    <ul class="clearfix">				    	

						<li class="product-item-1">
							<a href="product-detail.php" title="Lorum ipsum" class="product-image">
								<img src="http://www.unispheredesign.com/demo/assets/vision/portfolio_thumb5.jpg" alt="Lorum Ipsum" />
							</a>
							<div class="product-text-container">
								<h3 class="product-title">Product 5</h3>
								<span class="product-price">$37</span>
								<a class="product-more-link" href="product-detail.php" title="Lorum Ipsum">View details</a>	
							</div>
						</li>

						<li class="product-item-2">
							<a href="product-detail.php" title="Lorum Ipsum" class="product-image">
								<img src="http://www.unispheredesign.com/demo/assets/vision/portfolio_thumb6.jpg" alt="Lorum Ipsum" />
							</a>
							<div class="product-text-container">
								<h3 class="product-title">Product 6</h3>
								<span class="product-price">$37</span>
								<a class="product-more-link" href="product-detail.php" title="Lorum Ipsum">View details</a>	
							</div>
						</li>

						<li class="product-item-3">
							<a href="product-detail.php" title="Lorum Ipsum" class="product-image">
								<img src="http://www.unispheredesign.com/demo/assets/vision/portfolio_thumb7.jpg" alt="Lorum Ipsum" />
							</a>
							<div class="product-text-container">
								<h3 class="product-title">Product 7</h3>
								<span class="product-price">$37</span>
								<a class="product-more-link" href="product-detail.php" title="Lorum Ipsum">View details</a>	
							</div>
						</li>                        
                        
					</ul>
                    
               	</div>
                
                <div class="wp-pagenavi">
					<span class="current">1</span>
					<a href="#" class="page" title="2">2</a>
					<a href="#" class="page" title="3">3</a>
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