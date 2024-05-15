<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Giỏ hàng</h2>
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
					<form method="post" action="#">
						<table cellspacing="0" class="shop_table cart">
							<thead>
								<tr>
									<th class="product-remove">Bỏ hàng</th>
									<th class="product-thumbnail">Ảnh</th>
									<th class="product-name">Sản phẩm</th>
									<th class="product-price">Giá</th>
									<th class="product-quantity">Số lượng</th>
									<th class="product-subtotal">Tổng</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach($listItem as $item) {
										echo '
											<tr class="cart_item">
												<td class="product-remove">
													<a title="Remove this item" class="remove">×</a> 
												</td>

												<td class="product-thumbnail">
													<a href="'._WEB_ROOT.'/cua-hang/single_product/'.$item["id_phone"].'"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="'._WEB_ROOT.'/public/assets/img/'.$item["img"].'"></a>
												</td>

												<td class="product-name">
													<a href="'._WEB_ROOT.'/cua-hang/single_product/'.$item["id_phone"].'">'.$item["title"].'</a> 
												</td>

												<td class="product-price">
													<span class="price amount">'.$item["price"].'</span> 
												</td>

												<td class="product-quantity">
													<div class="quantity buttons_added">
														<input type="number" size="4" class="input-text qty text" value="1" min="1" max="'.$item["quantity"].'" step="1"> / '.$item["quantity"].'
													</div>
												</td>

												<td class="product-subtotal">
													<span class="sum amount"></span> 
												</td>
											</tr>
										';
									};
								?>
								<tr>
									<td class="actions" colspan="6">
										<input type="submit" value="Thanh toán" name="proceed" class="button">
									</td>
								</tr>
							</tbody>
						</table>
					</form>

					<div class="cart-collaterals">

						<div class="cart_totals ">
							<h2>Cart Totals</h2>

							<table cellspacing="0">
								<tbody>
									<tr class="order-total">
										<th>Order Total</th>
										<td><strong><span class="order amount">0</span></strong> </td>
									</tr>
								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>