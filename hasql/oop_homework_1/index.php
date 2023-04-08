<?php

class Human
{
    const MALE_AGE_RETIRED = 67;
    const FEMALE_AGE_RETIRED = 63;
    const ADULT_AGE = 18;
    const GENDERS = ['male', 'female'];

    public $name;
    public $surname;
    public $age;
    public $nation;
    public $phone;

    function setName($value)
    {
        $this->name = $value;
    }
    function setSurname($value)
    {
        $this->surname = $value;
    }
    function setAge($value)
    {
        $this->age = $value;
    }
    function setGender($value)
    {
        if (in_array($value, self::GENDERS)) {////////
            $this->gender = $value;
        } else {
            $this->gender = 'Infine';
        }
    }
    function setNation($value)
    {
        $this->nation = $value;
    }
    function setPhone($value)
    {
        $this->phone = $value;
    }

    function checkAdult()
    {
        if ($this->age >= self::ADULT_AGE) return 'Adult';

        return 'Minor';
    }

    function checkRetired()
    {
        if ($this->gender == 'male') {
            if ($this->age >= self::MALE_AGE_RETIRED) return 'is Retired';

            return 'is not Retired';
        } elseif ($this->gender == 'female') {
            if ($this->age >= self::FEMALE_AGE_RETIRED) return 'is Retired';

            return 'is not Retired';
        }
    }

    function getHumanInfo()
    {
        $adult = $this->checkAdult();
        $retired = $this->checkRetired();

        return "Name: " . $this->name . "<br>" . "Surname: " . $this->surname . "<br>" .
            "Age: " . $this->age . "<br>" . "Gender: " . $this->gender . "<br>" .
            "Nation: " . $this->nation . "<br>" . "Phone: " . $this->phone . "<br>" .
            $adult . "<br>" . $retired;
    }
}

$hovsep = new Human;
$hovsep->setName('Hovsep');
$hovsep->setSurname('Aleksanyan');
$hovsep->setAge(17);
$hovsep->setGender('male');
$hovsep->setNation('Armenian');
$hovsep->setPhone('098-36-34-85');

echo $hovsep->getHumanInfo();