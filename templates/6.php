<?php
  include "helper.php";

  $options = array(
    "La vida" => 1,
    "L'aigua" => 2,
    "L'amor" => 3,
    "El carinyo" => 4
  );

  $msg = "Sí, tu per mi ets la lluna plena... em dones llum quan tot
          és fosc i m'ipnotitzes quan et miro.<br/><br/>
          El regal està en un lloc tancat, protegit de la pluja però, no de la calor.<br/><br/>
          A part de la lluna per mi també ets:";

  template($msg, $options, 1);
?>
