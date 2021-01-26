<?php

$hostname = 'localhost';
$username = 'saida';
$password1 = '1';
$db = 'cms';

$db_conn = mysqli_connect($hostname, $username, $password1, $db);
mysqli_set_charset($db_conn, 'utf8');

exec('mysqldump --user=saida --password=1 --host=localhost DB_NAME > cms.sql');

require_once '../includes/core.php';

$title = 'Авторизация';
require_once '../includes/user.php';

if (isset($_POST['auth'])) {
    if ($db->query("SELECT * FROM `user` WHERE `login` = '" . $_POST['login'] . "' AND `password` = '" . md5($_POST['password']) . "' LIMIT 1")->fetchColumn() == 1) {
        echo 'Authorized!';
        $user->login($_POST['login'], $_POST['password']);
    } else {
        echo 'Error';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Auth</title>
</head>
<body>
  <div class="list-group">
        <div class="list-group-item">
            <form class="form-horizontal" action=" https://fact.digital/" method="POST" role="form">
                <div class="form-group">
                    <label for="login" class="col-sm-1 control-label">Логин</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="login" placeholder="Login">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-1 control-label">Пароль</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-1 col-sm-10">
                        <input type="submit" name="auth" class="btn btn-primary btn-lg btn-block" value="Войти!" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

