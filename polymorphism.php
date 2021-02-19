<?php

interface Shape
{
    public function area();
}

class Polygon
{
    private $widht, $height;

    function __construct(int $w = 4, int $h = 5)
    {
        $this->widht = $w;
        $this->height = $h;
    }

    /**
     * @return int
     */
    public function getWidht(): int
    {
        return $this->widht;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }
}

class Rectangle extends Polygon implements Shape
{
    public function area()
    {
        return ($this->getWidht() * $this->getHeight());
    }

}

class Triangle extends Polygon implements Shape
{
    public function area()
    {
        return ($this->getWidht() * $this->getHeight() / 2);
    }
}

function getArea(Shape $shape)
{
    return $shape->area();
}

$rect = new Rectangle(8, 10);
$trio = new Triangle(8, 10);
echo "Площа прямокутника: ".getArea($rect).'<hr>';
echo "Площа трикутника: ".getArea($trio);


