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
    $active = "Fachadas";
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
        <h1>Fachadas de ladrillo megatosco Murocer Acústico</h1>
      </div>
      <div class="line">
        <div class="text-title">
          <p><b>Obra de tabiquería seca</b>: La sencilla y limpia colocación a base de pasta de agarre de yeso, lo que disminuye considerablemente la entrada de humedad
            en la obra.</p>
          <p><b>Rapidez de montaje</b>: 1 operario ejecuta una media de 25-30 metros cuadrados diarios, frente a los 18 metros cuadrado del ladrillo perforado tradicional.</p>
          <p><b>Limpieza de ejecución</b>: Al colocarse con una pasta a base de yeso y pegamento,  y la práctica desaparición de las juntas; hacen que la limpieza en el tajo
            sea mayor a la ejecución del ladrillo perforado tradicional.</p>
          <p><b>Pronta entrada en obra</b>: La colocación del ladrillo Murocer Acústico se realiza a la catalana, por lo que no es necesaria la colocación de andamios y la
            entrada en obra se puede realizar antes, ya que tan solo es necesario haber retirado los puntales en planta y tener las plataformas de descarga colocadas.</p>
          <p><b>Agilidad de materiales</b>: Todo el suministro de materiales corre a cargo de Arca XXI, por lo que la empresa constructora no precisa de realizar los pedidos
            y de organizar los materiales.</p>
          <p><b>Reducción de grúa</b>: Debido a que todo los materiales vienen paletizados, tanto ladrillo gran formato como yeso y pegamento, no existe transito de
            bañeras; por lo que el uso de grúa se reduce, dejándola disponible para otros tajos.</p>
        </div>
      </div>
      <?php
       // llamamos al material. Hay que darle el nombre del materiales
       $material = "Murocer Acústico";
       require($urlabsoluta . $url . "mod/material2per2.php");
       ?>
      <div class="line">
        <h2>Materiales usados en las fachadas de Murocer Acústico</h2>
      </div>
      <?php
       // llamamos a materiales. Hay que darle el array del materiales
       $arraymateriales = [
         "Tabicol",
         "Longips",
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
