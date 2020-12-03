<?php
if (isset($_REQUEST['enviar'])) {
    $alerta="¡SU MENSAJE FUE ENVIADO!";
    $to='web.sasa05@gmail.com';
    $Cliente=$_REQUEST['mail'];
    $asunto=$_REQUEST['producto'];
    $mensaje=$_REQUEST['detalle'];
    mail($to, $asunto, $mensaje, $Cliente);

    $_SESSION['mensaje'] = 'Tarea guardada';
    $_SESSION['tipo-mensaje'] = 'success';

    header('location: ../index.php');
}
?>
