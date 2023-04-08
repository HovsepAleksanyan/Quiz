<?php

class A
{
    protected $name;

    public function getName()
    {
        $this->changeName();
        return $this->name;
    }

    public function changeName(): void //////////
    {
        $this->name .= "Changed!";
    }

    public function setName($name): void /////////
    {
        $this->name = $name;
    }
}

class B extends A
{
    protected function getClassName()
    {
        $this->name = 'XXX';
    }
}

class C extends B
{
    public function test(){
        $this-> getClassName();
    }
}

$c = new C;
$c->setName('class A');
$c->test();
echo $c->getName();
