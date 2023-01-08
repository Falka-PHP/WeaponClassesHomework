<?php
require_once('Weapon.php');

class IronWeapon extends Weapon
{

    public function __construct($multiplier){
        $this->setDamage(7.0);
        $this->setMultiplier($multiplier);
    }

    public function getWeaponType()
    {
        return "Iron weapon";
    }

    public function shoot()
    {
        echo "Iron weapon shoots and damages " . ($this->getDamage() * $this->getMultiplier()) . " points";
    }
}