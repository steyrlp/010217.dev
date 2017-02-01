<?php

$login=$_POST['name'];
$pass=$_POST['pass'];

if($pass==='admin' || $login==='admin'){
    $message= 'Вы авторизованы';
}  else {
    $message= 'Неверный логин или пароль';
}
echo $message;
