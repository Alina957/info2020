<!doctype html>
<html lang = "ru">
<head>
     <meta charset ="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title> Регистрация </title>
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
 <form>
 <!--Регистрация-->
     <form action ="sig.php" method = "post">
        <h1 style= "color: black; font-family:cursive; text-align:center;"> Регистрация </h1><br><br>
        <label style= "text-align:center;">Имя</label>
        <input type="text" name="fio" placeholder="Введите свое ФИО">
        <label style= "text-align:center;">Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label style= "text-align:center;">Пароль</label>
        <input type="password" name="pass" placeholder="Введите пароль">
        <label style= "text-align:center;">Подтверждение пароля</label>
        <input type="password" name="pass2" placeholder="Повторите свой пароль">
        <label style= "text-align:center;"> Почта </label>
        <input type="email" name="email" placeholder="Введите свой e-mail">
        <label style= "text-align:center;"> Номер телефона </label>
        <input type="text" name="phone" placeholder="Введите свой номер телефона">

        <button type="submit" class="login-btn">Зарегистрироваться</button>
        <p style= "text-align:center;">
             У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>!
        </p>

      </form>


</body>
</html>
</body>
</html>