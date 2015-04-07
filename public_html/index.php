<?php
//init
require '../vendor/autoload.php';

//slim init
$vuelo = new \Slim\Slim(array(
	'debug' => true,
	'log.enabled' => true
));

?>

<!doctype html>
	<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]--> 
	<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]--> 
	<!--[if IE 8]> <html class="no-js lt-ie9" lang=""> <![endif]--> 
	<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]--> 
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Cadre</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" href="assets/css/main.css">
	</head> 
	<body>
		<script src="assets/js/main.js"></script>
	</body>
</html>