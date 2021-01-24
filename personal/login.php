
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>skyrim_1</title>
    <link rel="stylesheet" href="style_login.css">


</head>

<body>
<h1>Ты готов защитить Скайрим?</h1>


<div id="wrapper">
    <form id="signin" method="post" action="skyrim.php"  target="_blank" autocomplete="off">
        <input type="text" id="login" name="login" placeholder="логин" />
        <input type="password" id="pass" name="pass" placeholder="пароль" />
        <button type="submit">ДА</button>
        <p>Забыл пароль? <a href="#">Жми сюда</a></p>
    </form>
    <?
    $hostname = 'localhost';
    $username = 'saida';
    $password1 = '1';
    $bdname = 'pass_base';

    $db_conn = mysqli_connect($hostname, $username, $password1, $bdname);
    mysqli_set_charset($db_conn, 'utf8');



    if ( !empty($_REQUEST['password']) and !empty($_REQUEST['login']) ) {
        $login = $_REQUEST['login'];
        $password = $_REQUEST['password'];

        mysqli_select_db($db_conn, $bdname);
        $query = mysqli_query($db_conn,"SELECT * FROM password WHERE login = .$login.");

        $link = mysqli_query($db_conn,"SELECT * FROM password WHERE password = .$password.");
        $result = mysqli_query($query, $link);
        $user = mysqli_fetch_assoc($result);


        if (!empty($user)) {

            session_start();

            $_SESSION['auth'] = true;

            $_SESSION['password'] = $user['password'];
            $_SESSION['login'] = $user['login'];
            {
                include 'skyrim.php';
            }
        }
        else {
            include 'error.php';
        }
    }
?>
</div>

</body>
</html>

