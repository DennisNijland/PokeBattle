<?php

require 'Pokemon.php';
require 'Attack.php';

$pokemons = [];

$p = new Pokemon('Pickachu','Lightning',60,'Fire',20);
$p->Attacks[] = new Attack('Electric Ring', 50);
$pokemons[] = $p;

//prettyPrint($p);


$c = new Pokemon('Charmeleon','Fire',60,'Lightning',10);
$c->Attacks[] = new Attack('Flare', 30);
$pokemons[] = $c;



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