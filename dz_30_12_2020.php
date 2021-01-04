<?
//1 задача.
function array_fill_rand($limit, $min=false, $max=false)
{
    $limit = (int)$limit;
    $array = array();
        for ($i=0; $i<$limit; $i++)
        {
            $array[$i] = rand($min, $max);
        }

    return $array;
}

echo '<pre>';

// Массив из 5 элементов
$rand_array = array_fill_rand(5, 0,10);
print_r($rand_array);
echo "<br/>";

//2 задача.

function str ($str1){
    echo "Количество слов в строке: " , str_word_count($str1);
}

$stroka = str("HTML, CSS, PHP, BITRIX");

echo "<br/>";

//3 задача.
function str2($str){
    echo "Строка наоборот: ", strrev($str);
}
$stroka = str2("HTML, CSS, PHP, BITRIX");
echo "<br/>";

//4 задача.
function str3 ($str3){
    echo "Длина строки: " , strlen($str3);
}

$stroka = str3("HTML, CSS, PHP, BITRIX");

echo "<br/>";

//5 задача.
function str4($str4){
    $newtext = wordwrap($str4, 1, "\n", 1);

    echo "$newtext\n";
}
$newtext = str4("HTML, CSS, PHP, BITRIX");
?>