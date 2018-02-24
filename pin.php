<?php
$mysqli = mysqli_connect("localhost", "descuent_admin", "vitacodeDB", "descuent_vitacode");
$resultado = mysqli_query($mysqli, "SELECT ID AS _id, PIN as _pin FROM PARES WHERE ID='02FAF086'");
$fila = mysqli_fetch_assoc($resultado);
echo $fila['_id'];
echo $fila['_pin'];
?>
