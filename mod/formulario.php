<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
if(isset($_POST['useremail'])) {
  $from = "info@aresresidencial.es";
  // email al que se manda toda la información//
  $email_to = "rubenrodriguez@arca21.es";
  $email_subject = "Contacto desde sitio web";

  // Creamos el cuerpo del mensaje del Email
  $email_message = "Detalles del contacto a través de la web: " . $_POST['web'] . "\n\n";
  $email_message .= "Nombre: " . $_POST['username'] . "\n";
  $email_message .= "Teléfono: " . $_POST['userphone'] . "\n";
  $email_message .= "Email: " . $_POST['useremail'] . "\n";
  $email_message .= "Comentario: " . $_POST['usertext'] . "\n";

  // Se envía el Email
  $headers = "From:" . $from;
  mail($email_to, $email_subject, $email_message);

  // Volvemos a la página de gracias
  if ($_POST['web'] == "Ares Residencial") {
    header('Location: ../../Gracias.php');
  }
  if ($_POST['web'] == "Melilla 22") {
    header('Location: ../Melilla22/Gracias.php');
  }
  if ($_POST['web'] == "Sorgo 14") {
    header('Location: ../Sorgo14/Gracias.php');
  }
  if ($_POST['web'] == "Buenavista 7") {
    header('Location: ../Buenavista7/Gracias.php');
  }
}
 ?>
