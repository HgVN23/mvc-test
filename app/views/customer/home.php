<div class="slider-area">
	<div class="block-slider block-slider4">
		<ul class="" id="bxslider-home4">
			<li>
				<img src="<?php echo _WEB_ROOT ?>/public/assets/customer/img/h4-slide.png" alt="Slide">
				<div class="caption-group">
					<h2 class="caption title">
						iPhone <span class="primary">6 <strong>Plus</strong></span>
					</h2>
					<h4 class="caption subtitle">Dual SIM</h4>
					<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
				</div>
			</li>
			<li><img src="<?php echo _WEB_ROOT ?>/public/assets/customer/img/h4-slide2.png" alt="Slide">
				<div class="caption-group">
					<h2 class="caption title">
						by one, get one <span class="primary">50% <strong>off</strong></span>
					</h2>
					<h4 class="caption subtitle">school supplies & backpacks.*</h4>
					<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
				</div>
			</li>
			<li><img src="<?php echo _WEB_ROOT ?>/public/assets/customer/img/h4-slide3.png" alt="Slide">
				<div class="caption-group">
					<h2 class="caption title">
						Apple <span class="primary">Store <strong>Ipod</strong></span>
					</h2>
					<h4 class="caption subtitle">Select Item</h4>
					<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
				</div>
			</li>
			<li><img src="<?php echo _WEB_ROOT ?>/public/assets/customer/img/h4-slide4.png" alt="Slide">
				<div class="caption-group">
				  <h2 class="caption title">
						Apple <span class="primary">Store <strong>Ipod</strong></span>
					</h2>
					<h4 class="caption subtitle">& Phone</h4>
					<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
				</div>
			</li>
		</ul>
	</div>
</div>

<div class="promo-area">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="single-promo promo1">
					<i class="fa fa-refresh"></i>
					<p>30 Days return</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-promo promo2">
					<i class="fa fa-truck"></i>
					<p>Free shipping</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-promo promo3">
					<i class="fa fa-lock"></i>
					<p>Secure payments</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="single-promo promo4">
					<i class="fa fa-gift"></i>
					<p>New products</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="maincontent-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="latest-product">
					<h2 class="section-title">Sản phẩm mới nhất</h2>
					<div class="product-carousel">
						<?php
							foreach($listItem as $item) {
								echo '
									<div class="single-product">
										<div class="product-f-image">
											<img src="'._WEB_ROOT.'/public/assets/img/'.$item["img"].'">
											<div class="product-hover">
												<a href="'._WEB_ROOT.'/cua-hang/insert_cart/'.$item["id_phone"].'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
												<a href="'._WEB_ROOT.'/cua-hang/single_product/'.$item["id_phone"].'" class="view-details-link"><i class="fa fa-link"></i> Xem chi tiết</a>
											</div>
										</div>
										
										<h2><a href="'._WEB_ROOT.'/single_product/'.$item["img"].'">'.$item["title"].'</a></h2>
										
										<div class="product-carousel-price">
											<ins>'.$item["price"].'</ins>
										</div> 
									</div>
								';
							};
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>