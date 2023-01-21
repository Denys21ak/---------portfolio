<?php 
if (!empty($_POST['name']) AND !empty($_POST['phone']) ){
  
  $headers = 'From: Шевченко Денис\r\n'.
             'Reply-To: sevcenkodenis21gmail.com\r\n'.
              'X-Mailer: PHP/'. phpversion();
             
  $theme = 'Новое сообщение';

  $letter = 'Данные сообщения:\r\n';
  $letter .='Имя: '.$_POST['name'].'\r\n';
  $letter .='Телефон: '.$_POST['phone'].'\r\n';
  
  if (mail('sevcenkodenis21gmail.com', $theme, $letter, $headers)){
    echo "Сообщение отправлено!";
  } else {
    echo "Ошибка при отправке!";
  }
} else {
  echo "Ошибка: Заполните все поля!";
}