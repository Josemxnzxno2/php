<?php
include_once("metodos.php");
Metodo::EliminarZapatilla($_POST["id"]);
header("location:../PHP/loginCrud.php");
?>