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
								
								<form action="" class="cart">
									<div class="quantity">
										<input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
									</div>
									<button class="add_to_cart_button" type="submit">Add to cart</button>
								</form>   
								
								<div class="product-inner-category">
									<p>Category: <a href=""><?php echo $item[0]["name"] ?></a></p>
								</div> 
								
								<div role="tabpanel">
									<ul class="product-tab" role="tablist">
										<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mô tả</a></li>
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