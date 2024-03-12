<?php
    session_start();
    require_once "../../clases/Conexion.php";
    require_once "../../clases/Usuarios.php";

    $obj = new usuarios();

    $datos=array(
        //! nombre que proviene del form
        $_POST['Username'],
        $_POST['Password'],
    );

    

    echo $obj->loginUser($datos);


?>