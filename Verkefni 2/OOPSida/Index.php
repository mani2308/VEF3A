<?php
include ('Klasar/Movies.php');
include ('Klasar/VideoRent.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Verkefni 2</title>
</head>
<body>
<h1>Verkefni 2 - Einföld OOP Sida </h1>
<hr>
<?php
$biomynd = new \Movieclass\Movies(10); #Sækir HP mynd til að bera saman við leikara klasanann
$bioleikari = new \Movieclass\Actors(10);
$biomyndir = array();
echo "<br>Movieclass\Movies <br>". $biomynd;
echo "<br> Movieclass\Actors <br>". $bioleikari;
for ($i = 1; $i < 9; $i++)
{
    $biomynd = new \Movieclass\Movies($i);
    array_push($biomyndir,$biomynd);
}
$biomyndir2 = array();
$x = 0;
for ($i = 1; $i < 16; $i++)
{
    $biomynd = new \Movieclass\Movies($x);
    array_push($biomyndir2,$biomynd);
    $x += 5;
}
$videorent = new \VideoRentClass\VideoRent("Fat Gummi","514-9000",$biomyndir);
$shop = new \VideoRentClass\Shop("Chicken ala Palli","777-7771",$biomyndir2,"Popcorn, colas, lollypops");
echo $videorent;
echo $shop;
echo "<br> Is Pirates of the Caribbean: At World's End available in the videorental? <br>";
echo $videorent->isMovieIn("Pirates of the Caribbean: At World's End");
echo "<br> Is Pirates of the Caribbean: At World's End available in shop? <br>";
echo $shop->isMovieIn("Pirates of the Caribbean: At World's End");
$movieName = "Pirates of the Caribbean: At World's End";
echo "<br>";
?>


</body>
</html>