<?php
class base
{
    protected $name;
    public function __construct($n)
    {
        $this->name = $n;
    }

    // this is not use funtion because protected function 
    protected function show()
    {
        echo "Your Name : " . $this->name . "<br>";
    }
}

class derived extends base
{
    public function get()
    {
        echo "Your Name : " . $this->name . "<br>";
    }
}
$test = new derived("Avinash Kumar");

$test->get();
