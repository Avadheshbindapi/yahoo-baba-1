<?php
class base
{
    public $name;
    public function __construct($n)
    {
        $this->name = $n;
    }

    public function show()
    {
        echo "Your Name : " . $this->name . "<br>";
    }
}
$test = new base("Avinash Kumar");

$test->show();
