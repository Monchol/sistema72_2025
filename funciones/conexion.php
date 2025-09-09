<?php

### Funcion para conectar con MySQL

const SERVER = "localhost";
const USUARIO = "root";
const CLAVE = "";
const BASE = "72catalogo2";
function conectar()
{
    /* Funcion llamada conectar que se encarga de conectar 
    con la base de datos llamada catalogo en mysql y va a 
    devolver el resultado de la conexion */
    $link = mysqli_connect(
        SERVER,
        USUARIO,
        CLAVE,
        BASE,
    );
    return $link;
}
;
?>