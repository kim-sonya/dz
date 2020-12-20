<?php

$h = strftime("%H:%M<br>");
$a = ini_set('date.timezone', 'Europe/Samara');
echo $h;
echo $a;
if ($h >8.00 AND $h <20.00)
    {$img = 'day.jpg';}
else
    {$img = 'nigh.jpg';}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Переход времени</title>
</head>
<body style = "background-image: url(<?php echo $img ?>);background-size:100%; ">

</body>
</html>