<?php

/**
 * Created by PhpStorm.
 * User: Mani
 * Date: 20.1.2017
 * Time: 11:14
 */

function getMovieInfo($tala){
    $File = '../movie_metadata.csv';
    $arrayRes  = array();
    $handle     = fopen($File, "r");
    if(empty($handle) === false) {
        while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){
            $arrResult[] = $data;
        }
        fclose($handle);
    }
    $directors = [];
    $movies = [];
    $duration = [];
    $rating = [];
    for($i = 0; $i < 100; $i++)
    {
        array_push($directors,$arrayRes[$i][1]);
        array_push($movies,$arrayRes[$i][11]);
        array_push($duration,$arrayRes[$i][3]);
        array_push($rating,$arrayRes[$i][25]);
    }
    $movie = [];
    array_push($movie,$directors[$tala],$movies[$tala],$duration[$tala],$rating[$tala] );
    /* echo("$movie[0], $movie[1], $movie[2], $movie[3]"); */
    return $movie;
}
$movieinfo = getMovieInfo(10);
print_r($movieinfo);