<?php
/**
 * Created by PhpStorm.
 * User: Mani
 * Date: 16.2.2017
 * Time: 13:53
 */

namespace MVC;

class controller
{
    private $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}