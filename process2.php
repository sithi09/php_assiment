<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		// check if both fields are filled
		if (empty($email) || empty($password)) {
			echo "Email and Password are required";
		}