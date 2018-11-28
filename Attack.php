<?php

class Attack
{
	
	public $name;
	public $attackPoints;
	
	function __construct($name, $attackPoints)
	{
		$this->name = $name;
		$this->attackPoints = $attackPoints;
	}

	public function dealDamage($attacker, $target)
    {
        if ($target == null) {
            die('Cannot deal damage to opponent; target is null');
        }

        $target->recieveDamage($attacker, $this->attackPoints);
    }

    public function __toString()
    {
        return json_encode($this);
    }
}