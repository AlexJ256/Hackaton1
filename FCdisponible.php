<?php
$bd1 = mysqli_connect("localhost","root","");

mysqli_select_db($bd1,"desafio");

    $resp = mysqli_query($bd1,"SELECT Disponibles FROM estacionamientos WHERE Nombre="Estacionamiento A");
    while ($fila = mysqli_fetch_object($resp1)) {
        
        if($fila->Disponibles > 0){
        echo "en $fila->Nombre hay $fila->Disponibles estacionamientos disponibles<br />"; 
        }
    }


?>