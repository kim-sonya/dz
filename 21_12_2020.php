<?
/* 1 задание.*/
for ($a = 5; $a <= 13; $a++) {
    echo "$a<br /> ";
}
echo "<br /><hr />";
/* Года.*/

echo "<select>";
for ($b = 1920; $b <= 2020;$b++ ) {
    echo "<option>$b</option>";
}
echo "</select>";

echo "<br /><hr />";
?>

<?
/* 2 задание.*/
$n = 1000;
$num=0;
while ($n>=50)
{
    $n=$n/2;
    $num++;
}
echo $num;

echo "<br /><hr />";
$n = 1000;
$num = 0;
// condition - условие
$a = 50;
for ($n = 1000; $n >= $a; $num++) {
    $n=$n/2;
}
echo 'Количество итераций: '.$num.PHP_EOL;
echo '<br />Число < '.$a.' = '.$n.PHP_EOL;

echo "<br /><hr />";
/* 3 задание */

$i = mt_rand(0,10);
if ($i = 0) {
    echo "0,1,2,3,4,5,6,7,8,9 <br /> ";
}
elseif ($i=2){
    echo "0,1,2,3,4,5,6,7,8 <br /> ";
}
elseif ($i=3){
    echo "0,1,2,3,4,5,6,7 <br /> ";
}
elseif ($i=4){
    echo "0,1,2,3,4,5,6 <br /> ";
}
elseif ($i=5){
    echo "0,1,2,3,4,5, <br /> ";
}
elseif ($i=6){
    echo "0,1,2,3,4, <br /> ";
}
elseif ($i=7) {
    echo "0,1,2,3 <br /> ";
}
elseif ($i=8){
    echo "0,1,2, <br /> ";
}
elseif ($i=9) {
    echo "0,1 <br /> ";
}
else {
    echo "0<br />";
}
?>