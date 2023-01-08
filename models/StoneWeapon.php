<?php
require_once('Weapon.php');

class StoneWeapon extends Weapon
{

    public function __construct($multiplier){
        $this->setDamage(5.0);
        $this->setMultiplier($multiplier);
    }

    public function getWeaponType()
    {
        return "Stone weapon";
    }

    public function shoot()
    {
        echo "Stone weapon shoots and damages " . ($this->getDamage() * $this->getMultiplier()) . " points";
    }
}