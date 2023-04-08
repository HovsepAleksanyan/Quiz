<?php
class A
{
    public $name;

    protected $pin = '1122';

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getData()
    {
        return $this->name . '<br>' . $this->pin;;
    }

    protected function test()
    {
        
    }
}

$x1 = new A;
$x1->setName('Hovsep');
echo $x1->getData();
