<?php
  include "helper.php";

  $msg = "Doncs ja veus! Aquest any he decidit abandonar les fotos, el paper, les cartulines y
          el cartró pluma... en temps frikis, regals frikis!!! XD<br/><br/>
          Has de saber que aquesta sorpresa consisteix en anar
          passant pantalles. Has de respondre les preguntes que et faig,
          i si arribes al final tindràs premi :).<br/><br/>
          Cada cop que t'equivoquis tornaràs a aquesta pantalla,
          així que estigues atenta! ;P <br/><br/>
          Tingues present que l'aplicació no guarda res, si refresques la web
          començaràs desde 0. <br/><br/>
          FELICITATS PRINCESA!!!!";

  $options = array(
    "Començar" => 1
  );

  template($msg, $options, 1);
?>
