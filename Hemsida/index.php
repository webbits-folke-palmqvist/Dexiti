<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;

session_start();
include('assets/database.php');
include('assets/class.php');
include('assets/function.php');

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
	case 'user':
		$show_page = "user";
		$title = "Användare";
		break;
	case 'company':
		$show_page = "company";
		$title = "Företag";
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
		<title>Dexiti › <?php echo $title; ?></title>
	</head>
	<body>
		<div class="warp">
			<div class="navbar">
				<?php
				if(login() == true) {
					?>
					<ul>
						<li><strong>Huvudmeny</strong></li>
						<li><a href="?page=start">Startsida</a></li>
						<li><a href="#">Kontakt</a></li>
						<li><a href="?page=about">Om Dexiti</a></li>
					</ul>
					<hr>
					<ul>
						<li><strong>Företag</strong></li>
						<li><a href="?page=company&id=1">Webbits</a> (VD)</li>
						<li><a href="#">Inställningar</a></li>
						<li><a href="?page=company">Alla företag</a></li>
					</ul>
					<hr>
					<ul>
						<li><strong>Konto</strong></li>
						<li><a href="#">Folke</a></li>
						<li><a href="#">Meddelande</a> (0)</li>
						<li><a href="#">Inställningar</a></li>
						<li><a href="?page=process&action=logout">Logga ut</a></li>
					</ul>
					<?php
				} else {
					?>
					<ul>
						<li><strong>Huvudmeny</strong></li>
						<li><a href="?page=start">Startsida</a></li>
						<li><a href="?page=register">Skapa ett konto</a></li>
						<li><a href="#">Kontakt</a></li>
						<li><a href="?page=about">Om Dexiti</a></li>
					</ul>
					<?php
				}
				?>
			</div>
			<div class="content">
				<?php include('assets/_paGes/'.$show_page.'.php'); ?>
			</div>
			<div class="clear"></div>
			<?php
			$time = microtime();
			$time = explode(' ', $time);
			$time = $time[1] + $time[0];
			$finish = $time;
			$total_time = round(($finish - $start), 8);
			?>
			<hr>
			<center><i><?php echo "Sidan laddade på ".$total_time." sekunder"; ?></i></center>
			<br>
		</div>
	</body>
</html>