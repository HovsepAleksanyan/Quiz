<?php
// public private protected (static)

//private property
class Person {
    public $name;
    public $surname;
    private $nation = 'British';

    public function getInfo(){
        return $this->name . "<br>" . $this->surname . "<br>" . $this->nation;
    }
}

$person1 = new Person;
$person1->name = 'John';
$person1->surname = 'Brown';
echo $person1->getInfo();

echo "<hr>";

//private method
class Car{
    public $model;

    public function setModel($model){
        $this->model = $model;
    }

    public function getModel(){
        // $this->model = deleteModel();
        return $this->model;
    }

    private function deleteModel(){
        $this->model = 'Car Model Deleted!';
    }
}

$car1 = new Car;
$car1->setModel('AMG');
$car1->getModel();

echo "<hr>";

//protected
class X {
    public $name;
    protected $pin = '1125';

    public function getPin(){
        return $this->pin;
    }
}
$xx = new X;
echo $xx->getPin();

echo "<br>";

class Z extends X {
    public $surname;
}
$zz = new Z;
echo $zz->getPin();