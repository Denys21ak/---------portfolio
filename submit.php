<?php 
// if (!empty($_POST['name']) AND !empty($_POST['phone']) ){
  
//   $headers = 'From: Шевченко Денис\r\n'.
//              'Reply-To: sevcenkodenis21gmail.com\r\n'.
//               'X-Mailer: PHP/'. phpversion();
             
//   $theme = 'Новое сообщение';

//   $letter = 'Данные сообщения:\r\n';
//   $letter .='Имя: '.$_POST['name'].'\r\n';
//   $letter .='Телефон: '.$_POST['phone'].'\r\n';
  
//   if (mail('sevcenkodenis21gmail.com', $theme, $letter, $headers)){
//     echo "Сообщение отправлено!";
//   } else {
//     echo "Ошибка при отправке!";
//   }
// } else {
//   echo "Ошибка: Заполните все поля!";
// }

$to = 'sevcenkodenis21gmail.com';
$name = clear_data($_POST['name']);
$email = clear_data($_POST['email']);
$text = clear_data($_POST['text']);
$subject = 'Заявка з сайта';
$message = 'Повідомлення';
mail($to, $subject, $message, $headers);
$headers = "From: sevcenkodenis21gmail.com\r\n".
             "Reply-To: sevcenkodenis21gmail.com\r\n".
              "X-Mailer: PHP/". phpversion();

$message = 'Имя ' . $name. "\n" . 'Email ' . $email. "\n" . 'Massage ' . $text. "\n";
function clear_data($val){
  $val = trim($val);
  $val = stripcslashes($val);
  $val = htmlspecialchars($val);
  return $vel;
}

if (isset($_POST['submit'])){
  mail($to, $subject, $message, $headers);
}
?>