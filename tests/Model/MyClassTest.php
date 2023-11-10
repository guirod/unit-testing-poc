<?php

namespace Guirod\UnitTestingPoc\Model;

use Guirod\UnitTestingPoc\Service\Calc;
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

    /**
     * Unit test avec l'utilisation de bouchons (mock, stub)
     *
     * @return void
     */
    public function testCalcSomething()
    {
        $nb1 = 50;
        $nb2 = 2;

        $calcMock = $this->createMock(Calc::class);
        $calcMock
            ->expects($this->once())
            ->method('add')
            ->with($this->equalTo($nb1), $this->equalTo($nb2))
            ->willReturn((float)($nb1+$nb2));

        $returnValue = $this->obj->calcSomething($nb1,$nb2,$calcMock);

        $this->assertEquals((float)($nb1+$nb2), $returnValue);
    }
}