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
    $active = "Contacto";
  ?>
  <!-- ESTILOS PROPIOS GENERALES-->
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/cookies.css"';?>>
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/navstyle.css"';?>>
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/footerstyle.css"';?>>
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/style.css"';?>>
  <!-- ESTILOS PROPIOS PARTCULARES DE LA PÁGINA-->
  <link rel="stylesheet" href=<?php echo '"' . $urlabsoluta . $url . 'css/contactostyle.css"';?>>

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
    </div>
  </header>
  <main class="contacto">
    <!-- HEADER -->
    <div class="container">
      <div class="line">
        <div class="contacto-texto">
          Para más información, contacte con nosotros.
        </div>
      </div>
      <div class="line">
        <div class="contacto-form">
          <form method="post" action=<?php echo '"' . $urlabsoluta . '../_mod/formulario.php"';?>>
            <div class="contacto-form-line">
              <label for="username">Nombre:</label>
            </div>
            <div class="contacto-form-line">
              <input type="text" name="username" id="username" autofocus="on" placeholder="Nombre">
            </div>
            <div class="contacto-form-line">
              <label for="userphone">Teléfono:</label>
            </div>
            <div class="contacto-form-line">
              <input type="tel" name="userphone" id="userphone" placeholder="Teléfono">
            </div>
            <div class="contacto-form-line">
              <label for="useremail">Email:</label>
            </div>
            <div class="contacto-form-line">
              <input type="email" name="useremail" id="useremail" placeholder="email" required>
            </div>
            <div class="contacto-form-line">
              <label for="usertext">¿Quieres dejarnos algún comentario?</label>
            </div>
            <div class="contacto-form-line">
              <textarea name="usertext" id="usertext" placeholder="Escribe aqui tu comentario..." rows="4"></textarea>
            </div>
            <div class="contacto-form-line-none">
              <input name="web" id="web" value="Arca XXI">
            </div>
            <div class="contacto-form-line" id="contacto-enviar">
              <input class="contacto-enviar" type="submit" value="Enviar">
            </div>
            <div class="contacto-form-line">
              <p>O llámanos al teléfono <a href="tel:+34605652488">91 486 07 76</a></p>
            </div>
          </form>
        </div>
        <div class="contacto-map">
          <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.241398127665!2d-3.8140118846064994!3d40.33699067937453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd41895b21823527%3A0x2b6514150139e69!2sCalle%20Polvoranca%2C%2063%2C%2028923%20Alcorc%C3%B3n%2C%20Madrid!5e0!3m2!1ses!2ses!4v1587998247309!5m2!1ses!2ses"
          width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
