<?php

namespace Mini\Model;
use Mini\Core\Model;
class Profile extends Model
{

    public function getUserInfo($username)
    {
        $sql = "SELECT name, username, pass FROM userdb WHERE username ='".$username."'";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function validateForm()
    {
        if(!empty($_POST["username"])) {
            $sql = "SELECT count(*) as tala FROM userdb where username ='". $_POST["username"]. "'";
            $query = $this->db->prepare($sql);
            $query->execute();
            $object = $query->fetch();
            $row = array($object);
            $user_count = $row[0]->tala;
            if($user_count>0) echo "<span class='status-not-available'> Notendanafn er ekki laust.</span>";
            else echo "<span class='status-available'> Notendanafn er Laust.</span>";
        }
    }

    public function logout()
    {
        ob_start();
        require APP . 'view/_templates/header.php';
        session_destroy();
        ob_get_clean();
    }

    public function nyskra($name, $username, $pass)
    {
        $sql = "INSERT INTO userdb (name, username, pass) VALUES (:name, :username, :pass)";
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':username' => $username, ':pass' => $pass);
        $query->execute($parameters);
        return $query;
    }

    public function logIn($username,$password)
    {
        $sql = "SELECT username  FROM userdb WHERE username = :username AND pass = :pass LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':username' => $username, ':pass' => $password);
        $query->execute($parameters);
        return $query->fetch();
    }

    public function breyta($name,$pass,$username)
    {
        $sql = "UPDATE userdb SET name = :name, pass = :pass WHERE username = :username";
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':pass' => $pass,':username' => $username);
        $query->execute($parameters);
    }

}