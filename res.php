<?


session_start();

echo "Ваш результат " . ($_SESSION['task1'] + $_SESSION['task2'] + $_SESSION['task3']) . " балла";

?>
