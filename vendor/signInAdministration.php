<?php
	session_start();

	require_once 'connect.php';

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }   

	$email = $_POST['email'];
	$password = $_POST['password'];

	$check_admin = mysqli_query($connect, "SELECT * FROM `admin` WHERE  `email` = '$email' AND `password` = '$password'");


	if (mysqli_num_rows($check_admin) > 0 ) {  

		$admin_user = mysqli_fetch_array($check_admin); 

		$_SESSION['admin_user'] = [
			"id" => $admin_user['id'],
            "name_admin" => $admin_user['name_admin']
		];
		
		$response = [
			"status" => true,
			
		];
		
        echo json_encode($response);     
		
	} else{
			
		$response = [
			"status" => false, 
			"message" => 'Попробуйте авторизироваться еще раз)',
			
		];

		echo json_encode($response);

	}
?>




