
<?php
$bd1 = mysqli_connect("localhost","root","");

mysqli_select_db($bd1,"desafio");

    $resp1 = mysqli_query($bd1,"SELECT id, nombre FROM usuarios");
    while ($fila = mysqli_fetch_object($resp1)) {
        echo "$fila->id   $fila->nombre  <br />";
    }


?>


