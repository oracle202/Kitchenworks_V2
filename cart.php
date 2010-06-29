<?php include 'header.php'; ?>

		<!--BEGIN #sub-header-container-->
		<div id="sub-header-container">

			<!--BEGIN #sub-header-->
			<div id="sub-header">

				<h2>Shopping Cart</h2>
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
			
			<!--BEGIN #page-full-width-->
			<div id="page-full-width" class="page clearfix">						
                
                <h2 class="highlight">Cart Contents</h2>
				
                <table border="0">
				<thead>
					<tr>
						<th scope="col" width="60%">Product</th>
						<th scope="col">Price</th>
						<th scope="col">Quantity</th>
						<th scope="col">Total</th>
                        <th></th>
					</tr>
				</thead>
				<tfoot>
                    <tr>
                        <th colspan="2" scope="row"></th>
                        <td><a href="#">Update</a></td>
                        <td colspan="2">$202</td>
                    </tr>
				</tfoot>
				<tbody>
                    <tr class="alt">
                        <td>Vision - Corporate and Portfolio WP Theme</td>
                        <td>$37</td>
                        <td><input type="text" value="3" class="quantity" /></td>
                        <td>$111</td>
                        <td><a href="#">remove</a></td>
                    </tr>
                    <tr>
                        <td>UniSphere Minim Corporate and Portfolio</td>
                        <td>$37</td>
                        <td><input type="text" value="1" class="quantity" /></td>
                        <td>$37</td>
                        <td><a href="#">remove</a></td>
                    </tr>
                    <tr class="alt">
                        <td>UniSphere Corporate</td>
                        <td>$27</td>
                        <td><input type="text" value="2" class="quantity" /></td>
                        <td>$54</td>
                        <td><a href="#">remove</a></td>
                    </tr>				
				</tbody>
				</table>
                
                <a href="#" title="Checkout" id="cart-checkout">Checkout »</a>
				<a href="#" title="Continue shopping" id="cart-continue-shopping">« Continue shopping</a>
                
			<!--END #page-full-width-->
			</div>            

		<!--END #content-->
		</div>		
		
<?php include 'footer.php'; ?>