<div class="container-fluid">

	<!-- Page Heading -->
	<div class="mb-4 d-flex flex-wrap justify-content-between align-items-start">
		<h1 class="h3 text-gray-800">Danh sách đơn hàng</h1>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead class="text-nowrap text-center">
						<tr>
							<th>Mã đơn hàng</th>
							<th>Sản phẩm</th>
							<th>Thành tiền</th>
							<th>Người mua</th>
							<th>Người bán</th>
							<th>Trạng thái</th>
						</tr>
					</thead>
					<tfoot class="text-nowrap text-center">
						<tr>
							<th>Mã đơn hàng</th>
							<th>Sản phẩm</th>
							<th>Thành tiền</th>
							<th>Người mua</th>
							<th>Người bán</th>
							<th>Trạng thái</th>
						</tr>
					</tfoot>
					<tbody>
						<?php
							$id_checkout = 0;
							foreach($listItem as $item) {
								$tempItem = '';

								if($id_checkout != $item["id_checkout"]) {
									$id_checkout = $item["id_checkout"];
									echo '
										<tr>
											<td class="text-center">#'.$item["id_checkout"].'</td>
											<td class="text-center">
									';
									foreach($listItem as $itemTemp) {
										if($id_checkout == $itemTemp["id_checkout"])
											$tempItem = $tempItem.$itemTemp["title"].
												' <strong>× '.$itemTemp["c_quantity"].'</strong>
												<br>
											';
									}
									echo $tempItem;
									echo '
											</td>
											<td class="text-center">'.$item["sum"].'</td>
											<td class="text-center">'.$item["c_name"].'</td>
											<td class="text-center">'.$item["a_name"].'</td>
											<td class="text-center">
									';
									$op0 = $item["status"] == 0 ? "selected" : "";
									$op1 = $item["status"] == 1 ? "selected" : "";
									$op2 = $item["status"] == 2 ? "selected" : "";
									$op3 = $item["status"] == 3 ? "selected" : "";
									echo '
											<form action="'._WEB_ROOT.'/quan-tri/update_order" method="POST">
												<select class="form-control" name="status" onchange="updateStatus(this.closest(\'form\'))">
													<option '.$op0.' value="0">Đang xử lý</option>
													<option '.$op1.' value="1">Đang giao hàng</option>
													<option '.$op2.' value="2">Đã giao hàng</option>
													<option '.$op3.' value="3">Hủy</option>
												</select>
												<br>
												<input name="id_admin" value="1" hidden>
												<button class="btn btn-primary" name="id_bill" value="'.$item["id_bill"].'" hidden>
													<i class="fa fa-pen"></i>
													Cập nhật
												</button>
											</form>
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