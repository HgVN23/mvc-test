<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo (!empty($page_title)?$page_title:'Trang chủ Website') ?></title>
	
	<!-- Custom fonts for this template-->
	<link href="<?php echo _WEB_ROOT ?>/public/assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo _WEB_ROOT ?>/public/assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="<?php echo _WEB_ROOT ?>/public/assets/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<?php $this->render('blocks/admin/sidebar'); ?>
		
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Header -->
				<?php $this->render('blocks/admin/header'); ?>

				<!-- Begin Page Content -->
				<?php $this->render($content, $sub_content); ?>

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<?php $this->render('blocks/admin/footer'); ?>

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<?php $this->render('blocks/admin/goTop'); ?>

	<!-- Logout Modal-->
	<?php $this->render('blocks/admin/logout'); ?>
	
	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo _WEB_ROOT ?>/public/assets/admin/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo _WEB_ROOT ?>/public/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo _WEB_ROOT ?>/public/assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo _WEB_ROOT ?>/public/assets/admin/js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="<?php echo _WEB_ROOT ?>/public/assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo _WEB_ROOT ?>/public/assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="<?php echo _WEB_ROOT ?>/public/assets/admin/js/demo/datatables-demo.js"></script>

	<!-- Custom scripts -->
	<script src="<?php echo _WEB_ROOT ?>/public/assets/admin/js/script.js" defer></script>
</body>
</html>