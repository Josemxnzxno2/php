<?php
class Metodo
{
    public static function crearTabla()
    {
        $host = "localhost";
        $usuario = "root";
        $contraseña = "";
        $conexion = mysqli_connect($host, $usuario, $contraseña);



        $sql = "CREATE DATABASE IF NOT EXISTS IDZapatillas";

        $crearTabla = "CREATE TABLE IF NOT EXISTS Clientes( usuario VARCHAR(30) PRIMARY KEY, contraseña VARCHAR(1000));";

        $tablaJugadores = "CREATE TABLE IF NOT EXISTS Zapatillas( ID INT AUTO_INCREMENT PRIMARY KEY, Zapatilla VARCHAR(40), Marca VARCHAR(40), Talla INTEGER(2));";

        mysqli_query($conexion, $sql);

        mysqli_select_db($conexion, "IDZapatillas");

        mysqli_query($conexion, $crearTabla);

        mysqli_query($conexion, $tablaJugadores);

        mysqli_close($conexion);
    }



    public static function Crear($user, $contraseñas)
    {

        $host = "localhost";
        $usuario = "root";
        $contraseña = "";
        $baseDatos = "IDZapatillas";

        $conexion = mysqli_connect($host, $usuario, $contraseña, $baseDatos);

        $ConsultaInsertar = "INSERT INTO Clientes VALUES(?,?)";

        $stmtInsertar = mysqli_prepare($conexion, $ConsultaInsertar);

        mysqli_stmt_bind_param($stmtInsertar, "ss", $user, $contraseñas);

        mysqli_stmt_execute($stmtInsertar);

        mysqli_stmt_close($stmtInsertar);
        mysqli_close($conexion);
    }


    public static function RegistroExistente($user)
    {

        $host = "localhost";
        $usuario = "root";
        $contraseña = "";
        $baseDatos = "IDZapatillas";
        $conexion = mysqli_connect($host, $usuario, $contraseña, $baseDatos);
        $Existe = false;


        $consultaUsuarios = "SELECT * FROM Clientes WHERE usuario=?";
        $stmtUsuario = mysqli_prepare($conexion, $consultaUsuarios);
        mysqli_stmt_bind_param($stmtUsuario, "s", $user);
        mysqli_stmt_execute($stmtUsuario);

        mysqli_stmt_store_result($stmtUsuario);

        if (mysqli_stmt_num_rows($stmtUsuario) > 0) {
            $Existe = true;
        }
        mysqli_stmt_close($stmtUsuario);



        mysqli_close($conexion);

        return $Existe;
    }




    public static function Inicio($user, $contraseñas){

        $host = "localhost";
        $usuario = "root";
        $contraseña = "";
        $baseDatos = "IDZapatillas";

        $conexion = mysqli_connect($host, $usuario, $contraseña, $baseDatos);
        $Existe = false;

        $consulta = "SELECT contraseña FROM Clientes WHERE usuario=?";
        $stmt = mysqli_prepare($conexion, $consulta);

        mysqli_stmt_bind_param($stmt, "s", $user);

        mysqli_stmt_execute($stmt);

        mysqli_stmt_bind_result($stmt, $claveColumna);


        
        mysqli_stmt_fetch($stmt);
        
        if ($contraseñas == $claveColumna) {
            $Existe = true;
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conexion);

        return $Existe;
    }
    

    public static function MeterZapatilla($Jugador, $Equipo, $Edad)
    {
        $host = "localhost";
        $usuario = "root";
        $contraseña = "";
        $baseDatos = "IDZapatillas";
        $conexion = mysqli_connect($host, $usuario, $contraseña, $baseDatos);


        $ConsultaInsertar = "INSERT INTO Zapatillas (Zapatilla,Marca,Talla) VALUES(?,?,?)";

        $stmtInsertar = mysqli_prepare($conexion, $ConsultaInsertar);

        mysqli_stmt_bind_param($stmtInsertar, "ssi", $Jugador, $Equipo, $Edad);

        mysqli_stmt_execute($stmtInsertar);

        mysqli_stmt_close($stmtInsertar);
        mysqli_close($conexion);
    }











    public static function EliminarZapatilla($id)
    {
        $host = "localhost";
        $usuario = "root";
        $contraseña = "";
        $baseDatos = "IDZapatillas";

        $conexion = mysqli_connect($host, $usuario, $contraseña, $baseDatos);
        $consultaEliminar = "DELETE FROM Zapatillas WHERE ID=$id";
        $stmt = mysqli_prepare($conexion, $consultaEliminar);

        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
    }








    public static function MostrarTabla()
    {
        $host = "localhost";
        $usuario = "root";
        $contraseña = "";
        $baseDatos = "IDZapatillas";

        $conexion = mysqli_connect($host, $usuario, $contraseña, $baseDatos);
        $consultaJugadores = "SELECT * FROM Zapatillas";

        $Stmt = mysqli_prepare($conexion, $consultaJugadores);
        mysqli_stmt_execute($Stmt);
        mysqli_stmt_store_result($Stmt);
        mysqli_stmt_bind_result($Stmt, $id, $Jugador, $Equipo, $Edad,);

        while (mysqli_stmt_fetch($Stmt)) {

            echo "<tr'>";
            echo "<td style='color:grey;'>$id</td>";
            echo "<td>$Jugador</td>";
            echo "<td>$Equipo</td>";
            echo "<td>$Edad</td>";
            echo "<td><form method='post' action='../metodos/Borrar.php'> <button name='id' value='$id' class='btn-yellow '>
            <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
            <path stroke-linecap='round' stroke-linejoin='round' d='M12 4.5v15m7.5-7.5h-15' />
            </svg></button></form></td>";
            echo "<td><form method='post' action='../PHP/Modificar.php'> <button name='id' value='$id' class='btn-yellow '>
            </button></form></td>";
            echo "</tr>";
        }

        mysqli_stmt_close($Stmt);
        mysqli_close($conexion);
    }

    public static function Actualiza($id, $Jugador, $Equipo, $Edad)
    {

        $host = "localhost";
        $usuario = "root";
        $contraseña = "";
        $baseDatos = "IDZapatillas";
        $conexion = mysqli_connect($host, $usuario, $contraseña, $baseDatos);
        $update = "UPDATE Zapatillas SET Zapatilla=?, Marca=?, Talla=? WHERE ID=?";
        $stmt = mysqli_prepare($conexion, $update);
        mysqli_stmt_bind_param($stmt, "sssi", $Jugador, $Equipo, $Edad, $id);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
    }
}
