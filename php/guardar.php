<?php
session_start();
include('Conexion_bd.php');
$id = $_POST['id_user'];
$autor = $_POST['Autor'];
$titulo = $_POST['titulo'];
$email = $_SESSION['Email'];
$descripcion = $_POST['descripcion'];
$lenguaje = $_POST['lenguaje'];
$acceso = "";
$date = date("Y-m-d-");
if ($id == null || $autor == null || $titulo == null || $descripcion == null || $lenguaje == null) {
    echo '<script>
    alert("ups. ocurrio un error, intentelo de nuevo, verifique que todos los campos esten llenos.");
    </script>';
    echo $id . '---' . $autor . '---' . $titulo . '---' . $descripcion . '---' . $lenguaje;
    exit();
}



if ($lenguaje == "Csharp") {
    $carpeta_envios = '../codigo/c/' . $email . '/';
    $tipo = "csharp";
}
if ($lenguaje == "Java") {
    $carpeta_envios = '../codigo/java/' . $email . '/';
    $tipo = "java";
}
if ($lenguaje == "Python") {
    $carpeta_envios = '../codigo/py/'  . $email . '/';
    $tipo = "python";
}

if (!file_exists($carpeta_envios)) {
    mkdir($carpeta_envios, 0755);
}

if ($_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
    $nombre_archivo = $_FILES['archivo']['name'];
    $archivo_temporal = $_FILES['archivo']['tmp_name'];
    $directorio_destino = $carpeta_envios . $nombre_archivo;
    if (!move_uploaded_file($archivo_temporal, $directorio_destino)) {
        echo "<script> alert('Hubo un error al subir el archivo')
        window.location.href = '../paginas/subir_codigo.php';
        </script>";
        exit();
    }
} else {
    echo "<script> alert('Error al subir el archivo')
        window.location.href = '../paginas/subir_codigo.php';
        </script>";
    exit();
}
$acceso = $email . '/' . $nombre_archivo;
$qerry = "SELECT * FROM $tipo Where Acceso = '$acceso'";
$busqueda = mysqli_query($conexion, $qerry);
if ($busqueda && mysqli_num_rows($busqueda) > 0) {
    echo "<script> alert('Ya has subido un archivo zip o rar con el mismo nombre.')
    window.location.href = '../paginas/subir_codigo.php';
    </script>";
} else {
    $query = "INSERT INTO $tipo ( `id_Autor`, `Autor`, `Nombre`, `Descripcion`, `Lenguaje`, `Acceso`, `clic`, `fecha`) VALUES ('$id','$autor','$titulo','$descripcion','$lenguaje','$acceso','0','$date')";
    $ejecutar = mysqli_query($conexion, $query);
    echo "<script> alert('El archivo se ha subido correctamente.')
    window.location.href = '../paginas/subir_codigo.php';
    </script>";
    exit();
}
