


<nav class="sidebar">

    <div class="admin_logo_container">
        <div class="admin_logo">
            <img src="img/UserCircle.svg" alt="">
            <h2><?= $_SESSION['admin_user']['name_admin']?></h2>
        </div>
        <img src="img/Vector 1 (Stroke).svg" alt="">
    </div>
    <ul class="nav-links">
      <li><a href="#">Обзор</a></li>
      <li><a href="#">Поиски</a></li>
    </ul>
    <div class="menu">
        <h2>Страницы</h2>
      <ul>
        <li><img src="img/ArrowLineRight2.svg" alt=""><a href="">Добровольцы</a></li>
        <li><img src="img/ArrowLineRight2.svg" alt=""><a href="">Отряды</a></li>
        <li><img src="img/ArrowLineRight2.svg" alt=""><a href="">Посылки</a></li>
        <li><img src="img/ArrowLineRight2.svg" alt=""><a href="">Пожертвования</a></li>
        <li><img src="img/ArrowLineRight2.svg" alt=""><a href="">Обновления</a></li>
        <li><img src="img/ArrowLineRight2.svg" alt=""><a href="">Настройки</a></li>
        <li><img src="img/ArrowLineRight2.svg" alt=""><a href="">Почта</a></li>
      </ul>
    </div>
        <a href="../vendor/logout.php?id=<?= $_SESSION['admin_user']['id']?>" class="exit">Выйти</a>
  </nav>
