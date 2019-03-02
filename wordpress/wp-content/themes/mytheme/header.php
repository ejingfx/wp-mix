<?php
/**
 * The header for our theme.
 *
 * @see https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="">
	<title><?php wp_title('|'); ?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:locale" content="">
	<meta property="fb:admins" content="">
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="">
	<meta property="og:type" content="">
	<meta property="og:image" content="">

	<link rel="shortcut icon" href="">
	<link rel="apple-touch-icon-precomposed" href="">

	<link rel="stylesheet" href="<?= assets_uri('/css/style.css'); ?>">

	<?php wp_head(); ?>
</head>

<body>
