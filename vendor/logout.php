<?php
	session_start();
	unset($_SESSION['admin_user']);
	header('Location: ../admin/signInAdmin.php');
