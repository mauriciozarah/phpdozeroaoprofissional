<?php

require "Sobre1_namespace.php";
require "Sobre2_namespace.php";

$sobre = new \aplicacao\v1\Sobre();
echo $sobre->getVersao() . "<br><br>";

$sobre = new \aplicacao\v2\Sobre();
echo $sobre->getVersao();