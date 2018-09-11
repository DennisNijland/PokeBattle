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
		$this->Weakness = [];
		$this->Resistance = [];
		$this->Attacks = [];
	}

	public function recieveDamage($dmg)
	{
		print_r($this->EnergyType);
		print_r($this->Weakness[0]->Name);
		//print_r($this->Resistance);
		die();
		if ( $this->EnergyType == $this->Weakness ){
			echo "energy hetzelfde als weakness";

		}
        $calculatedDamage = $dmg - $this->Resistance;
        if( $calculatedDamage > 0) {
            $this->Health = $this->Health - $calculatedDamage;
        }
    }

	public function __toString() {
        return json_encode($this);
    }

}
class Weakness
{
	public $Name;
	public $Value;

	public function __construct($Name, $Value)
	{
		$this->Name = $Name;
		$this->Value = $Value;
	}

	public function calculateDamage($target)
	{

	}
}