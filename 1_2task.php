<?//2 задание. (расположила первым, иначе ошибка выползает)
session_start();

$a="login";
$b="password";

if(count($_POST)>0)
{
    if($_POST["login"]==$a || $_POST["password"]==$b)
    {
        if (isset($_SESSION['page']))
        {
            foreach($_SESSION["page"] as $value)
            {
                echo $value;
            }
            exit;
        }
    }
}
else
{
    if (isset($_SESSION['page']))
    {
        foreach($_SESSION["page"] as $value)
        {
            echo $value;
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>авторизация</title>
</head>
<body>
<h1>Привет</h1>
<a href="fact.php">fact.php</a>
<a href="bitrix.php">bitrix.php</a>
<form method="post">
    <p>
        login
        <input type="text" name="login">
        password
        <input type="password" name="password">
        <input type="submit">
    </p>
</form>
</body>
</html>


<?php
//1 задача.
if (isset($_POST['log_die'])){
    unset ($_SESSION['login']);
    session_destroy();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
<body>
    <form action="about.php" method="post" name="log">
        <input type="hidden" name="log"  size="20" class="form" value="1">
        <p><input type="submit" name="log"  value="Выйти" class="log"></p>
    </form>
</body>
</html>
<hr>













