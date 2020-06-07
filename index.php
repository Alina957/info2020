<!doctype html>
<html lang = "ru">
<head>
     <meta charset ="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title> Авторизация и регистрация </title>
         <link rel="stylesheet" href="styly.css">
         <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<style>
    body {
        background-image: url('123.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
</style>
<body>
<!--Авторизация-->
 <form action="auth.php" method="post">
        <h1 style= "color: black; font-family:cursive; text-align:center;"> Авторизация </h1><br><br>
             <label>Логин</label>
             <input type="text" name="login" placeholder="Введите свой логин">
             <label>Пароль</label>
             <input type="password" name="password" placeholder="Введите пароль">
             <button type="submit">Войти</button>
        <p style= "text-align:center;">
            У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>!
        </p>

    </form>

</body>
</html>
