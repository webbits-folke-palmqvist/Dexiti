<?php
$action = secure($_GET['action']);

if($action == "register") {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$email = $_POST['email'];

	if(empty($username) OR empty($password) OR empty($password2) OR empty($email)) {
		$Error->set("*Fyll i alla fält");
		header('location: ?page=register');
	} else {
		if(strlen($username) > 4) {
			if(strlen($password) > 4) {
				$result = mysql_query("SELECT id FROM users WHERE username = '$username'");

				$num_rows = @mysql_num_rows($result);

				if($num_rows != 1){
					if($password == $password2){
						$password = md5($password);
						$sql = "INSERT INTO users(username, password, rank)VALUES('$username', '$password', '1')";
						$add = mysql_query($sql);

						if($add){
							$Success->set("Grattis, du är nu registrerad!");
							header('location: ?page=register');
						}
					} else {
						$Error->set("*Lösenorden matchade inte varandra.");
						header('location: ?page=register');
					}
				} else {
					$Error->set("*Användarnamnet är upptaget");
					header('location: ?page=register');
				}
			} else {
				$Error->set("*Lösenordet är för kort.");
				header('location: ?page=register');
			}
		} else {
			$Error->set("*Användarnamnet är för kort.");
			header('location: ?page=register');
		}
	}
} elseif($action == "login"){
	$user = secure($_POST['username']);
	$pass = md5(secure($_POST['password']));

	$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass' AND rank != 0";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);

	if($count == 1){

		$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass' AND rank != 0";
		$result = mysql_query($sql);
		$count = mysql_num_rows($result);
		
		if($count == 1){
			$_SESSION['user'] = strtolower($user);
			$_SESSION['id'] = $User->id($user);
			header('location: ?page=start');
		} else {
			$Error->set("* Denna användare är bannad eller raderad.");
			header('location: ?page=start');
		}
	} else {
		$Error->set("* Fel användarnamn eller lösenord.");
		header('location: ?page=start');
	}
} elseif($action == "logout") {
	session_destroy();
	header('location: ?page=start');
} else {
	header('location: ?page=start');
}
?>