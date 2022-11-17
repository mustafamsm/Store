<?php
namespace B;
class Person
{
    const MALE = 'm';
    const FEMALE = 'f';
    public  $name;
    protected $gender;
    private $age;

    public static $country;

    public function __construct()
    {
    }
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }
    public function setGender($gender)
    {

        $this->gender = $gender;
        return $this;
    }
    public static function setCountry($country)
    {
        self::$country=$country;
    }
}
