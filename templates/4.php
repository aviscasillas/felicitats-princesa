<?php
	include "helper.php";
	$options = array(
    "Estrella" => 1,
    "Lluna" => 2,
    "Font" => 3,
    "Dona" => 4
	);
	$msg = "Mencanta ser el teu Sol! M'encanta que vinguis a mi quan tens fred :).<br/><br/>
					Això es mereix una pista: El teu regal el podràs trobar en qualsevol moment del dia... ui ui ui, 
					on serà?<br/><br/>
					Tu ets la meva:";

	template($msg, $options, 2);
?>
