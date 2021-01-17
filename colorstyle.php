<?php

$css = file_get_contents("style.css");

$token = strtok($css, "{}");
$css_parts = array();
while ($token !== false) {
    $css_parts[] = trim($token);
    $token = strtok("{}");
}

$flag = false; $properties = "";
foreach($css_parts as $part) {
    if($flag) { $properties .= " ".trim($part); }
    $flag = !$flag;
}
$properties = strtoupper(str_replace(array(":",",",";","(",")")," ",$properties));

$colors = array();
preg_match_all('/(?!\b)(#\w+\b)/',$properties,$colors);
$colors = array_unique($colors);

print_r($colors);



if (isset($_POST['do'])) {
    if ($_POST['select'] == 'red') {
        $color = 'style = "background-color: #FF0000;"';
    }
}

?>


<!DOCTYPE html>
<html>
<head>

    <title></title>
</head>
<body <?=$color?>>
<form name="name" method="post">
    <select name ="select" value="colors">
        <option value="red"  <?php if ($_POST['select'] == 'red') echo 'selected' ; ?> name="Красный">Красный</option>
    </select>

    <input type="submit" name="do" value="Push">
</form>


</body>
</html>
