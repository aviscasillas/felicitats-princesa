<?php
  include "helper.php";

  $options = array(
    "A casa" => 1,
    "Al local de castells" => 2,
    "Al cotxe" => 3,
    "A la moto" => 4
  );

  $msg = "T'he dit mai que t'estimo amb bojeria?<br/>
          Se que els dies són durs i la rutina sovint s'ens menja però, quan
          hi penso recordo que et necessito més que l'aire que respiro.<br/><br/>
          Ara que dic això, veig que no et vull fer patir més, així que et donaré
          una pista definitiva:<br/>
          El regal està sota un lloc en el que a mi m'agrada molt estar. Ets
          tnant bona amb mi, que en els moments més durs sempre m'el cedeixes...
          <br/><br/>
          On és el regal?";

  template($msg, $options, 3);
?>
