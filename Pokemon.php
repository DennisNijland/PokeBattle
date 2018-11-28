<?php

class Pokemon
{

	public $name;
	public $hitPoints;
	public $health;

	public function __construct($name, $hitPoints)
	{
		$this->name = $name;
		$this->hitPoints = $hitPoints;
		$this->health = $this->hitPoints;
	}

	public function recieveDamage($attacker, $attackPoints)
    {
        if($this->health > 0) {
           Pokemon::prettyPrint($this->name . " HP " . $this->health . "/" . $this->hitPoints);
            if($this->weakness->name == $attacker->energyType->name) {
                $totalDamage = $attackPoints * $this->weakness->multiplier;
                $this->health = $this->health - $totalDamage;
                Pokemon::prettyPrint($this->name . " HP " . $this->health . "/" . $this->hitPoints);
            } elseif ($this->resistance->name == $attacker->energyType->name) {
                $totalDamage = $attackPoints - $this->resistance->value;
                if ($totalDamage > 0) {
                    $this->health = $this->health - $totalDamage;
                    Pokemon::prettyPrint($this->name . " HP " . $this->health . "/" . $this->hitPoints);
                }
            } else {
                $totalDamage = $attackPoints;
                $this->health = $this->health - $totalDamage;
                Pokemon::prettyPrint($this->name . " HP " . $this->health . "/" . $this->hitPoints);
            }
        }
    }

    private static function prettyPrint($var)
	{
	    echo '<pre>';
	    print_r($var);
	    echo '</pre>';
	}
	public function __toString() {
        return json_encode($this);
    }
}