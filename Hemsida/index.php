<?php
session_start();
include('assets/class.php');

$page = @$_GET['page'];
switch ($page) {
	case '':
		$show_page = "start";
		$title = "Startsida";
		break;
	case 'start':
		$show_page = "start";
		$title = "Startsidan";
		break;
	case 'process':
		$show_page = "process";
		$title = "Process";
		break;
	case 'about':
		$show_page = "about";
		$title = "Om Dexiti";
		break;
	case 'register':
		$show_page = "register";
		$title = "Registrera dig";
		break;
	default:
		$show_page = "404";
		$title = "404";
		break;
}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href='assets/css/main.css' rel='stylesheet' type='text/css'>
		<title>Dexiti <?php echo $title; ?></title>
	</head>
	<body>
		<div class="warp">
			<div class="navbar">
				<ul>
					<li><a href="?page=start">Startsida</a></li>
					<li><a href="?page=register">Skapa ett konto</a></li>
					<li><a href="?page=about">Om Dexiti</a></li>
				</ul>
			</div>
			<div class="content">
				<?php include('assets/_paGes/'.$show_page.'.php'); ?>
			</div>
			<div class="clear"></div>
		</div>
	</body>
</html>