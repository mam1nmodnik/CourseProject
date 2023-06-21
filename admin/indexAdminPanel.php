<?php
    session_start();
    @include('../vendor/connect.php');
     if (!$_SESSION['admin_user']) {
     header('Location: signInAdmin.php');
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админка</title>
    <?php 
            include('allStyleAdminPanel.php');
        ?>
       
</head>
<body>
<?php 
            include('headerAdminPanel.php');
        ?>
<?php 
            include('navAdminPanel.php');
        ?>




    <script src="js/countUp.min.js"></script> <!-- Подключаем плагин countUp -->
    <script src="../js/main.js"></script> <!-- Подключаем основной javascript файл -->
    <script type="text/javascript" src="../js/adminJs.js"></script>
</body>
</body>
</html>