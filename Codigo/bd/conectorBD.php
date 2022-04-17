<?php

//Funcion para conectarnos a la base de datos
    function conectar($esRemota){
        if($esRemota){
            $servidor = "...";
        }else{
            $servidor = "localhost:3306";
        }
        //usuario
        $usuario = "debianDB";
        //contraseña
        $password = "debianDB";
        //base de datos
        $BD = "tiendaonline";


        $conectar = mysqli_connect($servidor, $usuario, $password, $BD);

        if($conectar){
            
            return $conectar;
        }else{
           
            echo mysqli_connect_error();
            exit;
        }
    }

?>
