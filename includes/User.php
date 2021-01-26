<?
class User {
    public $user;
    public $userID;
    public $password;
    public $login;

    function __construct() {
        global $db;

        if (isset($_SESSION['user_id']) && $db->query("SELECT * FROM `user` WHERE `id` = '" . $_SESSION['user_id'] . "' LIMIT 1")->fetchColumn() == 1) {

            $this->user = $db->query("SELECT * FROM `user` WHERE `id` = '" . $_SESSION['user_id'] . "' LIMIT 1")->fetch();

            setcookie('user_id', $user['id'], time() + 60 * 60 * 24 * 365);
            setcookie('password', md5($user['password']), time() + 60 * 60 * 24 * 365);

            $db->query("UPDATE `user` SET `last_time_entry` = '" . time() . "' WHERE `id` = '" . $this->user['id'] . "' LIMIT 1");

            $this->userID = $this->user['id'];
        }
    }

    public static function login($login, $password) {
        global $db;

        $user = $db->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '" . md5($password) . "' LIMIT 1")->fetch();

        $_SESSION['user_id'] = $user['id'];

        $db->query("UPDATE `user` SET `last_entry_time` = '" . time() . "' WHERE `id` = '" . $user['id'] . "' LIMIT 1");
    }

    public function registerUser($user_login, $user_password) {
        global $db;

        $this->login = $user_login;
        $this->password = md5($user_password);


        $st = $db->prepare("INSERT INTO `user` (`login`, `password`)
                VALUES (:login, :password)");

        $st->execute(array(
            'login' => $this->login,
            'password' => $this->password,
        ));

        return true;
    }
}

?>
