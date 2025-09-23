<?php

### Funcion para conectar con MySQL

const SERVER = "127.0.0.1";
const USUARIO = "root";
const CLAVE = "";
const BASE = "72catalogo5";
const PUERTO = 3306;
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
        PUERTO,
    );
    return $link;
}
;
?>