<?php
class User {
    public $username;
    public $password;

    public function __construct($username, $password){
        $this->username=$username;
        $this->password=$password;
    }

    public static function authenticateUser($username, $password){
        $json = file_get_contents('users.json');
        $data = json_decode($json,true);

        foreach($data as $item){
            if($item["username"]=== $username && $item["password"]===$password){
                return new User($username,$password);
            }
        }
        return null;
    }
}

?>