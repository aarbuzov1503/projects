<?php
$to = filter_input(INPUT_POST, 'email',  FILTER_VALIDATE_EMAIL); // емайл получателя данных из формы 
$tema = "Форма обратной связи на PHP"; 
$message = "Ваша форма отправлена \r\n Ваше имя: " . filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS); 
$message .= "E-mail: " . $to . "\r\n"; 
$message .= "Сообщение: " . filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS); 
 
if (isset($to) && $to) mail($to, $tema, $message); 
else $message = 'error email';
mail('nugamanova03@bk.ru', $tema, $message); 
 
echo 'Данная форма была отправлена на адрес владельца сайта и на ваш почтовый ящик как подтверждение. Совет:Проверьте спам,могло туда уйти';
?>