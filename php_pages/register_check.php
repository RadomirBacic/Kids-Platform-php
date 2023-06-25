<?php

	include 'configConn.php';


	if (isset($_GET['register'])) {
		
		$username = $_GET['username'];
		$password = $_GET['password'];
		$email = $_GET['email'];
		$age = $_GET['age'];
		
		
		$userType = "user";

		//check username exist
		$existUsernameQuery = "SELECT * FROM users WHERE username = '$username'";
    	$existUsernameResult = mysqli_query($conn, $existUsernameQuery);

    if (mysqli_num_rows($existUsernameResult) > 0) {
        echo "<script type='text/javascript'>
                alert('Username already exists');
            </script>";
           
        return;
    }

		$sql = "INSERT INTO users(username,password,email,age,device,UserType) VALUES('$username','$password','$email','$age','$device','$userType')";


		$result = mysqli_query($conn,$sql);

		if ($result) {
			echo "You have registered successfully";
		}else{
			echo "Registration failed";
		}

	}





?>