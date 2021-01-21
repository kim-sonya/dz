<?

//Домашняя работа за 20.01.2021г.

$hostname = 'localhost';
$username = 'saida';
$password = '1';
$bdname = 'People';


//1 задание.
$db_conn = mysqli_connect($hostname, $username, $password, $bdname);
$sql = mysqli_query($db_conn, " INSERT INTO People VALUES (1, 'Sara', 'Bernar', 45)");
$sql1 = mysqli_query($db_conn, " INSERT INTO People VALUES (2, 'Lubov', 'Orlova', 21)");
$sql2 = mysqli_query($db_conn, "INSERT INTO People VALUES (3,'Yanina','Jeimo',94)");
$sql3 = mysqli_query($db_conn, "INSERT INTO People VALUES (4,'Audrey', 'Hepburn', 14)");
$sql4 = mysqli_query($db_conn, "INSERT INTO People VALUES (5, 'Katharine', 'Houghton Hepburn',24)");
$sql5 = mysqli_query($db_conn, "INSERT INTO People VALUES (6, 'Ingrid', 'Bergman', 42)");
$sql6 = mysqli_query($db_conn, "INSERT INTO People VALUES (7, 'Grace Patricia', 'Kelly', 52)");
$sql7 = mysqli_query($db_conn, "INSERT INTO People VALUES (8, 'Vivien', 'Leigh', 29)");
$sql8 = mysqli_query($db_conn, "INSERT INTO People VALUES (9, 'Rita', 'Hayworth', 20)");
$sql9 = mysqli_query($db_conn, "INSERT INTO People VALUES (10, 'Ava Lavinia', 'Gardner', 16)");

//Вывести все значения с новой строки на текущую страницу php.
$name = mysqli_query($db_conn, "select NAME ,SURNAME, AGE from People");
$arr_name = mysqli_fetch_all($name, MYSQLI_ASSOC);
foreach ($arr_name as $value) {
    echo "Имя = {$value['NAME']}<br>";
    echo "Фамилия = {$value['SURNAME']}<br>";
}

//изменение записей.
$actor1 = mysqli_query($db_conn, "UPDATE People SET AGE = 19 WHERE  ID_person = 3");
$actor2 = mysqli_query($db_conn, "UPDATE People SET NAME = 'Ава Лавиния', SURNAME = 'Гарднер' WHERE ID_person = 10");
$actor3 = mysqli_query($db_conn, "UPDATE people SET AGE = 1589 WHERE NAME = 'Vivien'");
$actor4 = mysqli_query($db_conn, "UPDATE people SET AGE = 22 WHERE SURNAME = 'Bernar'");
$actor5 = mysqli_query($db_conn, "UPDATE People SET NAME = 'Ava Lavinia', SURNAME = 'Gardner' WHERE ID_person =10");

//удаление записей.
$men1 = mysqli_query($db_conn, "INSERT INTO People VALUES (11, 'Kirk', 'Douglas', 76)");
$men2 = mysqli_query($db_conn, "INSERT INTO People VALUES (12, 'Laurence Kerr', 'Olivier', 10)");
$men3 = mysqli_query($db_conn, "INSERT INTO People VALUES (13, 'Charles Spencer', 'Chaplin', 28)");

$del1 = mysqli_query($db_conn, "DELETE FROM People WHERE ID_person = 11");
$del2 = mysqli_query($db_conn, "DELETE FROM People WHERE SURNAME = 'Olivier'");
$del3 = mysqli_query($db_conn, "DELETE FROM People WHERE AGE = 28");

//2 таблица.


mysqli_select_db($db_conn, $bdname);
$hobbies = mysqli_query($db_conn, "CREATE TABLE Hobbies(
ID_hb INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
NAME VARCHAR (20) NOT NULL,
DESCRIPTION VARCHAR (50) NOT NULL
)");

$hb1 = mysqli_query($db_conn, " INSERT INTO Hobbies VALUES (1, 'Reading', 'reading books')");
$hb2 = mysqli_query($db_conn, " INSERT INTO Hobbies VALUES (2, 'Cactus', 'cultivation of cacti')");
$hb3 = mysqli_query($db_conn, " INSERT INTO Hobbies VALUES (3, 'Dogs', 'dog breeding')");
$hb4 = mysqli_query($db_conn, " INSERT INTO Hobbies VALUES (4, 'Photo', 'macro photography')");
$hb5 = mysqli_query($db_conn, " INSERT INTO Hobbies VALUES (5, 'Food', 'making desserts')");

//соединение таблиц.
//$connect = mysqli_query($db_conn, "SELECT people.NAME, hobbies.NAME
//FROM people JOIN hobbies ON people.ID_person = hobbies.ID_hb");

//создание внешнего ключа.
$key = mysqli_query($db_conn, "ALTER TABLE people ADD FOREIGN KEY 'Id_hobbie' REFERENCES hobbies 'ID_hb'
ON DELETE RESTRICT ON UPDATE RESTRICT");
?>
