<?
session_start();
$index="В последний раз ты был на FACT";
$_SESSION["page"]=array();
if(isset($_SESSION["page"]))
{
    if(count($_SESSION["page"])<1)
    {
        $_SESSION["page"][]=$index;
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
    <title>fact!!</title>
</head>
<body>
<h1>fact</h1>
<a href="index.php">index.php</a>
<a href="bitrix.php">bitrix.php</a>
<form method="post">
    <p>
    login
        <input type="text" name="login2">
    password
        <input type="password" name="password2">
        <input type="submit">
    </p>
</form>
</body>
</html>
