<?php
  $contador = 0;
  $contenido = '';
  $data = [];
  require($urlabsoluta . $url . "inc/base64obras.php");
  //echo mysqli_fetch_array($imgs)['base64'];
  //echo mysqli_fetch_array($imgs)['base64'];

  for ($i=1; $i <= $result->num_rows; $i++) {
    array_push($data, mysqli_fetch_array($result));
    //$data = mysqli_fetch_array($imgs);
    //echo $data['base64'];
    //echo $data[0]["base64"];
  }
  $data = array_reverse($data);
  foreach ($data as $value) {
    $contador = $contador + 1;
    if (($contador - 1)%4 == 0 || $contador == 1) {
      $contenido .= '<div class="line">';
    }
    if (($contador - 1)%2 == 0 || $contador == 1) {
      $contenido .= '<div class="line-tablet">';
    }
    if ($value["name"] != "vacio") {
      $contenido .= '<div class="per4">';
      $contenido .= '<ul>';
      $contenido .= '<li class="per4-img">';
      $contenido .= '<img src="' . $value["base64"] . '">';
      $contenido .= '</li>';
      $contenido .= '<li class="per4-text">';
      $contenido .= $value["name"];
      $contenido .= '</li>';
      $contenido .= '<li class="per4-text">';
      $contenido .= $value["constructora"];
      $contenido .= '</li>';
      $contenido .= '<li class="per4-text">';
      $contenido .= $value["year"];
      $contenido .= '</li>';
      $contenido .= '</ul>';
      $contenido .= '</div>';
    }
    if ($contador%4 == 0) {
      $contenido .= '</div>';
    }
    if ($contador%2 == 0) {
      $contenido .= '</div>';
    }
  }
  if ($contador%4 != 0) {
    $contenido .= '</div>';
  }
  if ($contador%2 != 0) {
    $contenido .= '</div>';
  }
  echo $contenido;
?>
