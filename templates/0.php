<?php
	include "helper.php";
	$options = [
    "Sí" => 1,
    "No" => 2
	];
	template("A hores d'ara ja deus tenir les teves CROGS color violeta...<br/><br/> Estas contenta?", $options, 1);
?>
<p>
  A hores d'ara ja deus tenir les teves CROGS color violeta...<br/><br/>
  Estas contenta?
</p>

<a name="response" value="1">Sí</a>
<a name="response" value="0">No</a>

<input type="hidden" name="ok_val" value="1" />
