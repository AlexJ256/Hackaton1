<center>
<?php
$bd1 = mysqli_connect("localhost","root","");

mysqli_select_db($bd1,"desafio");

    $resp1 = mysqli_query($bd1,"SELECT Disponibles, Nombre FROM estacionamientos");
    while ($fila = mysqli_fetch_object($resp1)) {
        
        if($fila->Disponibles > 0){
        echo "en $fila->Nombre hay $fila->Disponibles estacionamientos disponibles<br />"; 
        }
    }


?>
</center>
