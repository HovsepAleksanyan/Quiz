<?php


class User {
    const FEMALE_YEAR = 52;
    const MALE_YEAR = 60;
    const GENDERS = ['male', 'female'];
    public static $works_days = '23';
    public $name;
    public $age;
    public $gender;
    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->setGender($gender);
    }

    function setGender($gender){
        if(in_array($gender, self::GENDERS))
        return $this->gender = $gender;
        $this->gender = 'infine';
    }
    function getUserInfo(){
        $re = ($this->checkRetired())?'YES':'NO';
        return "Name :".$this->name." Age :"
            .$this->age." Gender :".$this->gender
            .' Retired :'. $re;
    }
    function checkRetired(){
        if($this->gender == 'male'){
            return self::MALE_YEAR <= $this->age;
        }elseif ($this->gender == 'female'){
            return self::FEMALE_YEAR <= $this->age;
        }
        return false;
    }


}

//$user = new User('Poxos', 68, 'male');
//echo $user->getUserInfo();
//
//echo "<hr>";
//$user2 = new User('NINA', 20, 'female');
//echo $user2->name;
//echo $this->getUserInfo($arg);

print_r( User::GENDERS);
echo User::$works_days;
//echo User::getUserInfo();

$x = new User('NINA', 20, 'female');
echo "<hr>";
echo $x instanceof('ADmin');
