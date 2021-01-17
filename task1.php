<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('Location: task2.php');
    exit;
}

$_SESSION['answer1'] = $_POST['task1']
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task1</title>
</head>
<body>
    <form method="post">
        <p>Вопрос № 1</p>
        <p> 10 + 10</p>
        <select name="task1">
            <option value="0">10</option>
            <option value="1">20</option>
            <option value="0">145</option>
        </select>
        <p>
            <input type="submit">
        </p>

    </form>

</body>
</html>

<?php
