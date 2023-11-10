<?php

namespace Guirod\UnitTestingPoc\Service;

class Calc
{
    public function add(float $nb1, float $nb2): float
    {
        return $nb1 + $nb2;
    }

    public function substract(float $nb1, float $nb2): float
    {
        return $nb1 - $nb2;
    }
}