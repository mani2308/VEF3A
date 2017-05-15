<?php

 if(!empty($_POST["username"])) {
    $sql = "select count(*) as tala from userdb where username ='". $_POST["username"]. "'";
    $query = $this->db->prepare($sql);
    $query->execute();
    $row = $query->fetchAll();
    $user_count = $row[0];

}