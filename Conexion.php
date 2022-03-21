<?php
   
    $servidor = "localhost"; //127.0.0.1
    $usuario = "root";
    $contraseña = "";

    try{
        //PDO permite la conexion con la bd       Nombre de la bd
        $conexion = new PDO("mysql:host=$servidor;dbname=roster",$usuario,$contraseña);
        //Propiedades de acceso a los errores
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //Mensaje de exito
        echo "Conexion establecida";
    
    //Conexion fallida
    }catch(PDOException $error){
        echo "Conexion erronea".$error;
    }

?>