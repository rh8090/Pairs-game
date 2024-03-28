<?php
	// I have to initialize the variables i am using in my code.
	$username = null;	 	
	$username_error = null;  
	$success = null;
	$loggedin = false;


	// First of all i have to check for the incoming post request.
	if(isset($_POST['username'])){
		// If there is a post request, i will store the username and password values to variables.
		$username = $_POST['username'];

		// Next i will check for empty values so i have some kind of error to display.
		if(empty(trim($username))){
			// If there is an empty value i display an error message.
			$username_error = "Username filed is empty";

		}if (preg_match("/([!\@\#\%\&\*\(\)\+\=\{\}\[\]\-\;\:\"\'\<\>\?\/\"]+)/", $username))
		{
			$username_error = "Username contains invalid symbols";
		}if($username_error === null) {
				setcookie('username',$username,time()+(60*60*24));
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['loggedin'] = true;
				header("location: index.php");
				$success = "Thank you for your registration";
			}
		}
	
