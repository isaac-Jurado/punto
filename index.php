<?php

    require_once "clases/Conexion.php";
    $obj = new conectar();
    $conexion = $obj->conexion();
    //! se esta validando que exista un usuario "LariCast"
    $sql = "SELECT * from usuarios where username = 'LariCast'";
    $result = mysqli_query($conexion,$sql);
    $validar = 0;
    if (mysqli_num_rows($result)>0) {

        $validar=1;
    }

?>
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body id="backLoginRegister">
    <!-- <br><br><br><br><br> -->

    <div class="container-fluid" id="parent">
        <div class="row" style="width: 100%;">
            <div class="col-4"></div>
            <div class="col-4 login">

                <div class="row">
                    <div class=" col-8">

                        <form id="formularioLogin">

                            <label for="Username">Nombre de Usuario</label>
                            <input type="text" class="form-control" name="Username" id="Username">

                            <label for="Password">Password</label>
                            <input type="password" class="form-control" name="Password" id="Password">

                            <p></p>
                            <span class="btn btn-primary btn" id="entrarSistema">Entrar</span>
                            <?php
                            
                            if(!$validar):?>
                                <a href="registro.php" class="btn btn-danger">Registrar</a>
                            <?php endif;    ?>
                            
                            
                        </form>
                    </div>
                    <div class="col-4">
                        <img src="./img/logo.png" height="230px" alt="">
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./librerias/jquery-3.7.1.min.js"></script>
    <script src="./js/funciones.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#entrarSistema').click(function(){

                vacios = validarFormVacio('#formularioLogin');

                if (vacios > 0) {
                //! alert de que debe llenar los campos
                    Swal.fire({
                        title: "Tienes "+vacios+ " campos vacios",
                        icon: "error"
                    });
                    return false;
                }

                datos = $('#formularioLogin').serialize();
                $.ajax({
                    type: "POST",
                    data: datos,
                    url: "./procesos/regLogin/login.php",
                    success: function(r){
                        if (r==1) {
                            
                            window.location = "vistas/inicio.php"

                        }else{
                            reset
                            Swal.fire({
                                title: "No se pudo acceder 😥",
                                icon: "error"
                            });
                            return false;
                        }

                    }
                });
            });
        });
    </script>
</body>

</html>