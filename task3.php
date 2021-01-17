<?
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('Location: res.php');
    exit;
}
$_SESSION['answer3'] = $_POST['task3']

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task3</title>
</head>
<body>
<form method="post">
    <p>Вопрос № 3</p>
    <p> 100 + 50</p>
    <select name="task1">
        <option value="0">1000</option>
        <option value="1">150</option>
        <option value="0">18</option>
    </select>
    <p>
        <input type="submit">
    </p>
</form>
</body>
</html>


