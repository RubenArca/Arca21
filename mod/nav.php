<nav class="nav" id="nav">
  <ul id="nav" className="nav">
<?php
  foreach ($nav as $key => $value) {
    if (is_array($value)) {
      $li = '<li';
      if ($active == $value[0]) {
        $li .= ' class="active"';
      }
      $li .= '><a href="' . $urlabsoluta . $url . $value[0] . '.php">' . $value[0]
       . '<i class="fas fa-sort-down" id="viviendas-arrow-down"></i></a>';
      $li .= '<ul>';
      echo $li;
      $indice = $value[0] . "/";
      foreach ($value as $key1 => $value1) {
        if ($key1 != 0){
          if ($value1 == "Primero A" && $web == "Buenavista 7") {
            echo '<li id="list-none"></li>';
          }
          $li = '<li';
          if ($active1 == $value1){
            $li .= ' class="active"';
          }
          $li .= '><a href="' . $urlabsoluta . $url . $indice . $value1 . '.php">' . $value1 . '</a></li>';
          echo $li;
        }
      }
      echo '</ul></li>';
    } else {
      $li = '<li';
      if ($active == $value){
        $li .= ' class="active"';
      }
      $li .= '><a href="' . $urlabsoluta . $url . $value . '.php">' . $value . '</a></li>';
      echo $li;
    }
  }
?><a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </ul>
</nav>
