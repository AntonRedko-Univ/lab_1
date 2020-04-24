<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация пользователя</title>
</head>
<body>
<?php
$log = $_POST["login"];
$pass = $_POST["password"];

$usinfo = array(array('login' => 'BarATrum009', 'password' => 'cominthrough', 'name' => 'Ада', 'surname' => 'Байрон', 'role' => 'admin'),
                array('login' => 'Dotyev007', 'password' => 'H@5ley', 'name' => 'Афанасий', 'surname' => 'Авдотьев', 'role' => 'client'),
                array('login' => 'imabest', 'password' => 'bestmanager', 'name' => 'Иван', 'surname' => 'Иванов', 'role' => 'manager'));

class user {
    public $name;
    public $surname;
    public $role;
    public $login;
    public $password;
    function __construct($name,$surname,$role,$login,$password)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->role = $role;
        $this->login = $login;
        $this->password = $password;
    }
}
class admin extends user {

    public function introduce (){
        echo "Здравствуйте, ".$this->role. "  " . $this->name. "  " . $this->surname. "  ". ", вам разрешено все на данном сайте";
    }
};
class manager extends user {

    public function introduce() {
        echo "Здравствуйте, ".$this->role. "  " . $this->name. "  " . $this->surname. "  ". ", вам разрешено редактировать и удалять пользователей с аккаунтами клиентов";
    }
};
class client extends user {

    public function introduce (){
        echo "Здравствуйте ,".$this->role. "  " . $this->name. "  " . $this->surname. "  ". ", добро пожаловать на сайт!";;
    }
}

switch ($log) {
    case "BarATrum009";
        $admin = new admin($usinfo[0]["name"], $usinfo[0]["surname"], $usinfo[0]["role"], $usinfo[0]["login"], $usinfo[0]["password"]);
        $admin->introduce();
        break;
    case "imabest";
        $manager = new manager($usinfo[2]["name"], $usinfo[2]["surname"], $usinfo[2]["role"], $usinfo[2]["login"], $usinfo[2]["password"]);
        $manager->introduce();
        break;
    case "Dotyev007";
        $client = new client($usinfo[1]["name"], $usinfo[1]["surname"], $usinfo[1]["role"], $usinfo[1]["login"], $usinfo[1]["password"]);
        $client->introduce();
        break;
}

