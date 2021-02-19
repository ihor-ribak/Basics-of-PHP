<?php

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

class Rectangle extends Polygon
{
    public function area()
    {
        return ($this->getWidht() * $this->getHeight());
    }

}

class Triangle extends Polygon
{
    public function area()
    {
        return ($this->getWidht() * $this->getHeight() / 2);
    }
}

$rect = new Rectangle();
$trio = new Triangle();
echo "Площа прямокутника: ".$rect->area().'<hr>';
echo "Площа трикутника: ".$trio->area();
