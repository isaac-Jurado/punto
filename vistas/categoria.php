<?php

session_start();
if (isset($_SESSION['usuario'])) {

?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>categorias</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body id="backgr">
        <?php require_once "menu.php"
        ?>
        <br><br><br><br><br>

        <div class="container">
            <div class="row">
                <div class="col-5">
                    <form id="formCategorias">
                        <div class="form-group">
                            <label>Marca</label>
                            <input type="text" class="form-control input-sm" name="categoria" id="categoria" aria-describedby="emailHelp">
                        </div>
                        <span class="btn btn-primary" id="btnAgregarCategoria">Submit</span>
                    </form>
                </div>
                <div class="col-5">
                    <!--    -->
                    <div id="tablaCategoriasLoad"></div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="../librerias/jquery-3.7.1.min.js"></script>
        <script src="../js/funciones.js"></script>
        s
    </body>

    </html>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#tablaCategoriasLoad').load("categoria/tablaCategoria.php");


            $('#btnAgregarCategoria').click(function() {

                vacios = validarFormVacio('#formCategorias');

                if (vacios > 0) {
                    //! alert de que debe llenar los campos
                    Swal.fire({
                        title: "Tienes " + vacios + " campos vacios",
                        icon: "error"
                    });
                    return false;
                }


                datos = $('#formCategorias').serialize();
                $.ajax({
                    type: "POST",
                    data: datos,
                    url: "../procesos/categorias/agregarCategoria.php  ",
                    success: function(r) {
                        console.log(r)
                        if (r == 1) {
                            //! alert de que si agrega con exito
                            Swal.fire({
                                title: "Agregado con exito",
                                icon: "success"
                            });
                        } else {
                            //! alert de que hubo un error
                            Swal.fire({
                                title: "No se pudo agregar 😥",
                                icon: "error"
                            });
                        }
                    }
                });
            })
        })
    </script>
<?php

} else {
    header("location:../index.php");
}

?>