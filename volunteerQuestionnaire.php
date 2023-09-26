<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анкета добровольца</title>
    
    <?php 
      include('allStyle.php');
    ?>
  
  <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
</head>
<body style="background-color: white;">
        <div class="centr_volunteer-Uniform">
            <div  class="background-color-missing"> 
                <div class="input-area">
                    <div>
                        <h2>Анкета добровольца</h2>
                    </div>
                    <div style="margin-bottom: 29px;">
                        <h4 class="label_h4">Заполните анкету и с вами свяжутся</h4>
                    </div>
                    <div>
                        <form id="volunteerUniform" name="volunteerUniform" enctype="multipart/form-data"> 
                            <div style="margin-bottom: 25px;" class="box div-relativ">
                            
                                <label for="name_user"><h4 class="label_h4">Имя</h4></label>
                                <input class="input-area_input input inputs" type="text" name="name_user" id="name_user">
                            </div>
                            <div style="margin-bottom: 25px;" class="box div-relativ">
                                <label for="familiya_user"><h4 class="label_h4">Фамилия</h4></label>
                                <input class="input-area_input input inputs" type="text" name="familiya_user" id="familiya_user">
                            </div>
                            <div style="margin-bottom: 25px;" class="box div-relativ"> 
                                <label for="otchestvo_user"><h4 class="label_h4">Отчество</h4></label>
                                <input  class="input-area_input input inputs" type="text" name="otchestvo_user" id="otchestvo_user">
                            </div>
                            <div style="margin-bottom: 25px;" class="box div-relativ"> 
                                <label for="age_user"><h4 class="label_h4">Возраст</h4></label>
                                <input  class="input-area_input input inputs" type="text" name="age_user" id="age_user">
                            </div>
                            <div class="box div-relativ" style="margin-bottom: 25px;">
                                <label  for="email_user"><h4 class="label_h4">Email добровольца</h4></label>
                                <input  class="input-area_input input inputs" type="text" name="email_user" id="email_user">
                            </div>
                            <div class="checkbox_label " >
                                <input class="input" type="checkbox" name="checkbox" id="newMailEntry-checkbox" onclick="additionPhoto()">
                                <label  for="checkbox">Прикрепите фото</label>
                            </div>
                            <div class="addition-Photo" id="fileDive">
                                <input type="file" name="photo_user" id="photo_user" class="inputs">
                            </div>
                            <div>
                                <button class="button_form" id="volunteerUniform-button"><h4>Отправить</h4></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript" src="js/js.js"></script>
<script src="js/countUp.min.js"></script> <!-- Подключаем плагин countUp -->
<script src="js/main.js"></script> <!-- Подключаем основной javascript файл -->
</body>
</html>