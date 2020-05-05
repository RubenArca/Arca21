<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
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
    $active = "Tabiquería Interior";
  ?>
  <!-- ESTILOS PROPIOS GENERALES-->
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/cookies.css"';?>>
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/navstyle.css"';?>>
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/footerstyle.css"';?>>
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/style.css"';?>>
  <!-- ESTILOS PROPIOS PARTCULARES DE LA PÁGINA-->
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/tabiqueria.css"';?>>

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
  <main class="tabiqueria">
    <div class="container">
      <div class="line">
        <h1>Tabiquería interior de gran formato</h1>
      </div>
      <div class="line">
        <div class="text-title">
          <p><b>Tabiceram ladrillo de Gran Formato</b> ofrece una serie de ventajas respecto de otros productos cerámicos tradicionales y aplicaciones no cerámicas con productos
          de alta calidad.</p>
          <p><b>Obra de tabiquería seca</b>: La sencilla y limpia colocación a base de pasta de agarre de yeso, lo que disminuye considerablemente la entrada de humedad en la
          obra.</p>
          <p><b>Facilidad de colocación</b>: Las piezas, al ser machihembradas, reducen los tiempos de colocación y aumentan la producción en obra de los trabajadores.</p>
          <p><b>Planeidad</b>: Debido a las dimensiones del ladrillo Gran Formato, el remate de las paredes se realiza con menores cantidades de yeso, yeso laminado o incluso
          se puede realizar un alicatado directo.</p>
          <p><b>Corte fácil</b>: Los cortes se realizan con cizalla, lo que ocasiona un corte limpio, mayor rendimiento de material y reducción de escombros.</p>
          <p><b>Reducción de rozas</b>: Se pueden aprovechar los alvéolos de las piezas para llevar las instalaciones.</p>
          <p><b>Agilidad de materiales</b>: Todo el suministro de materiales corre a cargo de Arca XXI, por lo que la empresa constructora no precisa de realizar los pedidos y de
          organizar los materiales.</p>
          <p><b>Reducción de grúa</b>: Debido a que todo los materiales vienen paletizados, tanto ladrillo gran formato como yeso y pegamento, no existe transito de bañeras; por lo que
          el uso de grúa se reduce, dejándola disponible para otros tajos.</p>
        </div>
      </div>
      <?php
       // llamamos al material. Hay que darle el nombre del materiales
       $material = "Gran Formato";
       require($urlabsoluta . $url . "mod/material2per2.php");
       ?>
      <div class="line">
        <h2>Materiales usados en la tabiquería de Gran Formato</h2>
      </div>
      <?php
       // llamamos a materiales. Hay que darle el array del materiales
       $arraymateriales = [
         "Danofon",
         "Tabicol",
         "Longips",
         "Lana de roca",
         "Cypsapor Acoustic 10",
       ];
       require($urlabsoluta . $url . "mod/material3per3.php");
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
