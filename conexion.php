<?php
//declaramos la variable $conexion como global y es la que maneja la conexion digital con la BD
global $conexion;

function conectar(){
    global $conexion;
    //declaramos cuatro variables necesarias para establecer la conexion a la BD
    $servidor = "200.13.106.23:33000";
    $un = "compint3_2019o";
    $pw = "o2019";
    $db = "compint32019o";

    $conexion = mysqli_connect($servidor, $un, $pw, $db) or die("no se puede conectar");

}


function desconectar(){
    global $conexion;
    mysqli_close($conexion);
}


function ejecutar($sql){
    global $conexion;

    //establecemos la conexion
    conectar();

    //ejecutamos el query y obtemos un recordset
    $recordset = mysqli_query($conexion, $sql);

    //cerremos la conexion
    desconectar();

    //retormamos el recordset generado
    return $recordset;
}




?>