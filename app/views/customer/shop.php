<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Shop</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="single-product-area">
	<div class="container">
		<div class="row">
			<?php
				foreach($listItem as $item) {
					echo '
						<div class="col-md-3 col-sm-6">
							<div class="single-shop-product">
								<div class="product-upper">
									<img src="'._WEB_ROOT.'/public/assets/img/'.$item["img"].'">
								</div>
								<h2><a href="">'.$item["title"].'</a></h2>
								<div class="product-carousel-price">
									<ins>'.$item["price"].'</ins>
								</div>  						
								<div class="product-option-shop">
									<a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="'.$item["id_phone"].'" rel="nofollow" href="'._WEB_ROOT.'/cua-hang/cart/'.$item["id_phone"].'">Add to cart</a>
								</div>
							</div>
						</div>
					';
				};
			?>
		</div>
	</div>
</div>