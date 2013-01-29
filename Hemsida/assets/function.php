<?php
function secure($unsafe) {
	$safe = mysql_real_escape_string($unsafe);
	return $safe;
}

function login() {
	if($_SESSION['user'] AND $_SESSION['id']) {
		return true;
	} else {
		return false;
	}
}
?>