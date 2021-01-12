

<!--Домашняя работа от 11.01.2021г.

3 задача на занятии -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get//</title>
</head>
<body>
<form action="phpcourse.php" method="get">
    <p>
        <label for="lab">Lab</label>
        <select name="lab">
            <option value="lab1">Лаб1</option>
            <option value="lab2">Лаб2</option>
            <option value="lab3">Лаб3</option>
            <option value="lab4">Лаб4</option>
        </select>
    </p>
    <button type="submit">Отправить</button>


</form>
</body>
</html>
<hr>

<!--1 задача -->

<?
$mail  = "<saidaishanova@yandex.ru>, " ;
$mail.= "<saidamedviju@gmail.com>";

$subject = "Тема письма";

$message = ' <p>Логин</p> </br>IvanIvanovich@mail.ru</br>
Nikobank@gmail.com</br> avangardauto@yandex.ru';

$headers  = "Content-type: text/html;\r\n";
$headers .= "From: От кого письмо <admin@yandex.ru>\r\n";
$headers .= "Reply-To: reply-to@example.com\r\n";

mail($mail, $subject, $message, $headers);
?>
<!--2 задача-->
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
<form method="post">
    <p>
        Login: <input type="login" name = "login" <br>
        Password:<input type="password" name = "password" <br>
        <button type="submit" name = "submit" >Вход</button>
    </p>
</form>
<?
if (isset($_POST['login']) AND isset($_POST['password'])){
    if (md5($_POST['password']) == '287810448cfee52de17298a690444b28')//cghtqlkzvtcnyjujghbvtytybz
    {
        echo "Вы успешно авторизованы.";
    }

    else {
        echo "Проверьте правильность введённых данных.";
    }
}
?>
</body>
</html>
<hr>
<!--3 задача
С выполнением этой задачи возникли непреодолимые трудности.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
<form method="post">
    <p>
        Ваше имя: <input type="text" name = "text" <br>
    </p>
    <?
    $arr1 = array(
        '1. Считаете ли Вы, что у многих ваших знакомых хороший характер?',
        '2. Раздражают ли Вас мелкие повседневные обязанности?',
        '3. Верите ли Вы, что ваши друзья преданы Вам?',
        '4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание?',
        '5. Способны ли Вы ударить собаку или кошку?',
        '6. Часто ли Вы принимаете лекарства?',
        '7. Часто ли Вы меняете магазин, в который ходите за продуктами?',
        '8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?',
        '9. Тяготят ли Вас общественные обязанности?',
        '10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?',
        '11. Часто ли Вам приходят в голову мысли о Вашей невезучести?',
        '12. Сохранилась ли у Вас фигура по сравнению с прошлым?',
        '13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?',
        '14. Нравится ли Вам семейная жизнь?',
        '15. Злопамятны ли Вы?',
        '16. Находите ли Вы, что стоит погода, типичная для данного времени года?',
        '17. Случается ли Вам с утра быть в плохом настроении?',
        '18. Раздражает ли Вас современная живопись?',
        '19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?',
    );

    foreach ($arr1 as $value){
        echo '<br>';
        echo $value;
    };
    ?>

</form>
