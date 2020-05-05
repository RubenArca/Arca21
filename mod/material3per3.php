<?php
  $materiales = [];
  $contenido = "";
  $contador = 0;
  $file = "";
    foreach ($arraymateriales as $value) {
      array_push($materiales, $files[$value]);
    }
    foreach ($materiales as $value) {
      $contador = $contador + 1;
      if (($contador - 1)%3 == 0 || $contador == 1) {
        $contenido .= '<div class="line">';
      }
      $contenido .= '<div class="three">';
      $contenido .= '<ul>';
      $contenido .= '<li>';
      $contenido .= '<img src="';
      $imgname = $value['img'];
      require($urlabsoluta . $url . "inc/base64bis.php");
      $contenido .= $img;
      $contenido .= '" alt="' . $value['title'] . '">';
      $contenido .= '</li>';
      $contenido .= '<li class="three-title">' . $value['title'] . '</li>';
      $contenido .= '<li class="three-text">' . $value['text'] . '</li>';
      if (array_key_exists('files', $value)) {
        if ($file == "") {
          $file .= '<div class="line responsive-none">';
        }
        $file .= '<div class="tabiqueria-file">';
        foreach ($value['files'] as $value1) {
          $file .= '<a  href="' . $value1['route'] . '" target="_blank">';
          $file .= '<button type="button">' . $value1['text'] . '</button>';
          $file .= '</a>';
        }
        // Creamos los botones solo para cuando es responsive
        $contenido .= '<div class="line responsive">';
        $contenido .= '<div class="tabiqueria-file">';
        foreach ($value['files'] as $value1) {
          $contenido .= '<a  href="' . $value1['route'] . '" target="_blank">';
          $contenido .= '<button type="button">' . $value1['text'] . '</button>';
          $contenido .= '</a>';
        }
        $contenido .= '</div>';
        $contenido .= '</div>';
        
        $file .= '</div>';
      }
      $contenido .= '</ul></div>';
      if ($contador%3 == 0) {
        $contenido .= '</div>';
        if ($file != "") {
          $contenido .= $file . '</div>';
        }
        $file = "";
      }
    }
    if ($contador%3 != 0) {
      $contenido .= '</div>';
      if ($file != "") {
        $contenido .= $file . '</div>';
      }
      $file = "";
    }
    echo $contenido;
?>
