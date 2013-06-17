<?php
	include "helper.php";
	$options = array(
    "Estrella" => 1,
    "Lluna" => 2,
    "Font" => 3,
    "Dona" => 4
	);
	$msg = "Mencanta ser el teu sol! M'encanta que t'arrambis quan tens fred :).<br/><br/>
					Això és mereix una pista: El teu regal el podràs trobar en qualsevol moment del dia... ui ui ui, 
					on serà?<br/><br/>
					Tu ets la meva:";

	template($msg, $options, 2);
?>
