<?php

function my_autoloader($class)
{
    require "classes/" . $class . ".php";
}

spl_autoload_register('my_autoloader');

$test = new Second();

$test1 = new First();
