<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

<style>
    body{
        background:fixed url("../Fotos/zapas.jpg");
        background-size: cover;
    }
    .fs{
        font-family: login;
        font-size: 130px;
    }
    .bg-trans{
        background-color: rgba(255, 255, 255, 0.267);
        backdrop-filter: blur(5px);
        height: 360px;
        width: 350px;
        border-radius: 10%;
        margin-top: 7%;

    }
    .imagen{
        margin-top: -110px;
    }
    .boton{
    margin-left: 40%;
    border-radius: 10%;
    background-color: rgb(252, 195, 79);
    }
    .Usuario{
        background-color: rgb(252, 195, 79);
    }
    .contraseña{
        background-color: rgb(252, 195, 79);
    }

    
</style>

</head>

<body>
    <?php
    session_start();
    include_once("../metodos/metodos.php");

    if (isset($_SESSION["Usuario"]) || isset($_POST["Usuario"], $_POST["Contraseña"]) && Metodo::Inicio($_POST["Usuario"], $_POST["Contraseña"])) {

        isset($_POST["Usuario"], $_POST["Contraseña"]);
            $_SESSION["Usuario"] = $_POST["Usuario"];
            header("location:loginCrud.php");
    }else{
    ?>
    <div class="container-fluid">

        <div class="content text-white text-center mt-auto">
            <h1 class="fs text-danger">ROCKAFELLA SHOES</h1>
        </div>

        <div class="content bg-trans mx-auto ">
            <div class="content text-white text-center">
            </div>

            <form action="login.php" method="post">

                <div class="input-group flex-nowrap w-75 mt-5 mx-auto">
                    <input type="text" class="form-control mt-5" placeholder="Usuario" aria-label="Usuario" name="Usuario"
                        aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap w-75 mt-5 mx-auto">
                    <input type="contraseña" class="form-control" placeholder="contraseña" aria-label="contraseña" name="Contraseña"
                        aria-describedby="addon-wrapping">
                </div>

                <input class="boton mt-5 bg-danger" type="submit" value="Entrar">
                
            </form>

        </div>
    </div>

    <?php
    }
    ?>

</body>

</html>