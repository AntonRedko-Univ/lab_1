<?php
    $password = $_POST["password"];
    $login = $_POST["login"];

    class User
    {
        public $login;
        public $password;
        public $name;
        public $surname;
        public $role;
    }

class Admin extends User
{
    function  __construct()
    {
        $this->pass = "cominthrough";
        $this->log = "BarATrum009";
        $this->role = "Админ";
        $this->name = "Ада";
        $this->surname = "Байрон";
    }

    public function printInfo()
    {
        echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте делать всё";
    }
}
class Client extends User
{
    function  __construct()
    {
        $this->pass = "H@5ley";
        $this->log = "Dotyev007";
        $this->role = "Клиент";
        $this->name = "Афанасий";
        $this->surname = "Авдотьев";
    }

    public function printInfo()
    {
        echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте просматривать информацию доступную пользователям";
    }
}
class Manager extends User
{
    function  __construct()
    {
        $this->pass = "bestmanager";
        $this->log = "imabest";
        $this->role = "Мененджер";
        $this->name = "Иван";
        $this->surname = "Иванов";
    }

    public function printInfo()
    {
        echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте изменять, удалять и создавать клиентов";
    }
}
if ($login == 'BarATrum009' and $password == 'cominthrough')
{
    $admin = new Admin();
    $admin ->printInfo();
}else if ($login == 'imabest' and $password == 'bestmanager')
{
    $manager = new Manager();
    $manager ->printInfo();
}else if ($login == 'Dotyev007' and $password == 'H@5ley')
{
    $client = new Client();
    $client ->printInfo();
}else
{
    echo 'Неверный логин или пароль';
}
?>
<br/>
<form action = "Login.php" method = "post">
    <input type="submit" name="send" value="Back" class="button">
</form>
