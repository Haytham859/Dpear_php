<?php

class user{
private $name;
private $age;
private $salary;

public function __construct($name,$age,$salary)
{
    $this->name=$name;
    $this->age=$age;
    $this->salary=$salary;
}
public function getname()
{

    return $this->name;
}
public function getage()
{

    return $this->age;
}
public function getsalary()
{

    return $this->salary;
}

}





?>