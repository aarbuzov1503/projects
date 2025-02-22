<?php
$result = false;
echo 'START<br>';
$result = mail('alexandr.arbuzov1503@mail.ru', 'My TEST', 'text message');
var_dump($result);
echo '<br>finish';
?>