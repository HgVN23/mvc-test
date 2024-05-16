<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Cửa hàng</h2>
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
					$check = false;
					foreach($cart as $itemC) {
						if($itemC["id_phone"] == $item["id_phone"]) {
							$check = true;
							break;
						}
					}
					if(!$check) {
						$action = 'insert_cart/'.$item["id_phone"];
						$button = '<button style="all: unset; cursor: pointer;">Thêm vào giỏ</button>';
					} else {
						$action = 'delete_cart';
						$button = '<button style="all: unset; cursor: pointer;" name="remove" value="'.$item["id_phone"].'">Xóa khỏi giỏ</button>';
					}

					echo '
						<div class="col-md-3 col-sm-6">
							<div class="single-shop-product">
								<div class="product-upper img">
									<a href="'._WEB_ROOT.'/cua-hang/single_product/'.$item["id_phone"].'"><img src="'._WEB_ROOT.'/public/assets/img/'.$item["img"].'"></a>
								</div>
								<h2><a href="'._WEB_ROOT.'/cua-hang/single_product/'.$item["id_phone"].'">'.$item["title"].'</a></h2>
								<div class="product-carousel-price">
									<ins>'.$item["price"].'</ins>
								</div>  						
								<div class="product-option-shop">
									<form action="'._WEB_ROOT.'/cua-hang/'.$action.'" method="POST">
										<a class="add_to_cart_button">
											<i class="fa fa-shopping-cart"></i>
											'.$button.'
										</a>
									</form>
								</div>
							</div>
						</div>
					';
				};
			?>
		</div>
	</div>
</div>