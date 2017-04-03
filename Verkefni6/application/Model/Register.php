<?php

namespace Mini\Model;
use Mini\Core\Model;
class Register extends Model
{

    public function validateForm()
    {
        if(!empty($_POST["username"])) {
            $sql = "SELECT count(*) as tala FROM userbase where username ='". $_POST["username"]. "'";
            $query = $this->db->prepare($sql);
            $query->execute();
            $object = $query->fetch();
            $row = array($object);
            $user_count = $row[0]->tala;
            if($user_count>0) echo "<span class='status-not-available'> Notendanafn er ekki laust.</span>";
            else echo "<span class='status-available'> Notendanafn er Laust.</span>";
        }
    }

    public function Skra($name, $username, $pass)
    {
        $sql = "INSERT INTO userbase (name, username, pass) VALUES (:name, :username, :pass)";
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':username' => $username, ':pass' => $pass);
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
        return $query;
    }


    public function logIn($username,$password)
    {
        $sql = "SELECT username  FROM userbase WHERE username = :username AND pass = :pass LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':username' => $username, ':pass' => $password);
        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

}