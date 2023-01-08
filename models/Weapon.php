<?php

abstract class Weapon
{
    private $damage;
    private $multiplier;

    function getDamage()
    {
        return $this->damage;
    }

    function setDamage($newDamage)
    {
        $this->damage = $newDamage;
    }

    function getMultiplier()
    {
        return $this->multiplier;
    }

    function setMultiplier($newMultiplier)
    {
        $this->multiplier = $newMultiplier;
    }

    function __constructor($damage, $multiplier)
    {
        $this->setDamage($damage);
        $this->setMultiplier($multiplier);
    }


    abstract public function Shoot();

}