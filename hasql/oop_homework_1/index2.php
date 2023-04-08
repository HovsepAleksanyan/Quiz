<?php
class User
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

    public function __construct($name, $surname, $age, $gender, $nation, $phone)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->setGender($gender);
        $this->nation = $nation;
        $this->phone = $phone;
    }

    function setGender($gender)
    {
        if (in_array($gender, self::GENDERS)) {
            return $this->gender = $gender;
        }

        $this->gender = 'Infine';
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

    function getUserInfo()
    {
        $adult = $this->checkAdult();
        $retired = $this->checkRetired();

        return "Name: " . $this->name . "<br>" . "Surname: " . $this->surname . "<br>" .
            "Age: " . $this->age . "<br>" . "Gender: " . $this->gender . "<br>" .
            "Nation: " . $this->nation . "<br>" . "Phone: " . $this->phone . "<br>" .
            $adult . "<br>" . $retired;
    }
}

$ashot = new User('Anahit', 'Aleksanyan', 72, 'female', 'Armenian', '093-65-86-50');

echo $ashot->getUserInfo();
