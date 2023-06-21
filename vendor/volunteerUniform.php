<?php 
session_start();
@include('connect.php');
require_once 'connect.php';
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}



$name_user = $_POST['name_user'] ?? '';
$age_user = $_POST['age_user'] ?? '';
$familiya_user = $_POST['familiya_user'] ?? '';
$otchestvo_user = $_POST['otchestvo_user'] ?? '';
$email_user = $_POST['email_user'] ?? '';


if ($_FILES['photo_user']['error'] == UPLOAD_ERR_OK) {

  $path = 'uploads/' . time() . $_FILES['photo_user']['name'];
  $tmp_name = $_FILES['photo_user']['tmp_name'];
  if(!move_uploaded_file($tmp_name, '../' . $path)){
    header('Location: volunteerUniform.php');
  }

  mysqli_query($connect, "INSERT INTO `volunteerUniform` (`volunteerUniform_id`, `name_user`, `familiya_user`, `otchestvo_user`, `age_user`, `email_user`, `photo_user`) VALUES (NULL, '$name_user', '$familiya_user', '$otchestvo_user', '$age_user', '$email_user', '$path')");

 if (!mysqli_query($connect, $query)) {
      die("Error: " . mysqli_error($connect));
    }
  
}else{

  mysqli_query($connect, "INSERT INTO `volunteerUniform` (`volunteerUniform_id`, `name_user`, `familiya_user`, `otchestvo_user`, `age_user`, `email_user`, `photo_user`) VALUES (NULL, '$name_user', '$familiya_user', '$otchestvo_user', '$age_user', '$email_user', NULL)");
  if (!mysqli_query($connect, $query)) {
    die("Error: " . mysqli_error($connect));
  }

}

mysqli_close($connect);







?>

<pre>
<?php 

print_r($name_user . ' ' . $familiya_user . ' ' . $otchestvo_user . ' ' . $age_user . ' ' . $email_user . ' ' . $_FILES['photo_user']['tmp_name']);
?>
</pre>