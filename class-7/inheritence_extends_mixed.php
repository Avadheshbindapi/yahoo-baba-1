<?php
class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n,$a,$s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info(){
        echo "<h3>Employee Profile</h3>  <br>";
        echo "Employee Name: " .  $this->name . "<br>";
        echo "Employee age: " .  $this->age . "<br>";
        echo "Employee salary: " .  $this->salary . "<br>";
    }
}

class manager extends employee{
    public $ta;
    public $phon;
    public $totalsalary;

    function info(){
        $this->totalsalary =  $this->salary +  $this->ta +  $this->phon;
        echo "<h3>Employee Manager</h3>  <br>";
        echo "Employee Name: " .  $this->name . "<br>";
        echo "Employee age: " .  $this->age . "<br>";
        echo "Employee salary: " .  $this->totalsalary . "<br>";
    }
}
$e1 = new employee("Ram", 20, 5000);
$e1->info();
$e2 = new manager("Shyam", 24, 10000);
$e2->info();
