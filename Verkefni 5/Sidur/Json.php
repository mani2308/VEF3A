<?php

include "Incl.php";
$JSON = file_get_contents("JsonMyndir/myndir.json");
$JSON_A = json_decode($JSON,true);
?>

<h2>Verkefni 5 - API - 14%</h2>

<div class="Main">
    <form action="http://46.101.19.194/Verkefni5/Sidur/AddJson.php" method="post">
        <label>Mynd:</label> <br>
        <input type="text" name="Nafn" value="">
        <br>
        <label> Myndaslóð:  </label><br>
        <input type="text" name="Slóð" value="">
        <br><br>
        <input type="submit" value="Register Photo">
    </form>


    <?php
    $i = 0;
    foreach($JSON_A as $k) {
        echo $k["Nafn"] . " ";
        echo "<br>";
        $img = $k['Slóð'];
        echo $k['Slóð'];
        echo "<br>";
        echo '<img src="' . $img . '" height="500px" width="800px">';
        echo "<br>";
    }

    print_r($JSON_A);
    gettype($JSON);
    ?>




</div>
