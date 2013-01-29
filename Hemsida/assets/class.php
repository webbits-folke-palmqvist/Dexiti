<?php
class Error {
	function show() {
		if(@$_SESSION['error']){
			echo @$_SESSION['error'];
			unset($_SESSION['error']);
		}
	}

	function set($error) {
		$_SESSION['error'] = $error;
	}
}

class Success {
	function show() {
		if(@$_SESSION['success']){
			echo @$_SESSION['success'];
			unset($_SESSION['success']);
		}
	}

	function set($success) {
		$_SESSION['success'] = $success;
	}
}

class User {
	function id($username) {
		$username = secure($username);
		if(empty($username)){
			$id = $_SESSION['id'];
			return $id;
		} else {
			$result = mysql_query("SELECT id FROM users WHERE username = '$username' LIMIT 1");

			$row = mysql_fetch_row($result);

			return $row[0];
		}
	}

	function username($id) {
		$id = secure($id);
		if(empty($id)){
			$username = $_SESSION['username'];
			return $username;
		} else {
			$result = mysql_query("SELECT username FROM users WHERE id = '$id' LIMIT 1");

			$row = mysql_fetch_row($result);

			return $row[0];
		}
	}

	function rank($id) {
		$id = secure($id);
		if(empty($id)){
			$username = $_SESSION['username'];
			return $username;
		} else {
			$result = mysql_query("SELECT username FROM users WHERE id = '$id' LIMIT 1");

			$row = mysql_fetch_row($result);

			return $row[0];
		}
	}
}

$Error = new Error;
$Success = new Success;
$User = new User;
?>