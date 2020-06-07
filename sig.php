<?php
$fio = filter_var(trim($_POST['fio']),
FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);
$pass2 = filter_var(trim($_POST['pass2']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$phone = filter_var(trim($_POST['phone']),
FILTER_SANITIZE_STRING);


$mysql = new mysqli('localhost','admin','123583','kz');
$result = $mysql->query("SELECT*FROM `users` WHERE `login` = '$login'");
            $user = $result->fetch_assoc();
$mysql = new mysqli('localhost','admin','123583','kz');
$resuld = $mysql->query("SELECT*FROM `users` WHERE `pass` = '$pass'");
            $users = $resuld->fetch_assoc();

if(mb_strlen($login) < 4 || mb_strlen($login) > 20)
{
echo "Недопустимая длина логина ( от 4 до 20 символов)";
exit();
} else if(mb_strlen($pass) < 6 || mb_strlen($login) > 20)
       {
       echo "Недопустимая длина пароля ( от 6 до 20 символов)";
       exit();
       }  else if ($pass != $pass2)
{
echo "Неправильно повторили пароль";
exit();
} else if  (count($user) > 0) {
            echo "Пользователь с таким логином уже есть";
            exit();
} else if  (count($users) > 0) {
           echo "Пользователь с таким паролем уже есть";
           exit();
           }



$pass = md5($pass."qwerty11");
$pass2 = md5($pass2."qwerty11");

$mysql = new mysqli('localhost','admin','123583','kz');
$mysql->query("INSERT INTO `users` (`fio`,`login`, `pass`, `pass2`, `email`, `phone`)
VALUES('$fio', '$login', '$pass', '$pass2', '$email', '$phone')");
$mysql->close();

header('Location: index.php');
?>