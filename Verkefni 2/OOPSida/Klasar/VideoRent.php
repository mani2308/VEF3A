<?php
/**
 * Created by PhpStorm.
 * User: Mani
 * Date: 27.1.2017
 * Time: 22:11
 */

namespace VideoRentClass;


class VideoRent
{
    public $nafn;
    public $simi;
    public $biomyndir;
    public function __construct($name,$phone,$movies)
    {
        $this->nafn = $name;
        $this->simi = $phone;
        $this->biomyndir = $movies;
    }
    public function isMovieIn($movieName)
    {
        for ($i = 0; $i < count($this->biomyndir);$i++) {
            if ($movieName == $this->biomyndir[$i]->nafn) {
                print(" <b>movie is in</b>");
                return;
            }
        }
        print(" movie not in stock");
    }
    function __toString()
    {
        return "<br> Video Rental: ". $this->nafn . "<br>".
            "Phonenumber: ". $this->simi."<br>".
            "Movies on rental: ". count($this->biomyndir) ."<br>";
    }
}
class Shop extends VideoRent
{
    public $nammi;
    public function __construct($name, $phone, $movies,$candy)
    {
        parent::__construct($name, $phone, $movies);
        $this->nammi = $candy;
    }
    function __toString()
    {
        return "<br> Shop name: ". $this->nafn . "<br>".
            "Phonenumber: ". $this->simi."<br>".
            "Candy on sale: ". $this->nammi."<br>".
            "Movie on rental: ". count($this->biomyndir) ."<br>";
    }
}
