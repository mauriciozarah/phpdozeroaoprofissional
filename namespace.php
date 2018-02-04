<?php

require_once "pasta1_namespace/Sobre.php";
require_once "pasta2_namespace/Sobre.php";

$sobre2 = new \pasta2_namespace\v2\Sobre();
echo $sobre2->versao();

echo "<br><br><br>";

$sobre1 = new \pasta1_namespace\v1\Sobre();
echo $sobre1->versao();
