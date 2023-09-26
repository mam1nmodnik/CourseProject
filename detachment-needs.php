<!DOCTYPE html>
<html lang="en">
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
    <title>Отрядные нужды</title>
	    
</head>
<body>

	<div class="preloader">
        <div class="preloader__image"></div>
    </div>

    <?php
      include('nav.php');
   	?>

   <div class="conteiner-index">
   		<div class="main-container-statistic">
            <h2 class="_anim-items _anim-no-hide">Отрядные нужды</h2>
            <h3 class="_anim-items _anim-no-hide">Здесь перечислены категории вещей, в которых мы нуждаемся.</h3>
        </div>
		<div class="need-group">
			<div>
				<a href="tents.php">
					<div class="need">
						<img src="img/Group.svg" alt="">
					</div>
				</a>
				<h2 class="_anim-items _anim-no-hide">Палатки</h2>
			</div>
			<div>
				<a href="backpacks.php">
					<div class="need">
						<img src="img/Group (1).svg" alt="">
					</div>
				</a>
				<h2 class="_anim-items _anim-no-hide">Рюкзаки</h2>	
			</div>
			<div>
				<a href="cloth.php">
					<div class="need">
						<img src="img/Frame 64.svg" alt="">
					</div>
				</a>
				<h2 class="_anim-items _anim-no-hide">Одежда</h2>
			</div>
			<div>
				<a href="tools.php">
					<div class="need">
						<img src="img/Group (2).svg" alt="">
					</div>
				</a>
				<h2 class="_anim-items _anim-no-hide">Инструменты</h2>
			</div>
			<div>
				<div class="need">
					<img src="img/Group 427318869.svg" alt="">
				</div>
				<h2 class="_anim-items _anim-no-hide">Другое</h2>
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