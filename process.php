<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];

		
		if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
			echo "All fields are required and must not be empty";
		}
		
		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "Email is not in a valid format";
		}
		
		elseif ($password != $confirm_password) {
			echo "Password and Confirm Password do not match";
		}
		else {
			echo "Registration successful!";
			
		}
	
	

	
	