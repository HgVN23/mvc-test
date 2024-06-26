<div class="container-fluid">

	<!-- Page Heading -->
	<div class="mb-4 d-flex flex-wrap justify-content-between align-items-start">
		<h1 class="h3 text-gray-800">Kho sản phẩm</h1>
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">
			<i class="fa fa-plus"></i>
			Thêm sản phẩm
		</button>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead class="text-nowrap text-center">
						<tr>
							<th>Mã</th>
							<th>Ảnh</th>
							<th>Tên</th>
							<th>Hãng sản xuất</th>
							<th>Thông tin</th>
							<th>Giá</th>
							<th>Số lượng</th>
							<th>Công cụ</th>
						</tr>
					</thead>
					<tfoot class="text-nowrap text-center">
						<tr>
							<th>Mã</th>
							<th>Ảnh</th>
							<th>Tên</th>
							<th>Hãng sản xuất</th>
							<th>Thông tin</th>
							<th>Giá</th>
							<th>Số lượng</th>
							<th>Công cụ</th>
						</tr>
					</tfoot>
					<tbody>
						<?php
							foreach($listItem as $row) {
								echo '
									<tr>
										<td class="text-center">'.$row["id_phone"].'</td>
										<td>
											<div class="img mx-auto">
												<img src="'._WEB_ROOT.'/public/assets/img/'.$row["img"].'">
											</div>
										</td>
										<td>'.$row["title"].'</td>
										<td data-brand="'.$row["id_brand"].'">'.$row["name"].'</td>
										<td>'.$row["info"].'</td>
										<td class="text-center">'.$row["price"].'</td>
										<td class="text-center">'.$row["quantity"].'</td>
										<td>
											<div class="d-flex justify-content-around text-nowrap" style="gap: .5rem;">
												<button class="btn btn-danger" value="'.$row["id_phone"].'" data-toggle="modal" data-target="#modalRemove" onclick="removeProduct(this)">
													<i class="fa fa-trash"></i>
													Loại bỏ
												</button>
												<button class="btn btn-primary" data-toggle="modal" data-target="#modalAdd" onclick="editProduct(this.closest(\'tr\'))">
													<i class="fa fa-pen"></i>
													Cập nhật
												</button>
											</div>
										</td>
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

<!-- Modal -->
<div class="modal fade" id="modalAdd" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered">
		<form class="mainForm modal-content" action="<?php echo _WEB_ROOT; ?>/quan-tri/insert_storage" method="POST">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Thông tin sản phẩm</h5>
				<button type="button" class="close resetForm" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body row mt-2">
				<div class="col-lg-4 d-flex flex-column gap-2">
					<div>
						<label for="img" class="form-label">Ảnh</label>
						<input class="form-control" type="file" id="img" name="img" accept="image/*">
					</div>
					<div class="img border mt-2 align-self-center d-flex justify-content-center text-center">
						<img id="imgPreview" class="align-self-center" src="">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-2 my-1">
							<label for="id_phone" class="form-label">Mã</label>
							<input type="number" class="form-control bg-primary-subtle" id="id_phone" name="id_phone" value="<?php echo $idMax[0]["max"] + 1; ?>" placeholder="..." readonly>
						</div>
						<div class="col-lg-5 my-1">
							<label for="title" class="form-label">Tên</label>
							<input type="text" class="form-control" id="title" name="title" value="" placeholder="..." required>
						</div>
						<div class="col-lg-5 my-1">
							<label for="id_brand" class="form-label">Thương hiệu</label>
							<select class="form-control" id="id_brand" name="id_brand" required>
								<option selected disabled>...</option>
								<?php
									foreach($listBrand as $option) {
										echo '<option value="'.$option["id_brand"].'">'.$option["name"].'</option>';
									}
								?>
							</select>
						</div>
						<div class="col-lg-12 my-1">
							<label for="info" class="form-label">Thông tin</label>
							<textarea class="form-control" id="info" name="info" value="" placeholder="..." required></textarea>
						</div>
						<div class="col-lg-6 my-1">
							<label for="price" class="form-label">Đơn giá</label>
							<div class="input-group">
								<input type="number" class="form-control" id="price" name="price" value="100000" placeholder="..." required>
								<div class="input-group-prepend">
									<div class="input-group-text">đ</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 my-1">
							<label for="quantity" class="form-label">Số lượng</label>
							<input type="number" class="form-control" id="quantity" name="quantity" value="1" placeholder="..." min="0" required>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-danger resetForm">
					<i class="fa fa-redo"></i>
					Làm mới
				</button>
				<button type="submit" class="btn btn-success">
					<i class="fa fa-save"></i>
					Cập nhật
				</button>
			</div>
		</form>
	</div>
</div>
<div class="modal fade" id="modalRemove" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm modal-dialog-centered">
		<form class="mainForm modal-content" action="<?php echo _WEB_ROOT; ?>/quan-tri/delete_storage" method="POST">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Xóa sản phẩm Mã <span id="idProduct"></span></h5>
				<button type="button" class="close resetForm" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">
				<p class="">Xác nhận xóa?</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-times"></i>
					Hủy
				</button>
				<button type="submit" name="remove" value="" class="btn btn-danger">
					<i class="fa fa-trash"></i>
					Xóa
				</button>
			</div>
		</form>
	</div>
</div>