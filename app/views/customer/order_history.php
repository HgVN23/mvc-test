<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Lịch sử đặt hàng</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="single-product-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="woocommerce">
					<table cellspacing="0" class="shop_table cart">
						<thead>
							<tr>
								<th class="product-thumbnail">Mã đơn hàng</th>
								<th class="product-name">Sản phẩm</th>
								<th class="product-price">Thành tiền</th>
								<th class="product-remove">Trạng thái</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach($cart as $item) {
									echo '
										<tr class="cart_item">
											<td>
												
											</td>
											<td class="product-name">
												<a href="'._WEB_ROOT.'/cua-hang/single_product/'.$item["id_phone"].'">'.$item["title"].'</a> <strong class="product-quantity">× '.$item["c_quantity"].'</strong>
											</td>
											<td class="product-total">
												<span class="sum amount">'.$item["price"]*$item["c_quantity"].'</span>
											</td>
										</tr>
									';
								};
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>