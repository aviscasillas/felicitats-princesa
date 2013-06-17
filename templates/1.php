<?php
	include "helper.php";

	$msg = "A hores d'ara ja deus tenir les teves CROGS color \"violeta\"... mmmmm wenu, 
					això és el que diuen els de la casa CROGS, a mi em semblen més roses que \"violetes\" XD<br/><br/> 
					En fi, a hores d'ara també deus haver vist que et van petites (quin desastre de novio que tens), 
					de debò em sap greu :(, això no forma part del regal però, veient el color casi que 
					millor, així canviem la talla i el color al mateix temps ;P.<br/><br/>
					A pesar de tot, estas contenta?";

	$options = array(
    "Sí" => 1,
    "No" => 2
	);
	
	template($msg, $options, 1);
?>
