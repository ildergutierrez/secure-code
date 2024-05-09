<?php
$conexion = mysqli_connect("bbxd8bacgmzyocoj5nki-mysql.services.clever-cloud.com", "uja9uhnhl2m0ielz", "hv9KKkhOv2IFQp6aAZMW", "bbxd8bacgmzyocoj5nki");
if ($conexion) {
    echo "Conexion exitosa";
} else {
    echo "Error de conexión: " . mysqli_connect_error();
}
?>
