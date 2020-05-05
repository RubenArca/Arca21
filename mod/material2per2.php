<div class="line">
  <div class="half">
    <img src=<?php
    $tablename = "images";
    $imgname = $files[$material]['img'];
    require($urlabsoluta . $url . "inc/base64.php");
    ?>>
  </div>
  <div class="half">
    <ul>
      <li class="material-title">
        <?php
          echo $files[$material]['title'];
         ?>
      </li>
      <li class="material-text">
        <?php
          echo $files[$material]['text'];
         ?>
      </li>
      <?php
      $contenido = "";
      foreach ($files[$material]['files'] as $value) {
        $contenido .= '<li class="button">';
        $contenido .= '<a  href="./Fichas/' . $value['route'] . '" target="_blank">';
        $contenido .= '<button type="button">' . $value['text'] . '</button>';
        $contenido .= '</a></li>';
      }
      echo $contenido;
       ?>
    <?php

     ?>
  </div>
</div>
