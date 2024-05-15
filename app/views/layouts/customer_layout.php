<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo (!empty($page_title)?$page_title:'Trang chủ Website') ?></title>
	
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/assets/customer/css/bootstrap.min.css">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/assets/customer/css/font-awesome.min.css">
	
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/assets/customer/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/assets/customer/css/style.css">
	<link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/assets/customer/css/responsive.css">
	<link rel="stylesheet" href="<?php echo _WEB_ROOT ?>/public/assets/customer/css/custom.css">
</head>
<body>
	<?php
		$this->render('blocks/customer/header');
		$this->render($content, $sub_content);
		$this->render('blocks/customer/footer');
	?>

	<!-- Latest jQuery form server -->
	<script src="https://code.jquery.com/jquery.min.js"></script>
	
	<!-- Bootstrap JS form CDN -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	<!-- jQuery sticky menu -->
	<script src="<?php echo _WEB_ROOT ?>/public/assets/customer/js/owl.carousel.min.js"></script>
	<script src="<?php echo _WEB_ROOT ?>/public/assets/customer/js/jquery.sticky.js"></script>
	
	<!-- jQuery easing -->
	<script src="<?php echo _WEB_ROOT ?>/public/assets/customer/js/jquery.easing.1.3.min.js"></script>
	
	<!-- Main Script -->
	<script src="<?php echo _WEB_ROOT ?>/public/assets/customer/js/main.js"></script>
	
	<!-- Slider -->
	<script src="<?php echo _WEB_ROOT ?>/public/assets/customer/js/bxslider.min.js"></script>
	<script src="<?php echo _WEB_ROOT ?>/public/assets/customer/js/script.slider.js"></script>

	<!-- Custom -->
	<script src="<?php echo _WEB_ROOT ?>/public/assets/customer/js/script.js"></script>
</body>
</html>