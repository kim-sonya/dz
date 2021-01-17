<?
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('Location: task3.php');
    exit;
}
$_SESSION['answer2'] = $_POST['task2']

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task2</title>
</head>
<body>
<form method="post" action=>
    <p>Вопрос № 2</p>
    <p> 10 + 50</p>
    <select name="task1">
        <option value="0">10</option>
        <option value="1">60</option>
        <option value="0">-5</option>
    </select>
    <p>
        <input type="submit">
    </p>

</form>
</body>
</html>



