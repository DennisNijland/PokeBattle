<?php

require 'Pokemon.php';
require 'Attack.php';

$pokemons = [];

$p = new Pokemon('Pickachu','Lightning',60,'Fire',20);
//$p->Weakness[] = new Weakness('Fire', 1.5);
$p->Attacks[] = new Attack('Electric Ring', 50, 'Lightning');
$pokemons[] = $p;

//prettyPrint($p);


$c = new Pokemon('Charmeleon','Fire',60,'Water',10);
//$c->Weakness[] = new Weakness('Water', 2);
$c->Attacks[] = new Attack('Flare', 30, 'Fire');
$pokemons[] = $c;

//prettyPrint($c);

foreach($pokemons as $pokemon){
	prettyPrint($pokemon->Name . " HP " . $pokemon->Health . "/" . $pokemon->HitPoints);	
}

prettyPrint($p->Name . " attacked " . $c->Name . " with " . $p->Attacks[0]->Name);

$p->Attacks[0]->dealDamage($c);

foreach($pokemons as $pokemon){
	prettyPrint($pokemon->Name . " HP " . $pokemon->Health . "/" . $pokemon->HitPoints);	
}

$c->Attacks[0]->dealDamage($p);

prettyPrint($c->Name . " attacked " . $p->Name . " with " . $c->Attacks[0]->Name);

foreach($pokemons as $pokemon){
	prettyPrint($pokemon->Name . " HP " . $pokemon->Health . "/" . $pokemon->HitPoints);	
}


function prettyPrint($var)
	{
	    echo '<pre>';
	    print_r($var);
	    echo '</pre>';
	}