<?php 
session_start();
@include('connect.php');
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}




$fio = $_POST['fio'] ?? '';
$age = $_POST['age'] ?? '';
$signs = $_POST['signs'] ?? '';
$fioApplicant = $_POST['fioApplicant'] ?? '';
$email = $_POST['email'] ?? '';


if ($_FILES['photo']['error'] == UPLOAD_ERR_OK) {

  $path = 'uploads/' . time() . $_FILES['photo']['name'];
  $tmp_name = $_FILES['photo']['tmp_name'];
  if(!move_uploaded_file($tmp_name, '../' . $path)){
    header('Location: newMailEntry.php');
    exit;
  }
   
    mysqli_query($connect, "INSERT INTO `newMailEntry`(`newMailEntry_id`, `age`, `sings`, `fioApplicant`, `email`, `fio`, `photo`) VALUES (NULL, '$age', '$signs', '$fioApplicant', '$email', '$fio', '$path')");
      
    if (!mysqli_query($connect, $query)) {
      die("Error: " . mysqli_error($connect));
    }
  
     
}else{

  mysqli_query($connect, "INSERT INTO `newMailEntry`(`newMailEntry_id`, `age`, `sings`, `fioApplicant`, `email`, `fio`, `photo`) VALUES (NULL, '$age', '$signs', '$fioApplicant', '$email', '$fio', NULL)");
  
  if (!mysqli_query($connect, $query)) {
    die("Error: " . mysqli_error($connect));
  }

}

mysqli_close($connect);


?>

<pre>
<?php 

print_r($fio . ' ' . $age . ' ' . $signs . ' ' . $fioApplicant . ' ' . $email . ' ' . $_FILES['photo']['tmp_name']);
?>
</pre>