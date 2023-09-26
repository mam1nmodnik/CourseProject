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

<div class="conteiner-index" >
        
        
<div class=e698_7211>
  <div class=e698_7175><span  class="ei698_7175_746_925">Сегодня</span>
    <div class=ei698_7175_746_926>
        <img src="../img/Vector 1 (Stroke).svg" alt="">
    </div>
  </div>
  <div class=e698_7399>
    <div class=e698_7176><span  class="ei698_7176_1445_7919">Просмотры</span><span  class="ei698_7176_1445_7920">721K</span>
      <div class=ei698_7176_1445_7922><span  class="ei698_7176_1445_7922_619_105 numbers__item" id="num9" data-num="11.1"  data-suffix="%" >+%</span>
        <div class=ei698_7176_1445_7922_619_106>
          <img src="../img/Dot2.svg" alt="">
        </div>
      </div>
    </div>
    <div class=e698_7177><span  class="ei698_7177_1445_7919">Посещения</span><span  class="ei698_7177_1445_7920">367K</span>
      <div class=ei698_7177_1445_7922><span  class="ei698_7177_1445_7922_619_105">+9.15%</span>
        <div class=ei698_7177_1445_7922_619_106>
        <img src="../img/Dot2.svg" alt="">
        </div>
      </div>
    </div>
    <div class=e698_7420><span  class="e698_7421">Пожертвования</span><span  class="e698_7422">1,156К</span>
      <div class=e698_7429><span  class="e698_7430">+0.56%</span>
        <div class=ei698_7177_1445_7922_619_106>
            <img src="../img/ArrowFall.svg" alt="">
        </div>
      </div>
    </div>
    <div class=e698_7404><span  class="e698_7405">Добровольцы</span><span  class="e698_7406">239K</span>
      <div class=e698_7413><span  class="e698_7414">+1.48%</span>
        <div class=ei698_7177_1445_7922_619_106>
        <img src="../img/ArrowFall.svg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
        
        <div class="main-container-statistic-two">
                
            <img src="../img/Block (1).svg" alt="">
                          
            <div class="container-city-flex">
                <div class="container-city">
                    <div class="city-statistic-flex">
                    <h3>США</h3>
                    <h3 class="numbers__item" id="num1" data-num="0"  data-suffix=" тыс.">0</h3>
                    </div>
                    <div class="statistic-line"></div>
                </div>
                <div class="container-city">
                    <div class="city-statistic-flex">
                    <h3>Россия</h3>
                    <h3 class="numbers__item" id="num2" data-num="0"  data-suffix=" тыс.">0</h3>
                    </div>
                    <div class="statistic-line2"></div>
                </div>
                <div class="container-city">
                    <div class="city-statistic-flex">
                    <h3>Великобритания</h3>
                    <h3 class="numbers__item" id="num3" data-num="0"  data-suffix=" тыс.">0</h3>
                    </div>
                    <div class="statistic-line3"></div>
                </div>
                <div class="container-city">
                    <div class="city-statistic-flex">
                    <h3>Индия</h3>
                    <h3 class="numbers__item"id="num4" data-num="0"  data-suffix=" тыс.">0</h3>
                    </div>
                    <div class="statistic-line4"></div>
                </div>
                <div class="container-city">
                    <div class="city-statistic-flex">
                    <h3>Бразилия</h3>
                    <h3 class="numbers__item" id="num5" data-num="0"  data-suffix=" тыс.">0</h3>
                    </div>
                    <div class="statistic-line5"></div>
                </div>
                <div class="container-city">
                    <div class="city-statistic-flex">
                    <h3>Южная Корея</h3>
                    <h3 class="numbers__item" id="num6" data-num="0"  data-suffix=" тыс.">0</h3>
                    </div>
                    <div class="statistic-line6"></div>
                </div>
                <div class="container-city">
                    <div class="city-statistic-flex">
                    <h3>Испания</h3>
                    <h3 class="numbers__item" id="num7" data-num="0"  data-suffix=" тыс.">0</h3>
                    </div>
                    <div class="statistic-line7"></div>
                </div>
                <div class="container-city">
                    <div class="city-statistic-flex">
                    <h3>Австралия</h3>
                    <h3 class="numbers__item" id="num8" data-num="0"  data-suffix=" тыс.">0</h3>
                    </div>
                    <div class="statistic-line8"></div>
                </div>
            </div>
        </div>
    
    </div>
</div> 
<?php 
            include('notificationsAdminPanel.php');
        ?>


 <!-- <script src="../js/js.js"></script> -->
  <script src="js/adminJs.js"></script>
    <script src="../js/countUp.min.js"></script> <!-- Подключаем плагин countUp -->
    <script src="../js/main.js"></script> <!-- Подключаем основной javascript файл -->
    <!-- <script type="text/javascript" src="js/adminJs.js"></script> -->
</body>
</body>
</html>