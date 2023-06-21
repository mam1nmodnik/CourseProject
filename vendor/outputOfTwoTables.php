<?php
session_start();
@include('connect.php');
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}




$page = $_GET['page'];
$limit = $_GET['limit'];

// Вычисляем индекс первой записи и количество записей для выборки
$start_index = ($page - 1) * $limit;
$num_records = $limit;

// Выполняем SQL-запрос
$sql = "SELECT ne.`newMailEntry_id`, ne.`age`, ne.`sings`, ne.`fioApplicant`, ne.`email`, v.`name_user`, v.`familiya_user`, v.`otchestvo_user`, v.`age_user`, v.`photo_user`
        FROM `newMailEntry` ne
        LEFT JOIN `volunteerUniform` v ON ne.`email` = v.`email_user`
        LIMIT $start_index, $num_records";

$result = $connect->query($sql);

// Формируем массив результатов
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Отправляем результаты в формате JSON на клиентскую сторону
header('Content-Type: application/json');
echo json_encode($data);

$connect->close();

?>