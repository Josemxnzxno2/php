<?php
if ($_POST['usuario'] == 'admin' && $_POST['contrasena'] == '1234') {
    session_start();
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['hora_acceso'] = date('Y-m-d H:i:s');
    header('Location: opciones.php');
} else {
    echo "Usuario o contraseña incorrectos. Intenta de nuevo.";
}
?>
