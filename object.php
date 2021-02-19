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

    /**
     * @param int $yrs
     */
    public function setAge(int $yrs)
    {
        $this->age = $yrs;
    }

    /**
     * @param int $lbs
     */
    public function setWeight(int $lbs)
    {
        $this->weight = $lbs;
    }

    /**
     * @param string $fur
     */
    public function setColor(string $fur)
    {
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
$fido->setAge(3);
$fido->setWeight(15);
$fido->setColor('коричневого');

echo 'Шерсть Фидо '.$fido->getColor().' цвета<br>';
echo 'Фидо '.$fido->getAge().' года<br>';
echo 'Фидо весит '.$fido->getWeight().' кг<br>';
$fido->bark();
