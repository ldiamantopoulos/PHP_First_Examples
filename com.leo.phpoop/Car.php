<?php


class Car
{
private $make;
private $model;
private $color;

    /**
     * Car constructor.
     * @param $make
     * @param $model
     * @param $color
     */
    public function __construct($make, $model, $color)
    {
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
    }

    public function start(){
        echo 'Car Starting...';
    }
    /**
     * @return mixed
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * @param mixed $make
     */
    public function setMake($make)
    {
        $this->make = $make;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }



}