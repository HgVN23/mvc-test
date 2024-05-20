<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
	</div>

	<!-- Content Row -->
	<div class="row">

		<a class="col-md-6 mb-4" href="<?php echo _WEB_ROOT ?>/quan-tri/list_order">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Đơn hàng cần xử lý</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count0[0]["count"] ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</a>

		<a class="col-md-6 mb-4" href="<?php echo _WEB_ROOT ?>/quan-tri/list_order">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Đơn hàng đang giao</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count1[0]["count"] ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-box fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>

</div>