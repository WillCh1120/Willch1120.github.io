<?php
try{
    $conexion = new mysqli("localhost", "root", "", "loslibertadores");
    $conexion -> set_charset("utf8");
}catch(Throwable $th){
    echo(".. hubo un porblema ..");
}

?>