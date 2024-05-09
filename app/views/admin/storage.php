<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Kho sản phẩm</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Mã</th>
							<th>Ảnh</th>
							<th>Tên</th>
							<th>Hãng sản xuất</th>
							<th>Thông tin</th>
							<th>Giá</th>
							<th>Số lượng</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Mã</th>
							<th>Ảnh</th>
							<th>Tên</th>
							<th>Hãng sản xuất</th>
							<th>Thông tin</th>
							<th>Giá</th>
							<th>Số lượng</th>
						</tr>
					</tfoot>
					<tbody>
						<?php
							foreach($list as $row) {
								echo '
									<tr>
										<td>'.$row["id_phone"].'</td>
										<td>'.$row["img"].'</td>
										<td>'.$row["title"].'</td>
										<td>'.$row["id_manufacturer"].'</td>
										<td>'.$row["info"].'</td>
										<td>'.$row["price"].'</td>
										<td>'.$row["quantity"].'</td>
									</tr>
								';
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>