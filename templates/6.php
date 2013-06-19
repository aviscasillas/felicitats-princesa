<?php
  include "helper.php";

  $options = array(
    "L'aigua" => 1,
    "L'amor" => 2,
    "El carinyo" => 3,
    "La vida" => 4
  );

  $msg = "Sí, tu per mi ets la lluna plena... em dones llum quan tot
          és fosc i m'ipnotitzes quan et miro.<br/><br/>
          El regal està en un lloc tancat, protegit de la pluja però, no de la calor.<br/><br/>
          A part de la lluna per mi també ets:";

  template($msg, $options, 4);
?>
