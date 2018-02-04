<?php


if(isset($_POST['val']) && !empty($_POST['val'])):

	echo json_encode(array("nome" => "Mauricio", "sobrenome" => "Zaha"));

endif;