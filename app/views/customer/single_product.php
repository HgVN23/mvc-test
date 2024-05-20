<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Sản phẩm</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="single-product-area">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			
			<div class="col-md-10">
				<div class="product-content-right">
					
					<div class="row">
						<div class="col-sm-6">
							<div class="product-images">
								<div class="product-main-img img2">
									<img src="<?php echo _WEB_ROOT ?>/public/assets/img/<?php echo $item[0]["img"] ?>">
								</div>
							</div>
						</div>
						
						<div class="col-sm-6">
							<div class="product-inner">
								<h2 class="product-name"><?php echo $item[0]["title"] ?></h2>
								<div class="product-inner-price">
									<ins><?php echo $item[0]["price"] ?></ins>
								</div>    
								<?php
									$check = false;
									foreach($cart as $itemC) {
										if($itemC["id_phone"] == $item[0]["id_phone"]) {
											$check = true;
											break;
										}
									}
									if(!$check) {
										$action = 'insert_cart/'.$item[0]["id_phone"];
										$button = '
											<button class="add_to_cart_button">
												<i class="fa fa-shopping-cart"></i>
												Thêm vào giỏ
											</button>
										';
									} else {
										$action = 'delete_cart';
										$button = '
											<button class="add_to_cart_button" name="remove" value="'.$item[0]["id_phone"].'">
												<i class="fa fa-shopping-cart"></i>
												Xóa khỏi giỏ
											</button>
										';
									}
								?>
								<form action="<?php echo _WEB_ROOT.'/cua-hang/'.$action ?>" class="cart">
									<?php echo $button ?>
								</form>   
								
								<div class="product-inner-category">
									<p>Thương hiệu: <a href=""><?php echo $item[0]["name"] ?></a></p>
								</div> 
								
								<div role="tabpanel">
									<ul class="product-tab" role="tablist">
										<li role="presentation" class="active"><a>Mô tả</a></li>
									</ul>
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="home">
											<h2>Thông tin sản phẩm</h2>  
											<p><?php echo $item[0]["info"] ?></p>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>                    
			</div>
		</div>
	</div>
</div>