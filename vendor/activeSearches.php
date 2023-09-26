<?php 
session_start();
@include('connect.php');
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}



// Выполняем запрос к базе данных
//$rows = mysqli_query($connect, "SELECT * FROM `newMailEntry`");

$sql = "SELECT * FROM `newMailEntry`";
$result = mysqli_query($connect, $sql);

// Формирование массива данных
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

// Закрытие соединения с базой данных
mysqli_close($connect);

// Возвращаем данные в формате JSON
echo json_encode($data);
?>
