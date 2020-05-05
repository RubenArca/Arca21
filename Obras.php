<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- EXTERNOS -->
  <!-- link de los css externos -->
  <link rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
  crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- link de los javascript externos-->
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script src="https://kit.fontawesome.com/8142d0bd75.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.js"></script>

    <!-- SE TRAEN LAS VARIABLES -->
    <?php
    // Traer las variables
    $url = ""; // para situarse en el general de su página
    include('./inc/vars.php'); // Variables generales
    $active = "Obras";
  ?>
  <!-- ESTILOS PROPIOS GENERALES-->
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/cookies.css"';?>>
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/navstyle.css"';?>>
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/footerstyle.css"';?>>
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/style.css"';?>>
  <!-- ESTILOS PROPIOS PARTCULARES DE LA PÁGINA-->
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/homestyle.css"';?>>
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/carruselautostyle.css"';?>>
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/4per4.css"';?>>

  <!-- ICONO DE LA PESTAÑA DEL NAVEGADOR-->
  <link rel="icon" href=<?php
  $tablename = "images";
  $imgname = "Logo_Arca_A";
  require($urlabsoluta . $url . "inc/base64.php");
  ?>>
  <!-- JS PROPIO-->
  <script src=<?php echo '"' . $urlabsoluta . 'js/script.js"';?> type="text/javascript"></script>
  <title><?php echo $web;?></title>
</head>
<body>
  <header class="header">
    <div class="logo-nav-container">
      <?php
        // Se trae el logo
        require($urlabsoluta . $url . "mod/logotitulo.php");
        // Se trae el navegador
        require($urlabsoluta . $url . "mod/nav.php");
      ?>
    </div>
  </header>
  <main class="obras">
    <div class="container">
      <?php
        $tablename = "obras";
        require_once($urlabsoluta . $url . "mod/4per4.php");
       ?>
      <div class="line">
        <div class="text-note">
          <b>NOTA:</b> Los planos e imágenes contenidos en esta web no son definitivos, teniendo únicamente carácter indicativo conforme al Anteproyecto
          de la Dirección Facultativa. Las imágenes, diseño de interiores, mobiliario y vegetación, no son vinculantes a nivel contractual y no
          forman parte de las viviendas ni del proyecto, son ideas de interiorismo y diseño. La Dirección Facultativa se reserva el derecho a
          realizar modificaciones, atendiendo a las necesidades de cualquier índole derivadas de la puesta en obra y a los requerimientos técnicos,
          urbanísticos y/o administrativos para la consecución de las autorizaciones municipales, de empresas suministradoras, así como de cualquier
          otro organismo oficial, necesarias tanto para el inicio de las obras como para la posterior adjudicación de las viviendas.
          Toda la información adicional relativa al rd 515/89 sobre protección del consumidor se encuentra a su disposición del mismo en las oficinas
          de la empresa promotora (c/Jorge Juan 91, 1º izq., Madrid, 28009).
        </div>
      </div>
    </div>
  </main>
  <?php
    //mostramos el footer
    require_once($urlabsoluta . $url . "mod/footer.php");
  ?>
</body>
  <!-- JS de cookies -->
  <script src=<?php echo '"' . $urlabsoluta . $url . 'js/cookies.js"';?> type="text/javascript"></script>
  <!-- COOKIES -->
  <?php require ($urlabsoluta . $url . "mod/cookies.php");?>
</html>
