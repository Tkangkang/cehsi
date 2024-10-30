<?php
require 'vendor/autoload.php';
use MyVendor\MyPackage\MyClass;
use PHPUnit\Framework\TestCase;

class test extends TestCase
{
    public function test1(){
        $myClass = new MyClass();
        $this->assertEquals("Hello, John!", $myClass->sayHello());
    }
}