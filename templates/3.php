<?php
  include "helper.php";

  $options = array(
    "Mar" => 1,
    "Amor" => 2,
    "Sol" => 3,
    "Vida" => 4
  );

  $msg = "Saps que t'adoro?<br/><br/>
          Sí, ho saps... però, també saps que m'encanta jugar :). No seria tant divertit
          si et digués directament on és el regal.<br/><br/>
          Començem! Jo soc el teu:";

  template($msg, $options, 3);
?>
