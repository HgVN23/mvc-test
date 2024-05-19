<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Thanh toán</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="single-product-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-content-right">
					<h3 id="order_review_heading">Đơn đặt của bạn</h3>

					<div id="order_review" style="position: relative;">
						<table class="shop_table">
							<thead>
								<tr>
									<th class="product-name">Sản phẩm</th>
									<th class="product-total">Tổng</th>
								</tr>
							</thead>
							<tbody>
								<?php
									if(!empty($cart)) {
										foreach($cart as $item) {
											echo '
												<tr class="cart_item">
													<td class="product-name">
														<a href="'._WEB_ROOT.'/cua-hang/single_product/'.$item["id_phone"].'">'.$item["title"].'</a> <strong class="product-quantity">× '.$item["c_quantity"].'</strong>
													</td>
													<td class="product-total">
														<span class="sum amount">'.$item["price"]*$item["c_quantity"].'</span>
													</td>
												</tr>
											';
										}
									} else {
										echo '<td colspan=2><h4>Không có sản phẩm nào trong giỏ</h4></td>';
									}
								?>
							</tbody>
							<tfoot>
								<tr class="order-total">
									<th>Thành tiền</th>
									<td><strong><span class="order amount"></span></strong></td>
								</tr>
							</tfoot>
						</table>
						<input class="cal hidden" onclick="sum()">
						<?php
							if(!empty($cart)) {
								echo '
									<div id="payment">
										<ul class="payment_methods methods">
											<li class="payment_method_bacs">
												<input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
												<label for="payment_method_bacs">Direct Bank Transfer </label>
												<div class="payment_box payment_method_bacs">
													<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
												</div>
											</li>
											<li class="payment_method_cheque">
												<input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
												<label for="payment_method_cheque">Cheque Payment </label>
												<div style="display:none;" class="payment_box payment_method_cheque">
													<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
												</div>
											</li>
											<li class="payment_method_paypal">
												<input type="radio" data-order_button_text="Proceed to PayPal" value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal">
												<label for="payment_method_paypal">PayPal 
													<img alt="PayPal Acceptance Mark" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png">
												</label>
												<div style="display:none;" class="payment_box payment_method_paypal">
													<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
												</div>
											</li>
										</ul>

										<div class="form-row place-order">
											<form action="'._WEB_ROOT.'/cua-hang/insert_checkout" method="POST">
												<button type="submit" class="button">Thanh toán</button>
											</form>

										</div>

										<div class="clear"></div>
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