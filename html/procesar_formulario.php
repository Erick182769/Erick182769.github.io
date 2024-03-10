<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $nombre_de_usuario = $_POST['usuario'];
    $contraseña = $_POST['contrasena'];
    $Fecha_de_nacimiento = $_POST['fecha_nacimiento'];
    $País = $_POST['pais'];
    $Ciudad = $_POST['ciudad'];
    $Calle = $_POST['calle'];
    $Número_de_casa = $_POST['numero_casa'];
    $Colonia = $_POST['colonia'];
    $Email = $_POST['Email'];
    $RFC = $_POST['RFC'];
    $CP = $_POST['CP'];

    header("Location: formulario-lista.php?nombre=$nombre&apellido_paterno=$apellido_paterno&apellido_materno=$apellido_materno&nombre_de_usuario=$nombre_de_usuario&contraseña=$contraseña&Fecha_de_nacimiento=$Fecha_de_nacimiento&País=$País&Ciudad=$Ciudad&Calle=$Calle&Número_de_casa=$Número_de_casa&Colonia=$Colonia&Email=$Email&RFC=$RFC&CP=$CP");
    exit(); 
} else {
    header("Location: formulario.php");
    exit();
}
?>
