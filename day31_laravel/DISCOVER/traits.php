<?php

class Animal
{
    protected $hungry = true;

    public function eat()
    {
        $this->hungry = false;
    }
    public function showHungry()
    {
        var_dump($this->hungry);
    }
}

trait Domesticated
{
    public function beFed()
    {
        $this->hungry = false;
    }
}

class Dog extends Animal
{
    use Domesticated;
}

class Sheep extends Animal
{
    use Domesticated;
}

class Wolf extends Animal
{
}

$dog = new Dog;
$dog->beFed();

$sheep = new Sheep;
$sheep->beFed();

$dog->showHungry();

$wolf = new Wolf;
$wolf->beFed();
