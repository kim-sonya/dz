<?
session_start();
$index2="В последний раз ты был на bitrix";
$_SESSION["page"]=array();
if(isset($_SESSION["page"]))
{
    if(count($_SESSION["page"])<1)
    {
        $_SESSION["page"][]=$index2;
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
    <title>Document</title>
</head>
<body>
<h1> Сайт BITRIX</h1>
<a href="fact.php">fact.php</a>
<a href="about.php">index.php</a>
<form method="post">
    <p>
    login
        <input type="text" name="login3">
    password
        <input type="password" name="password3">
        <input type="submit">
    </p>
</form>
</body>
</html>