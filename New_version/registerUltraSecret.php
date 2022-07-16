<?
// Страница регистрации нового пользователя
// Соединямся с БД
$link = new mysqli('localhost', 'e92579fm_dp', '%d2EVoLk', 'e92579fm_dp');
if(isset($_POST['submit']))
{
    $err = [];
    // Проверяем валидность введенного логина
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }
    if(strlen($_POST['login']) < 4 or strlen($_POST['login']) > 15)
    {
        $err[] = "Логин должен быть не меньше 4-х символов и не больше 15";
    }
    // Проверяем, не сущестует ли пользователя с таким именем
    $query = mysqli_query($link, "SELECT user_id FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['login'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Пользователь с таким логином уже существует в базе данных";
    }
    if(trim($_POST['pass']) != trim($_POST['repass']))
    {
        $err[] = "Введенные пароли не совпадают";
    }
    // Если нет ошибок, то добавляем в БД нового пользователя
    if(count($err) == 0)
    {
        $login = $_POST['login'];
        // Убераем лишние пробелы и делаем двойное хеширование
        $password = md5(md5(trim($_POST['pass'])));
        mysqli_query($link,"INSERT INTO users SET user_login='".$login."', user_password='".$password."'");
        session_start();  
        //Пишем в сессию информацию о том, что мы авторизовались:
		$_SESSION['auth'] = true;
		/*
			Пишем в сессию логин и id пользователя
			(их мы берем из переменной $user!):
		*/
    }
    else
    {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
    header("Location: loginUltraSecret.php"); exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web&Quest</title>
	<link rel="stylesheet" href="css/adapt.css" >
	<script src="adapt.js"></script>
	
</head>
<body class="d-flex flex-column h-100">
<center>
    <form style="width:60%;margin-top: 10%;" method="POST">
        <h1 class="h3 mb-3 fw-normal">Форма регистрации</h1>
        <label style="float: left;">Аккаунт:</label>
        <input type="login" id="login" name="login" class="form-control" placeholder="Логин" required autofocus><br>
        <label style="float: left;">Пароль:</label>
        <input type="password" id="pass" name="pass" class="form-control" placeholder="Пароль" required><br>
        <label style="float: left;">Повторите пароль:</label>
        <input type="password" name="repass" class="form-control" placeholder="Пароль" required><br>
        <button class="w-100 btn btn-lg btn-danger" name="submit" type="submit">Зарегистрироваться</button>
    </form>
</center>
</body>
</html>