<?php

define('_DIR_ROOT', __DIR__);

// Xử lý http root
if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')
	$web_root = "https://".$_SERVER['HTTP_HOST'];
else
	$web_root = "http://".$_SERVER['HTTP_HOST'];

$fTemp = str_replace('/', '\\', strtolower($_SERVER['DOCUMENT_ROOT']));
$folder = str_replace($fTemp, '', strtolower(_DIR_ROOT));

$web_root = $web_root.$folder;

define('_WEB_ROOT', $web_root);

// Tự động Load configs
$configs_dir = scandir('configs');

if(!empty($configs_dir)) {
	foreach($configs_dir as $item) {
		if($item != '.' && $item != '..' && file_exists('configs/'.$item)) {
			require_once 'configs/'.$item;
		}
	}
}

require_once 'core/Route.php';
require_once 'app/App.php';

// Kiểm tra config và load db
if(!empty($config['database'])) {
	$db_config = $config['database'];
	
	if(!empty($db_config)) {
		require_once 'core/Connection.php';
		require_once 'core/QueryBuilder.php';
		require_once 'core/Database.php';
		require_once 'core/DB.php';
	}
}
require_once 'core/Model.php';
require_once 'core/Controller.php';
require_once 'core/Request.php';
require_once 'core/Response.php';

?>