<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/welcome.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css" />
		<title>Fairy Tail CMS</title>
	
	</head>
	<body>

		<div id="header">
			<div id="logo">
				<h1>Fairy Tail CMS</h1>
			</div>
		</div>
	
		<div id="nav_bg">
			<?php $this->load->view($this->config->item('auth_views_root') . 'nav'); ?>
		</div>
		<div id="flash">
			<?php echo $this -> session -> flashdata('notice')?>
		</div>
		<div id="container">