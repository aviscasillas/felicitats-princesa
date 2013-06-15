<?php
	include "helper.php";
	$options = array(
    "Sí" => 1,
    "No" => 2
	);
	$msg = "Perfecte!! Mencanta que siguis feliç :)<br/>
  				Però, encara vull que siguis més feliç, i per aquest motiu t'he preparat un altre regal.<br/><br/>
  				Vols saber on és?";

	template($msg, $options, 1);
?>
