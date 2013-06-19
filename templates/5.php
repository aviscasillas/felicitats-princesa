<?php
  include "helper.php";

  $options = array(
    "La vida" => 1,
    "L'aigua" => 2,
    "L'amor" => 3,
    "El carinyo" => 4
  );

  $msg = "Si Cèlia, sí... tu per mi ets la lluna plena, que m'ilumina quan tot
          és fosc i m'ipnotitza quan la miro...<br/><br/>
          El regal esta en un lloc tancat, protegit de la pluja però, no de la calor.<br/><br/>
          A part de la lluna per mi també ets:";

  template($msg, $options, 2);
?>
