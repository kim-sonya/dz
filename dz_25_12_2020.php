<?
// Домашняя работа от 25.12.2020г.
#5 задача на занятии.
$str5 = "https://demotivation.ru/wp-content/uploads/2020/01/Canada_Parks_Lake_Mountains_Forests_Scenery_Rocky_567540_3840x2400-scaled.jpg";
if(substr($str5, -4 ,3) === '.png')
{
    echo "Да.";
}
else{
    echo "Нет.";
}
echo "<br />";

# 1 задача.
$str1 = "Welcome to Russia. We always have good weather.";
if (strlen($str1) > 5)
{
    echo (mb_substr ($str1, 5) . "...");
}
else
    {
    echo $str1;
}
echo "<br />";

# 2 задача.
$str2 = "Welcome to Russia. We always have good weather.";
echo str_replace(array("a", "b", "c"),
    array("1","2","3"), $str2);
echo "<br />";

# 3 задача.
$str3 = "abc abc abc";

echo strrpos ($str3, 'b');
echo "<br />";


# 4 задача.
$str4 = "html css php";
$arr = explode(' ', $str4,3);
print_r ($arr);
echo "<br />";

# 5 задача.

$str6 = date_create("05-04-1990");
$str7 = date_create("27-12-2020");
$result = date_diff($str6, $str7);
echo $result->days . " прошло дней с первой даты.";













?>