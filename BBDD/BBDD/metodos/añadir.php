<?php
include_once("metodos.php");
Metodo::MeterZapatilla($_POST["Zapatilla"], $_POST["Marca"], $_POST["Talla"]);
header("location:../PHP/loginCrud.php");
?>