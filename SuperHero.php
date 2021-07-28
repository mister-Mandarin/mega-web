<?php

class SuperHero
{
    private $name;
    private $ability;
    protected $damage;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getАbility()
    {
        return $this->ability;
    }

    public function setАbility($ability)
    {
        $this->ability = $ability;
    }

    public function generateDamage()
    {
        return $this->damage = rand(20, 40); //устанавливаем урон
    }
    public function getDamage()
    {
        return $this->damage;
    }

}