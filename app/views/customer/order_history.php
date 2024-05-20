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
								<th>Mã đơn hàng</th>
								<th>Sản phẩm</th>
								<th>Thành tiền</th>
								<th>Người bán</th>
								<th>Trạng thái</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$id_checkout = 0;
								foreach($listItem as $item) {
									$tempItem = '';

									if($id_checkout != $item["id_checkout"]) {
										$id_checkout = $item["id_checkout"];
										echo '
											<tr class="cart_item">
												<td>#'.$item["id_checkout"].'</td>
												<td class="product-name">
										';
										foreach($listItem as $itemTemp) {
											if($id_checkout == $itemTemp["id_checkout"])
												$tempItem = $tempItem.'
													<a href="'._WEB_ROOT.'/cua-hang/single_product/'.$itemTemp["id_phone"].'">'.$itemTemp["title"].'</a>
													<strong class="product-quantity">× '.$itemTemp["c_quantity"].'</strong>
													<br>
												';
										}
										echo $tempItem;
										echo '
												</td>
												<td>'.$item["sum"].'</td>
												<td>'.$item["name"].'</td>
												<td>
										';
										switch($item["status"]) {
											case 0:
												echo '<button class="btn btn-secondary rounded-pill p-4">Đang xử lý</button>';
												break;
											case 1:
												echo '<button class="btn btn-primary rounded-pill p-4">Đang giao hàng</button>';
												break;
											case 2:
												echo '<button class="btn btn-success rounded-pill p-4">Đã giao hàng</button>';
												break;
											case 3:
												echo '<button class="btn btn-danger rounded-pill p-4">Hủy</button>';
												break;
											default:
												break;
										}
										echo '
												</td>
											</tr>
										';
									}
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>