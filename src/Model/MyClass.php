<?php

namespace Guirod\UnitTestingPoc\Model;

class MyClass
{
    protected int $id;
    protected string $name;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setId(int $id): MyClass
    {
        $this->id = $id;

        return $this;
    }

    public function setName(string $name): MyClass
    {
        $this->name = $name;

        return $this;
    }

    public function print(): void
    {
        echo "Votre instance de MyClass a pour id : " . $this->id . " et pour nom : " . $this->name . "<br/>";
    }
}