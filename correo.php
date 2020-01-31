<?php

if (isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['msg'])){

        $destino ="paginasparatodoelmundo@gmail.com";
        $nombre = $_POST['name'];
      
        $telefono = $_POST['phone'];
        $mensaje = $_POST['msg'];
        $contenido = "Nombre: " . $nombre . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
        $mail = mail($destino, "Contacto", $contenido);

        if ($mail){
            echo "Su mensaje ha sido enviado";
        }
    }

}