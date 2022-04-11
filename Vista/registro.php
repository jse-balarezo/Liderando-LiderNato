<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/registro.css">
    <title>Liderando</title>
</head>

<body>
    <div class="login-box">
        <img id="logo"  class="avatar" src="img/logo Liderando.jpg">
        <h1>Registro</h1>
        <div class="form">
            <form action="../Controlador/main_controller.php" method="POST">
                <!--Nombre-->
                <input type="text"placeholder="accion" name="accion" value="1" hidden>
                
                
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
                
                <!--Usuario-->
                <label for="email">Correo</label>
                <input type="email" name="correo" id="email" placeholder="Ingrese el Correo" aria-describedby="emailHelp" required>
                <!--Contraseña-->
                <label for="password1">Contraseña</label>
                <input type="password" name="password" id="password1" placeholder="Ingrese la Contraseña" required>

                <!--Confirmacion de la Contraseña-->
                <label for="password2">Confirme la Contraseña</label>
                <input type="password" id="password2" placeholder="Confirme la Contraseña" required>

                <div class="mb-3">
                    <span id="invalid"></span>
                </div>
                <button class="btn btn-danger" id="button" type="submit"
                    onclick="validarRegistro(nombre,email,password1,password2)">Enviar</button>

            </form>
        </div>
      


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

<script src="js/main.js"></script>
</html>