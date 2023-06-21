<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php 
      include('allStyle.php');
   ?>
  
  <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
    <title>Главная</title>
</head>
<body>
    
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>

   <?php 
      include('nav.php');
   ?>

   

    

<!-- СТАТИСТИКА -->
    <div class="conteiner-index" >
        
            <div class="main-container-statistic">
                <h2 class="_anim-items _anim-no-hide">Статистика<br> пропавших людей в разных странах</h2>
                <h3 class="_anim-items _anim-no-hide">По статистике больше всего людей пропадает или теряется в<br> странах США, Россия и Великобритания.</h3>
            </div>

            <div class="main-container-statistic-two">
                    
                <img src="img/Block (1).svg" alt="">
                              
                <div class="container-city-flex">
                    <div class="container-city">
                        <div class="city-statistic-flex">
                        <h3>США</h3>
                        <h3 class="numbers__item" id="num1" data-num="424066"  data-suffix=" тыс.">0</h3>
                        </div>
                        <div class="statistic-line"></div>
                    </div>
                    <div class="container-city">
                        <div class="city-statistic-flex">
                        <h3>Россия</h3>
                        <h3 class="numbers__item" id="num2" data-num="180562"  data-suffix=" тыс.">0</h3>
                        </div>
                        <div class="statistic-line2"></div>
                    </div>
                    <div class="container-city">
                        <div class="city-statistic-flex">
                        <h3>Великобритания</h3>
                        <h3 class="numbers__item" id="num3" data-num="112897"  data-suffix=" тыс.">0</h3>
                        </div>
                        <div class="statistic-line3"></div>
                    </div>
                    <div class="container-city">
                        <div class="city-statistic-flex">
                        <h3>Индия</h3>
                        <h3 class="numbers__item"id="num4" data-num="111569"  data-suffix=" тыс.">0</h3>
                        </div>
                        <div class="statistic-line4"></div>
                    </div>
                    <div class="container-city">
                        <div class="city-statistic-flex">
                        <h3>Бразилия</h3>
                        <h3 class="numbers__item" id="num5" data-num="41572"  data-suffix=" тыс.">0</h3>
                        </div>
                        <div class="statistic-line5"></div>
                    </div>
                    <div class="container-city">
                        <div class="city-statistic-flex">
                        <h3>Южная Корея</h3>
                        <h3 class="numbers__item" id="num6" data-num="21980"  data-suffix=" тыс.">0</h3>
                        </div>
                        <div class="statistic-line6"></div>
                    </div>
                    <div class="container-city">
                        <div class="city-statistic-flex">
                        <h3>Испания</h3>
                        <h3 class="numbers__item" id="num7" data-num="20120"  data-suffix=" тыс.">0</h3>
                        </div>
                        <div class="statistic-line7"></div>
                    </div>
                    <div class="container-city">
                        <div class="city-statistic-flex">
                        <h3>Австралия</h3>
                        <h3 class="numbers__item" id="num8" data-num="18420"  data-suffix=" тыс.">0</h3>
                        </div>
                        <div class="statistic-line8"></div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    <div  class="conteiner-index volunteers" id="volunteers">
        <div class="main-container-statistic">
            <h2 class="_anim-items _anim-no-hide">Что нужно сделать, чтобы стать добровольцем и помочь в поисках?</h2></div>
        <div style="margin-top: 68px;">
            <div class="list-of-requirements-flex">
                <div class="list-of-requirements _anim-items _anim-no-hide" id="list-of-requirements-1">
                    <p class="list-of-requirements-number" >1.</p>
                    <p class="requirements"><span class="bg-requirements">Заполнить анкету</span></p>
                </div>
                <div class="list-of-requirements _anim-items _anim-no-hide" id="list-of-requirements-3"> 
                    <p class="list-of-requirements-number" >3.</p>
                    <p class="requirements"><span class="bg-requirements">Назначить встречу</span> поиска вместе с <br>отрядом добровольцев</p>
                </div>
            </div>

            <div class="line-vector">
                <div class="vector658 _anim-items _anim-no-hide" id="vector658">
                    <img src="img/Vector 658.png" alt="">
                </div>
                <div class="vector659 _anim-items _anim-no-hide"  id="vector659">
                    <img src="img/Vector 659.png" alt="">
                </div>
                <div class="vector660 _anim-items _anim-no-hide"  id="vector660">
                    <img src="img/Vector 660.png" alt="">
                </div>
            </div>

            <div class="list-of-requirements-flex-1">
                <div class="list-of-requirements _anim-items _anim-no-hide" id="list-of-requirements-2">
                    <p class="list-of-requirements-number">2.</p>
                    <p class="requirements"><span class="bg-requirements">Дождаться звонка</span>  от<br> главного по поискам</p>
                </div>
                
                <div class="list-of-requirements _anim-items _anim-no-hide" id="list-of-requirements-4">
                    <p class="list-of-requirements-number" >4.</p>
                    <p class="requirements"><span class="bg-requirements">Прийти на встречу</span> и<br> <span class="bg-requirements">получить снаряжение</span></p>
                </div>
            </div>
            <div class="line-vector">
                <div class="vector661 _anim-items _anim-no-hide"  id="vector661">
                    <img src="img/Vector 661.png" alt="">
                </div>
                
            </div>
            <div class="list-of-requirements-flex-2">
                <div class="list-of-requirements _anim-items _anim-no-hide" id="list-of-requirements-5">
                    <p class="list-of-requirements-number" >5.</p>
                    <p class="requirements"><span class="bg-requirements">Пойти на поиски</span> пропавшего вместе с отрядом</p>
                </div>
            </div>
            <div class="container-volunteer-form _anim-items _anim-no-hide">
            <a href="volunteerQuestionnaire.php"><button>Стать добровольцем</button></a>
            </div>
        </div>    
    </div>
    <div style="margin-bottom: 143px;">
        <div class="main-container-statistic">
            <h2 class="_anim-items _anim-no-hide">Активные поиски</h2>
            <h3 class="_anim-items _anim-no-hide">Это люди,  которых мы ищем прямо сейчас. И нам нужна ваша<br> помощь, чтобы как можно скорее найти каждого из них.</h3>
        </div>
       
        <div class="ticker" style="top: 30px;">
            <div class="ticker__wrapper">
                <div class="ticker__item"> 
                    <div class="photo-of-the-missing"> 
                        <div>
                            <img src="img/Rectangle 12.png" alt="">
                        </div>
                        <div> 
                            <p><span class="color-requirements">Область/край:</span> Алтайский</p>
                            <p><span class="color-requirements">Возраст:</span> 23 года</p>
                        </div>
                    </div>
                </div>
                <div class="ticker__item"> 
                    <div class="photo-of-the-missing"> 
                        <div>
                            <img src="img/Rectangle 12.png" alt="">
                        </div>
                        <div> 
                            <p><span class="color-requirements">Область/край:</span> Алтайский</p>
                            <p><span class="color-requirements">Возраст:</span> 23 года</p>
                        </div>
                    </div>
                </div>
                <div class="ticker__item"> 
                    <div class="photo-of-the-missing"> 
                        <div>
                            <img src="img/Rectangle 12.png" alt="">
                        </div>
                        <div> 
                            <p><span class="color-requirements">Область/край:</span> Алтайский</p>
                            <p><span class="color-requirements">Возраст:</span> 23 года</p>
                        </div>
                    </div>
                </div>
                <div class="ticker__item"> 
                    <div class="photo-of-the-missing"> 
                        <div>
                            <img src="img/Rectangle 12.png" alt="">
                        </div>
                        <div> 
                            <p><span class="color-requirements">Область/край:</span> Алтайский</p>
                            <p><span class="color-requirements">Возраст:</span> 23 года</p>
                        </div>
                    </div>
                </div>
                <div class="ticker__item"> 
                    <div class="photo-of-the-missing"> 
                        <div>
                            <img src="img/Rectangle 12.png" alt="">
                        </div>
                        <div> 
                            <p><span class="color-requirements">Область/край:</span> Алтайский</p>
                            <p><span class="color-requirements">Возраст:</span> 23 года</p>
                        </div>
                    </div>
                </div>
                <div class="ticker__item"> 
                    <div class="photo-of-the-missing"> 
                        <div>
                            <img src="img/Rectangle 12.png" alt="">
                        </div>
                        <div> 
                            <p><span class="color-requirements">Область/край:</span> Алтайский</p>
                            <p><span class="color-requirements">Возраст:</span> 23 года</p>
                        </div>
                    </div>
                </div>
                <div class="ticker__item"> 
                    <div class="photo-of-the-missing"> 
                        <div>
                            <img src="img/Rectangle 12.png" alt="">
                        </div>
                        <div> 
                            <p><span class="color-requirements">Область/край:</span> Алтайский</p>
                            <p><span class="color-requirements">Возраст:</span> 23 года</p>
                        </div>
                    </div>
                </div>
                <div class="ticker__item"> 
                    <div class="photo-of-the-missing"> 
                        <div>
                            <img src="img/Rectangle 12.png" alt="">
                        </div>
                        <div> 
                            <p><span class="color-requirements">Область/край:</span> Алтайский</p>
                            <p><span class="color-requirements">Возраст:</span> 23 года</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>    
    <div class="conteiner-index" id="input-area">
       
            <div class="main-container-statistic">
                <h2 class="_anim-items _anim-no-hide">Заявить о пропаже</h2>
            </div>
        <div  class="background-color-missing">   
           
                <div>
                    <img src="img/лес.png" alt="">
                </div>
                <div class="input-area">
                    <div>
                        <h2>Анкета заявления о пропавшем человеке</h2>
                    </div>
                    <div style="margin-bottom: 29px;">
                        <h4 class="label_h4">Заполните анкету и с вами свяжутся</h4>
                    </div>
                    <div>
                        <form id="newMailEntry" name="newMailEntry" enctype="multipart/form-data"> 
                            <div style="margin-bottom: 25px;" class="box div-relativ">
                                <label for=""><h4 class="label_h4">ФИО пропавшего</h4></label>
                                <input class="input-area_input input inputs" type="text" name="fio" id="fio">
                            </div>
                            <div style="margin-bottom: 25px;" class="box div-relativ">
                                <label for=""><h4 class="label_h4">Возсраст пропавшего</h4></label>
                                <input class="input-area_input input inputs" type="text" name="age" id="age">
                            </div>
                            <div style="margin-bottom: 25px;" class="box">
                                <label for=""><h4 class="label_h4">Опишите приметы пропавшего</h4></label>
                                <textarea class="input-area_input input inputs " style="max-height: 120px; min-height: 44px;" type="text" name="signs" id="signs"> </textarea>   
                            </div>
                            <div style="margin-bottom: 25px;" class="box div-relativ"> 
                                <label for=""><h4 class="label_h4">ФИО заявителя</h4></label>
                                <input  class="input-area_input input inputs" type="text" name="fioApplicant" id="fioApplicant">
                            </div>
                            <div class="box div-relativ" style="margin-bottom: 25px;">
                                <label  for=""><h4 class="label_h4">Email заявителя</h4></label>
                                <input  class="input-area_input input inputs" type="text" name="email" id="email">
                            </div>
                            <div class="checkbox_label " >
                                <input class="input" type="checkbox" name="" id="newMailEntry-checkbox" onclick="additionPhoto()">
                                <label  for="checkbox" >Прикрепить фото пропавшего человека</label>
                            </div>
                            <div class="addition-Photo" id="fileDive">
                                <input type="file" name="photo" id="photo" class="inputs">
                            </div>
                            <div>
                                <button class="button_form" id="newMailEntry-button"><h4>Отправить</h4></button>
                            </div>
                        </form>
                    </div>
                </div>
            
        </div>
    </div>
    
    <?php 
      include('footer.php');
    ?>
    
    
   
    
<script type="text/javascript" src="js/js.js"></script>
<script src="js/countUp.min.js"></script> <!-- Подключаем плагин countUp -->
<script src="js/main.js"></script> <!-- Подключаем основной javascript файл -->

</body>
</html>