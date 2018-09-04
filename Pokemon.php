<?php

class Pokemon{

	public $Name;		
	public $EnergyType;
	public $HitPoints;
	public $Health;
	public $Attacks;
	public $Weakness;
	public $Resistance;

	public function_construct($Name, $HitPoints, $Resistance){
		$this->Name = $Name;
		$this->HitPoints = $HitPoints;
		$this->Health = $this->HitPoints;
		$this->Resistance = $Resistance;
		$this->Attacks = [];
	}

	public function __toString() {
        return json_encode($this);
    }

}