<?php

    //Llamando a los campos
    $nombre= $_POST['nombre'];
    $email= $_POST['email'];
    $tel= $_POST['tel'];
    $msg= $_POST['msg'];

    //Datos para el correo
    $destinatario="cambiosaunclick@gmail.com";
    $asunto= "Cotizaciones - Cambios a un Click";

    $carta= "Nombre: $nombre \n"."Email: $email \n"."Telefono: $tel \n"."Mensaje: $msg \n";

    //Enviando Mensaje
    mail($destinatario,$asunto,$carta);
    header("location:return.html");

?>