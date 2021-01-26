<?
session_name('sid');
session_start();

ini_set("display_errors","1");
ini_set("display_startup_errors","1");
ini_set('error_reporting', E_ALL);
mb_internal_encoding('UTF-8');

define('HOME', dirname(__DIR__));
define('URL', 'http://' . $_SERVER['HTTP_HOST']);
define('SkyBlog_VERSION', '1.0.0');

$db = new PDO('mysql:host = localhost; db = cms', 'saida', '1',array(
    PDO::ATTR_PERSISTENT => true
)) or die('Cannot connect to MySQL server :(');
$db->query("SET NAMES utf8");


$user = new User;
$userID = $user->userID;
?>
