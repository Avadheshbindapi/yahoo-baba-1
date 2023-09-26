<?php

class abc{
    private $conn;
    public function __construct()
    {
      $this->conn = mysqli_connect();
    }

    public function hello(){
        echo "Hello Everyone <br>";
    }

    public function insert(){
        echo "Hello Everyone <br>";
    }

    public function __destruct()
    {
       mysqli_close($this->conn);
    }
}

$test = new abc();

$test->hello();
$test->hello();
$test->hello();