<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeDescription = '';
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());

$uri_path1 = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments1 = explode('/', $uri_path1);

if(CakeSession::read('loggedInUserId') >0){

	if(($uri_segments1[2]=='Feedbackform' || $uri_segments1[2]=='feedbackform') && ($uri_segments1[3]=='' || $uri_segments1[3]=='View')){
		$title = 'Feedback';
	}else if(($uri_segments1[2]=='Volunteer' || $uri_segments1[2]=='volunteer') && ($uri_segments1[3]=='')){

		$title = 'Volunteer';

	}else if(($uri_segments1[2]=='Volunteer' || $uri_segments1[2]=='volunteer') && ($uri_segments1[3]=='category')){

		$title = 'Category';

	}else if(($uri_segments1[2]=='Volunteer' || $uri_segments1[2]=='volunteer') && ($uri_segments1[3]=='subcategory')){

		$title = 'Subcategory';

	}else if($uri_segments1[2]=='dashboard' && $uri_segments1[3]==''){

		$title = 'Dashboard';

	}else if($uri_segments1[3]=='get_all_users'){

		$title = 'All Users';

	}else if($uri_segments1[3]=='Edit'){

		$title = 'Edit';

	}else{

		$title = 'Mailer Dashboard';
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php //echo $cakeDescription ?>:
			<?php echo $title; ?>
		</title>
		<?php
			echo $this->Html->meta('icon');

			echo $this->Html->css('cake.generic');

			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta http-equiv="content-language" content="en" />

		<title>AdminLTE 3 | Dashboard 2</title>

		<!-- Font Awesome Icons -->
		<link rel="stylesheet" href="<?=ROOT_PATH ?>css/all.min.css">
		  <!-- overlayScrollbars -->
		<link rel="stylesheet" href="<?=ROOT_PATH ?>css/OverlayScrollbars.min.css">
		  <!-- Theme style -->
		<link rel="stylesheet" href="<?=ROOT_PATH ?>css/adminlte.min.css">

		<link rel="stylesheet" href="<?=ROOT_PATH ?>css/dataTables.bootstrap4.css">
		  <!-- Google Font: Source Sans Pro -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

		<link href="<?=ROOT_PATH ?>css/jquery-ui.min.css" rel="stylesheet">
		<link href="https://www.thearyasamaj.info/css/sweetalert.css" rel="stylesheet">
		<script src="https://www.thearyasamaj.info/js/sweetalert.min.js"></script>
	</head>
	<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

<? }else{
	$this->requestAction(array('controller' => 'users', 'action' => 'logout', 'Invalid user .Please Login again...'));
} ?>