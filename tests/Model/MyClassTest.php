<?php

namespace Guirod\UnitTestingPoc\Model;

use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    protected $obj = null;

    protected function setUp(): void
    {
        $this->obj = new MyClass();
    }

    public function testSetName()
    {
        $this->obj->setName("TEST");
        $this->assertEquals("TEST", $this->obj->getName());
    }

    public function testSetId()
    {
        $this->obj->setId(42);
        $this->assertEquals(42, $this->obj->getId());
    }

    // Test d'un output ou echo
    public function testPrint()
    {
        $expected = "Votre instance de MyClass a pour id : " . 33 . " et pour nom : un_nom<br/>";
        $this->obj->setId(33);
        $this->obj->setName('un_nom');
        $this->expectOutputString($expected);
        $this->obj->print();
    }

    public function testObjNotInitialized()
    {
        $this->expectException(\Error::class);
        $this->expectExceptionMessage('Typed property Guirod\UnitTestingPoc\Model\MyClass::$id must not be accessed before initialization');
        $this->obj->print();
    }
}