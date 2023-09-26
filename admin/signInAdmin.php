
<?php
  session_start();
   if ($_SESSION['admin_user']) {
     header('Location: indexAdminPanel.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>рг админ</title>
    <?php 
            include('allStyleAdminPanel.php');
        ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
</head>
<body>
        <?php 
            include('headerAdminPanel.php');
        ?>

  <div class="alight_center">
      <form>
        <h2>Авторизация</h2>
        <div class="box div-relativ">
          <label for="login-username">E-mail:</label>
          <input type="text" id="email" name="email" placeholder="Введите E-mail" required class="input inputs">
        </div>
        <div class="box div-relativ">
          <label for="login-password">Пароль:</label>
          <input type="password" id="password" name="password" placeholder="*********" required class="input inputs">
        </div>
        <div class="checkbox_flex">
          <input type="checkbox" name="" id="checkbox" class="checkbox">
          <label for="checkbox">Запомнить меня</label>
        </div>
        <!-- <div class="password-toggle">
          <input type="password" id="password">
          <label for="password" onclick="togglePasswordVisibility()">
            <i class="fa fa-eye"></i>
          </label>
        </div> -->
        <button id="adminPanel-button">Войти</button>
            <div class="div-response">
              <div class="box-response">        
                
              </div>
            </div>
      </form>
  
  </div>
<script type="text/javascript" src="js/adminJs.js"></script>
</body>
</html>