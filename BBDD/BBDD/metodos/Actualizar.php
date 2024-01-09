<?php
include_once("metodos.php");
Metodo::Actualiza($_POST["id"],$_POST["Zapatilla"], $_POST["Marca"], $_POST["Talla"]);
header("location:../PHP/Modificar.php");
?>