
<?
session_start();

$color = false;

if (isset($_POST['do'])) {
    if ($_POST['select'] == 'red') {
        $color = 'style = "background-color: FireBrick;"';
    }
    elseif ($_POST['select'] == 'blue') {
        $color = 'style = "background-color: DarkBlue;"';

    }
    elseif ($_POST['select'] == 'green') {
        $color = 'style = "background-color: Gold;"';
    }
}
if (isset($_POST['select']))
    session_destroy();

?>
<!DOCTYPE html>
<html>
<head>

    <title></title>
</head>
<body <?=$color?>>
<form name="my" action="<?=$_SESSION['PHP_SELF']?>"method="post">
    <select name ="select" value="">
        <option value="red"  <?php if ($_POST['select'] == 'red') echo 'selected' ; ?> name="Красный">Красный</option>
        <option value="blue" <?php if ($_POST['select'] == 'blue') echo 'selected' ; ?> name="Синий">Синий</option>
        <option value="green" <?php if ($_POST['select'] == 'green') echo 'selected' ; ?> name="Желтый">Желтый</option>
    </select>

    <input type="submit" name="do" value="Push">
    <p><input type="submit" name="log"  value="Выйти" class="log"></p>
</form>
</body>
</html>











