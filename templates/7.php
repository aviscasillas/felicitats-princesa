<?php
  include "helper.php";

  $options = array(
    "01/11/2007" => 1,
    "31/12/2007" => 2,
    "01/12/2007" => 3,
    "01/12/2008" => 4
  );

  $msg = "Vida!!! Que faria sense tu? :). <br/><br/>
          En quan al regal, l'has tingut o el tindràs molt i molt a prop
          en algún moment del dia. Encara no saps on es?<br/><br/>
          Ok, una pregunta més: Quan vam iniciar aquesta bonica i intensa relació?";

  template($msg, $options, 3);
?>
