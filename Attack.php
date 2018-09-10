<?php


class Attack
{
	public $Name;
	public $AttackPoints;
	
	function __construct($Name, $AttackPoints)
	{
		$this->Name = $Name;
		$this->AttackPoints = $AttackPoints;
	}

	public function dealDamage($target)
	{
		//die($target);
        if ($target == null) {
            die('Cannot deal damage to opponent; target is null');
        }
        $target->recieveDamage($this->AttackPoints);

    }

    public function __toString()
    {
        return json_encode($this);
    }
}