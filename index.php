<?php
require "vendor/autoload.php";

use Guirod\UnitTestingPoc\Model\MyClass;
use Guirod\UnitTestingPoc\Model\MyClass2;

$myClass = new MyClass();
$myClass->setName("test name");
$myClass->setId(3);
$myClass->print();

$myClass2 = new MyClass2();
$myClass2->setId(5)->setName("name class 2");
$myClass2->print();