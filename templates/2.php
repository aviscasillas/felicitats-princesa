<?php
	include "helper.php";
	$options = array(
    "Sí" => 1,
    "No" => 2
	);
	$msg = "Genial!! Mencanta que siguis feliç :)<br/><br/>
  				Però, encara vull que siguis més i més feliç, i com que a pesar de les meves 
  				cagades segueixes contenta, et guiaré pel camí 
  				del teu segon regal...<br/><br/>
  				Vols saber on és?";

	template($msg, $options, 1);
?>
