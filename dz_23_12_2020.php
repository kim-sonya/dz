<?
#Домашняя работа за 23.12.2020г.

# 1 задача.
for($i=0;$i<30;$i++){
    $arr1[]=mt_rand(0,1990);
    if ($arr1[$i]%2==0)
        print_r("<b>$arr1[$i]<br /></b>");
    elseif ($arr1[$i]%2!=0)
        print_r("<i>$arr1[$i]<br /></i>");
}

# 2 задача.

$arr2 = array (
    'Фрукты'=>array('Aбрикос','Mанго','Aпельсин','Грейп','Aйва','Арония','Яблоко','Мандарин','Финик','Кокос'),
    'Овощи'=>array('Aвокадо','Aртишок','Oгурец','Aрракача','Kартофель','Cвёкла','Морковь','Лук-порей','Салат-латук')
);

foreach ($arr2 as $key=>$value){
    foreach ($value as $item){
        if ($item[0] =="A")
            echo " A это $item<br />";
    }
}

# 3 задача.
$arr3 = array(
    "house1"=>array('8','1','2','3','5','2','1'),
    "house2"=>array('8','2','2','2','5','3','4')
);
echo count($arr3 );
echo "<br />";
echo count($arr3, COUNT_RECURSIVE);
echo "<br />";
echo count ($arr3["house1"]);
echo "<br />";
echo count ($arr3["house1"]);

?>
