<?php

namespace Guirod\UnitTestingPoc\Service;

use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase
{
    protected ?Calc $calc = null;

    protected function setUp(): void
    {
        $this->calc = new Calc();
    }


    public static function providerAdd():array
    {
        return [
            [0,0,0],
            [12,10,22],
            [-5,5,0],
            [-53,-11,-64]
        ];
    }

    /**
     * @dataProvider providerAdd
     * @return void
     */
    function testAdd($nb1,$nb2,$result)
    {
        $this->assertEquals($result, $this->calc->add($nb1,$nb2));
    }
}