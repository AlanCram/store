<?php

$mensaje = "";

if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){
        case 'Agregar':
        if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))) {
            $id = openssl_decrypt($_POST['id'],COD,KEY);
            $mensaje.="OK ID Correcto".$id."<br/>";
        }else {
            $mensaje.="ID Incorrecto".$id."<br/>";
        }
        if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))) {
            $nombre = openssl_decrypt($_POST['nombre'],COD,KEY);
            $mensaje.="OK Nombre Correcto".$nombre."<br/>";
        }else {
            $mensaje.="Nombre Incorrecto".$nombre."<br/>";
            break;
        }
        if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))) {
            $precio = openssl_decrypt($_POST['precio'],COD,KEY);
            $mensaje.="OK Precio Correcto".$precio."<br/>";
        }else {
            $mensaje.="Precio Incorrecto".$precio."<br/>";
            break;
        }
        if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))) {
            $cantidad = openssl_decrypt($_POST['cantidad'],COD,KEY);
            $mensaje.="OK Cantidad Correcta".$cantidad."<br/>";
        }else {
            $mensaje.="Cantidad Incorrecta".$cantidad."<br/>";
            break;
        }
        break;
    }
}


?>