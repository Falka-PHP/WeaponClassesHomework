<?php

abstract class Weapon
{
    private $damage;
    private $multiplier;

    public function getDamage()
    {
        return $this->damage;
    }

    public function setDamage($newDamage)
    {
        $this->damage = $newDamage;
    }

    public function getMultiplier()
    {
        return $this->multiplier;
    }

    public function setMultiplier($newMultiplier)
    {
        $this->multiplier = $newMultiplier;
    }



    abstract public function getWeaponType();
    abstract public function shoot();

}