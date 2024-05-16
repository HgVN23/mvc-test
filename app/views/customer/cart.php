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
					<table cellspacing="0" class="shop_table cart">
						<thead>
							<tr>
								<th class="product-thumbnail">Ảnh</th>
								<th class="product-name">Sản phẩm</th>
								<th class="product-price">Giá</th>
								<th class="product-quantity">Số lượng</th>
								<th class="product-subtotal">Tổng</th>
								<th class="product-remove">Bỏ hàng</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach($cart as $item) {
									echo '
										<tr class="cart_item">
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
													<input type="number" size="4" class="input-text qty text" value="'.$item["c_quantity"].'" min="1" max="'.$item["quantity"].'" onchange="update(this.closest(\'tr\'))"> / '.$item["quantity"].'
												</div>
											</td>
											<td class="product-subtotal">
												<span class="sum amount"></span> 
											</td>
											<td class="product-remove">
												<button class="btn btn-danger" id="'.$item["title"].'" value="'.$item["id_phone"].'" data-toggle="modal" data-target="#modalRemove" onclick="removeProduct(this)">
													<i class="fa fa-trash"></i>
													Bỏ
												</button>
												<br><br>
												<form action="'._WEB_ROOT.'/cua-hang/update_cart" method="POST">
													<input type="number" name="id_phone" value="'.$item["id_phone"].'" hidden>
													<button class="updateBtn btn btn-primary hidden" name="c_quantity" value="">
														<i class="fa fa-pencil"></i>
														Cập nhật
													</button>
												</form>
											</td>
										</tr>
									';
								};
								if(!empty($cart)) {
									echo '
										<tr>
											<td class="actions" colspan="6">
												<a class="checkoutBtn btn btn-primary" href="'._WEB_ROOT.'/cua-hang/checkout">Đặt hàng</a>
											</td>
										</tr>
									';
								} else
									echo '
										<tr>
											<td class="h4" colspan="6">Giỏ trống</td>
										</tr>
									';
							?>
						</tbody>
					</table>
					<?php
						if(!empty($cart)) {
							echo '
								<div class="cart-collaterals">
									<div class="cart_totals ">
										<h2>Thành tiền giỏ hàng</h2>
										<table cellspacing="0">
											<tbody>
												<tr class="order-total">
													<th>Thành tiền</th>
													<td><strong><span class="order amount"></span></strong></td>
												</tr>
											</tbody>
										</table>
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

<!-- Modal -->
<div class="modal fade" id="modalRemove" data-backdrop="static" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-md modal-dialog-centered">
		<form class="modal-content" action="<?php echo _WEB_ROOT; ?>/cua-hang/delete_cart" method="POST">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
				<h4 class="modal-title">Bỏ sản phẩm <span id="titleProduct"></span></h4>
			</div>
			<div class="modal-body text-center">
				<p class="">Xác nhận bỏ?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-times"></i>
					Hủy
				</button>
				<button name="remove" value="" class="btn btn-danger">
					<i class="fa fa-trash"></i>
					Bỏ
				</button>
			</div>
		</form>
	</div>
</div>