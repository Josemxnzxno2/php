<?php
session_start();

$usuarios = [
    'admin' => '1234',
    'cliente1' => '4321',
];

if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario] == $contrasena) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['hora_acceso'] = date('Y-m-d H:i:s');
        if ($usuario == 'admin') {
            header('Location: opciones_login.php');
        } elseif ($usuario == 'cliente1') {
            header('Location: opciones_cliente.php');
        } else {
            echo "Usuario sin rol asignado.";
        }
    } else {
        echo "Usuario o contraseña incorrectos. Intenta de nuevo.";
    }
} else {
    echo "Debes proporcionar un usuario y una contraseña.";
}
?>
