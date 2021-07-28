<?php

class SuperPuperHero extends SuperHero

{
    private $SuperAbility;

    public function getSuperAbility()
    {
        return $this->SuperAbility;
    }

    public function setSuperAbility($SuperAbility)
    {
        $this->SuperAbility = $SuperAbility;
    }

    public function superDamage()
    {
        return $this->damage = parent::generateDamage() +5;
        //перегружаем метод родителя чтобы не потерять его
        // и изменяем его значение
    }
}