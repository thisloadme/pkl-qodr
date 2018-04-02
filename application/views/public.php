<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?=base_url() ?>materialize/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url() ?>materialize/css/icon.css">
		<link rel="stylesheet" type="text/css" href="<?base_url() ?>materialize/css/style.css">
		<title><?= $judul ?></title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if (isset($redir)) { ?>
			<meta http-equiv='refresh' content='2;url=<?=site_url('c_home') ?>'>
		<?php } ?>
	</head>
	<body>
		
		<div class="row">
			<nav class="teal">
				<div class="nav-wrapper col s12">
					<a href="#" class="brand-logo left">PKL QODR</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<?php if (!isset($halaman)) { ?>
						<li><a href="<?=site_url('c_home/index') ?>"><i class="material-icons">home</i></a></li>
						<?php } ?>
						<?php if (isset($halaman)) { ?>
						<li><a href="<?=site_url('c_home/form_tambah') ?>"><i class="material-icons">add</i></a></li>
						<?php } ?>
					</ul>
				</div>
			</nav>
			<?php $this->load->view($isi); ?>
		</div>
		
				<footer class="page-footer teal"><div class="container">Made by <i class="material-icons">favorite</i></div></footer>			
		
		<script type="text/javascript" src="<?=base_url() ?>materialize/js/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="<?=base_url() ?>materialize/js/materialize.min.js"></script>
		<!-- <script type="text/javascript">
			$(document).ready(function() {
			    $('select').material_select();
			});
		</script> -->
		<script type="text/javascript" src="<?=base_url() ?>materialize/js/init.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.parallax').parallax();
			});
		</script>
	</body>
</html>