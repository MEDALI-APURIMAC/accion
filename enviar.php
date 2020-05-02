<?php
$destino="misteriosperumundo@gmail.com";
$Nombre=$_POST["Nombre"];
$Correo=$_POST["Correo"];
$Telefono=$_POST["Telefono"];
$Pais=$_POST["Pais"];
$Mensaje=$_POST["Mensaje"];
$contenido="Nombre " .$Nombre. "\nCorreo " .$Correo. "\nTelefono ".$Telefono."\nPais " .$Pais. "\nMensaje " .$Mensaje;
mail("misteriosperumundo@gmail.com", "contacto", $contenido);





?>