<?php


class Attack
{
	public $Name;
	public $AttackPoints;
	public $EnergyType;
	
	function __construct($Name, $AttackPoints, $EnergyType)
	{
		$this->Name = $Name;
		$this->AttackPoints = $AttackPoints;
		$this->EnergyType = $EnergyType;
	}

	public function dealDamage($target)
	{
		
        if ($target == null) {
            die('Cannot deal damage to opponent; target is null');
        }
        $target->recieveDamage($this->AttackPoints, $this->EnergyType);

    }

    public function __toString()
    {
        return json_encode($this);
    }
}