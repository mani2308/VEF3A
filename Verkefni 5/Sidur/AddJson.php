<?php

include "Json.php";

if($_POST != 0) {
    $newdata['Nafn'] = $_POST['Nafn'];
    $newdata['Slóð'] = $_POST['Slóð'];
    $inp = file_get_contents('../JsonMyndir/myndir.json');

    $cache = json_decode($inp);
    array_push($cache, $newdata);
    echo "<br>";
    $jsonData = json_encode($cache);
    echo $jsonData;

    if (file_exists("../JsonMyndir/myndir.json")) {
        echo "<br>";
        echo "Photo Uploaded";
        echo "<br>";
    }

    file_put_contents('../JsonMyndir/myndir.json', $jsonData);
    $put = file_put_contents('../JsonMyndir/myndir.json', $jsonData);
    echo $put . "<br>";
    $inp = file_get_contents('../JsonMyndir/myndir.json');
    echo $inp;
    header('Location: '."http://46.101.19.194/Verkefni5/Sidur/Json.php");
}