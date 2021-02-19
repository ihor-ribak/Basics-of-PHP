<?php

class Dog
{
    /**
     * @var
     */
    private $age;
    /**
     * @var
     */
    private $weight;
    /**
     * @var
     */
    private $color;

    /**
     *
     */
    public function bark()
    {
        echo "ГАВ! ГАВ! <br>";
    }

    public function setValues(int $yrs = 2, int $lbs = 8, string $fur = 'черного ')
    {
        $this->age = $yrs;
        $this->weight = $lbs;
        $this->color = $fur;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

}

$fido = new Dog();
$fido->setValues(3, 15, 'коричневого');

echo 'Шерсть Фидо '.$fido->getColor().' цвета<br>';
echo 'Фидо '.$fido->getAge().' года<br>';
echo 'Фидо весит '.$fido->getWeight().' кг<br>';
$fido->bark();

$pooch = new Dog();
$pooch->setValues(4, 18, 'серого ');
echo "<hr>Дворняжка: ".$pooch->getAge().' года ';
echo $pooch->getWeight().' кг '.$pooch->getColor();
$pooch->bark();

$rover = new Dog();
$rover->setValues();
echo '<hr>Рик: '.$rover->getAge().' года ';
echo $rover->getWeight().' кг '.$rover->getColor();
$rover->bark();