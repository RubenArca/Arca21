<footer>
  <div class="footer-izq">
    Arca XXI, S.L.
    <br>
    C/ Polvoranca, nº63, Alcorcón
    <br>
    <a href="mailto:info@aresresidencial.es">info@aresresidencial.es</a>
    <br>
    91 486 07 76
  </div>
  <div class="footer-cent">
    <?php
      $contenido = "";
      foreach ($nav as $value) {
        if(is_array($value)) {
          $contenido .= '<a href="' . $urlabsoluta . $url . $value[0] . '.php">' . $value[0] . '</a><br>';
        } else {
        $contenido .= '<a href="' . $urlabsoluta . $url . $value . '.php">' . $value . '</a><br>';
        }
      }
      echo $contenido;
    ?>
  </div>
  <div class="footer-der">
    <a href=<?php echo '"' . $urlabsoluta . $url . 'Home.php"'; ?> target="_blank"><img id="logo-footer" src=<?php
    $tablename = "images";
    $imgname = "Logo_Arca";
    require($urlabsoluta . $url . "inc/base64.php");
    ?> alt="Logo de Arca XXI"></a>
  </div>
</footer>
