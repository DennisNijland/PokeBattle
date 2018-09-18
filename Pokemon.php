<?php

class Pokemon
{

	public $Name;		
	public $EnergyType;
	public $HitPoints;
	public $Health;
	public $Attacks;
	public $Weakness;
	public $Resistance;

	public function __construct($Name, $EnergyType, $HitPoints, $Weakness, $Resistance)
	{
		$this->Name = $Name;
		$this->EnergyType = $EnergyType;
		$this->HitPoints = $HitPoints;
		$this->Health = $this->HitPoints;
		$this->Weakness = $Weakness;
		$this->Resistance = $Resistance;
		$this->Attacks = [];
	}

	public function recieveDamage($dmg, $EnergyType)
	{
		if( $this->Weakness == $EnergyType ){
			$Damage = $dmg * 2;
			$this->Health = $this->Health - $Damage;
		}else{
        	$calculatedDamage = $dmg - $this->Resistance;
        	if( $calculatedDamage > 0) {
            $this->Health = $this->Health - $calculatedDamage;
        	}
        }
    }

	public function __toString() {
        return json_encode($this);
    }

}