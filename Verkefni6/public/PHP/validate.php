<?php

 if(!empty($_POST["username"])) {
    $sql = "SELECT count(*) as tala FROM userbase where username ='". $_POST["username"]. "'";
    $query = $this->db->prepare($sql);
    $query->execute();
    $row = $query->fetchAll();
    $user_count = $row[0];

    if($user_count>0) echo "<span class='status-not-available'> Username Not Available.</span>";
    else echo "<span class='status-available'> Username Available.</span>";
}