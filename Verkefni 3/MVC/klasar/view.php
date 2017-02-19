<?php
/**
 * Created by PhpStorm.
 * User: Mani
 * Date: 7.2.2017
 * Time: 10:58
 */

namespace MVC;

class view
{
    private $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}