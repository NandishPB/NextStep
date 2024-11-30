<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if ($_POST['login'] == 1 && $_POST['uname'] != null && $_POST['passwd'] != null)
			echo "<h1> Login Page </h1>";
		if ($_POST['signup'] == 1 && $_POST['fname'] != null && $_POST['uname'] != null &&
					$_POST['mail'] != null && $_POST['passwd'] != null)
			echo "<h1> Sign Up Page </h1>";
	}
?>
