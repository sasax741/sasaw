<?php
if (isset($_REQUEST['enviar'])) {
    $alerta="¡SU MENSAJE FUE ENVIADO!";
    $to='web.sasa05@gmail.com';
    $Cliente=$_REQUEST['mail'];
    $asunto=$_REQUEST['producto'];
    $mensaje=$_REQUEST['detalle'];
    mail($to, $asunto, $mensaje, $Cliente);


    echo'<script type="text/javascript">
          alert("Mensaje enviado.");
          window.location.href="../index.php";
      </script>';
}
?>
