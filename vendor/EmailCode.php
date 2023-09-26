<?php 
session_start();
@include('phpmailer/PHPMailerAutoload.php');
@include('connect.php');
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}


    $email = $_POST['email'] ?? '';

                $comb = '1234567890';
                $emailCode = array(); 
                $combLen = strlen($comb) - 1; 
                for ($i = 0; $i < 4; $i++) {
                    $n = rand(0, $combLen);
                    $emailCode[] = $comb[$n];
                }
                $emailCode = implode($emailCode);
                //echo $emailCode;
                mysqli_query($connect, "INSERT INTO `newMailEntry`(`newMailEntry_id`, `age`, `sings`, `fioApplicant`, `email`, `fio`, `photo`, `emailCode`) VALUES (NULL, NULL, NULL, NULL, '$email', NULL, NULL, '$emailCode')");    
                // if (!mysqli_query($connect, $query)) {
                //     die("Error: " . mysqli_error($connect));
                // }

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'danil_serebro2004@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '3T2pz0gNQtsD90p8aw2v'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('danil_serebro2004@mail.ru'); // от кого будет уходить письмо
$mail->addAddress($email);     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Спасатели ТСПК';
$mail->Body    = 'Ваш проверочный код: ' . $emailCode;
$mail->AltBody = '';

if(!$mail->send()) {

}

$result = mysqli_query($connect, "SELECT * FROM `newMailEntry`");
$row = mysqli_fetch_assoc($result);
//echo json_encode($emailCode);
  if($email == $row[$email] && $emailCode  == $row[$emailCode]){
    echo json_encode($row);
  } 
mysqli_close($connect);