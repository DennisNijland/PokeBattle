<?php
echo "Before require";
require 'Pokemon.php';
echo "After require";

$pickachu = new Pokemon('Pickachu','60','60','20');

var_dump($pickachu);
echo "Hallo";