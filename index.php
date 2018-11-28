<?php

require 'Pokemon.php';
require 'Attack.php';
require 'Weakness.php';
require 'EnergyType.php';
require 'Resistance.php';

$p = new Pokemon('Pickachu','60');
$p->weakness = new Weakness('Fire', 1.5);
$p->resistance = new Resistance('Fire', 1.5);
$p->attacks[] = new Attack('Electric Ring', 50);
$p->attacks[] = new Attack('Pika Punch', 20);
$p->energyType = new EnergyType('Lightning');

$c = new Pokemon('Charmeleon',60);
$c->weakness = new Weakness('Water', 2);
$c->resistance = new Resistance('Lightning', 10);
$c->attacks[] = new Attack('Flare', 30);
$c->attacks[] = new Attack('Head butt', 10);
$c->energyType = new EnergyType('Fire');

$p->attacks[0]->dealDamage($p, $c);
$c->attacks[0]->dealDamage($c, $p);