<?php

/**
 * Created by PhpStorm.
 * User: Mani
 * Date: 23.1.2017
 * Time: 13:34
 */
Class Car {
    private $model;
    public function  setModel($model){
        $this->model = $model;
    }
    public  function getModel(){
        return $this->model;
    }
}
Class RaceCar extends Car{
    private $style = ', fast & super cool';
    public function drivewithswag()
    {
        return 'Drive a ' . $this ->getModel() .'<i> ' .$this->style.'</i>';
    }
}