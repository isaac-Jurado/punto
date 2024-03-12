<?php
    require_once "../../clases/Conexion.php";
    require_once "../../clases/Usuarios.php";

    $obj= new usuarios();

    $pass=sha1($_POST['pass']);
    $datos=array(
        //! van los name del form de donde se obtiene el formulario 
        $_POST['name'],
        $_POST['lastName'],
        $_POST['username'],
        $pass
    );

    echo $obj->registroUsuario($datos);

?>