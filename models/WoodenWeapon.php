<?php
require_once('Weapon.php');

class WoodenWeapon extends Weapon
{

    public function __construct($multiplier){
        $this->setDamage(2.0);
        $this->setMultiplier($multiplier);
    }

    public function getWeaponType()
    {
        return "Wooden weapon";
    }

    public function shoot()
    {
        echo "Wooden weapon shoots and damages " . ($this->getDamage() * $this->getMultiplier()) . " points";
    }
}