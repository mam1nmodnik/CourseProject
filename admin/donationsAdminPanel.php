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
    <title>Document</title>

    <?php 
            include('allStyleAdminPanel.php');
        ?>
        <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>

</head>
<body>
<?php 
            include('headerAdminPanel.php');
        ?>
<?php 
            include('navAdminPanel.php');
        ?>






<?php 
            include('notificationsAdminPanel.php');
?>


<script src="js/adminJs.js"></script>
</body>
</html>