<?php

session_start();
if (isset($_SESSION['usuario'])) {

?>
  <!doctype html>
  <html lang="en">

  <head>
    <title>home</title>
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
    <br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-4" style="color: white;">
          <form id="formArticulos">
            <div class="form-group">

              <div class="row">
                <div class="col-sm">
                  <label>Marca</label>
                  <select class="form-control input-sm" name="categoriaSelect" id="categoriaSelect">
                    <option value="A">Seleciona Categoria</option>
                  </select>
                </div>
                <div class="col-sm">
                <label for="">Nombre</label>
              <input type="text" class="form-control input-sm" id="nombre" name="nombre">
                </div>
              </div>
              <br>

              <div class="row">
                <div class="col">
                  <label for="">20</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">20/5</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">21</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">21/5</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <label for="">22</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">22/5</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">23</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">23/5</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
              </div>


              <div class="row">
                <div class="col">
                  <label for="">24</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">24/5</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">25</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">25/5</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
              </div>


              <div class="row">
                <div class="col">
                  <label for="">26</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">26/5</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">27</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">27/5</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
              </div>


              <div class="row">
                <div class="col">
                  <label for="">28</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">28/5</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">29</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">29/5</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <label for="">30</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">20/5</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">21</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
                <div class="col">
                  <label for="">21/5</label>
                  <input type="number" class="form-control input-sm" id="" name="">
                </div>
              </div>



              
              <label for=""></label>
              <input type="file" name="" id="">
              <p></p>
              <span class="btn btn-primary" id="btnAgregaArticulo">Agregar</span>
          </form>
        </div>
        <div class="col-sm-8"></div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

  </html>
<?php

} else {
  header("location:../index.php");
}

?>