<?php
class User
{
    const FEMALE_YEAR = 52;
    const MALE_YEAR = 60;

    const GENDERS = ['male', 'female'];

    public $name;
    public $age;
    public $gender;


    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function setAge($age)
    {
        $this->age = $age;
    }

    function setGender($gender)
    {
        if (in_array($gender, self::GENDERS))
            return $this->gender = $gender;

        $this->gender = 'infine';
    }

    function getUserInfo()
    {
        $re = ($this->checkRetired()) ? 'YES' : 'NO';
        return "Name: " . $this->name . "Age: " . $this->age . "Gender: " . $this->gender . 'Retired: '. $re;
    }

    function checkRetired()
    {
        if ($this->gender == 'male') {
            if (self::MALE_YEAR >= $this->age) {
                return true;
            }
        } elseif ($this->gender == 'male') {
            return self::MALE_YEAR >= $this->age;
        }

        return false;
    }
}


$user = new User;
$user->setName('Poxos');
$user->setAge(30);
$user->setGender('male');
// echo $user->checkRetired();

echo $user->getUserInfo();
