<?php
class employee{
    public $name;
    public $age;
    public $salary;
    
    function __construct(){
        echo "Employee constructor";
    }

    function info(){
        echo "<h3>Employee Profile</he>  <br>";
        echo "Employee Name: " .  $this->name . "<br>";
        echo "Employee age: " .  $this->age . "<br>";
        echo "Employee salary: " .  $this->salary . "<br>";
    }
}

class manager extends employee{
    function __construct(){
        echo "Manager constructor";
    }
}
$e1 = new employee();
echo "<br>";
$e1 = new manager();