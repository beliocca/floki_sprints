<?php

require("funciones.php");
session_start();



if ($_FILES) {
    $file = null;
    $errorAvatar = validarAvatar($_FILES);
    if (empty($errorAvatar)) {
        guardarAvatar($_FILES);
    }
}
?>

<html lang="en" dir="ltr">

<head>
    <?php include("head.php") ?>
    <title>FLOKI Deco & Design</title>
</head>

<body>
    <!-- header -->
    <?php include("header.php") ?>

    <div class="container ">
        <div class="row">
            <div class="col-12 col-sm-4 ">
                <h2>cuenta</h2>
                <ul>
                    <li>
                        <a href="">perfil</a>
                    </li>
                    <li>
                        <a href="">historial de ordenes</a>
                    </li>
                    <li>
                        <a href="">direcciones guardadas</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-8">
                <h2>perfil</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <input type="text" name="nombre" placeholder="Nombre">
                    </div>
                    <div>
                        <input type="text" name="apellido" placeholder="Apellido">
                    </div>
                    <div>
                        <div> <label for="cumpleaños">Cumpleaños</label></div>
                        <input type="date" name="cumpleaños" placeholder="cumpleaños">
                    </div>
                    <button type="submit">Actualizar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include("footer.php") ?>
    <!--  scripts de Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>