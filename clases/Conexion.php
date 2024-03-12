<?php

    class conectar{
        // se coloca los datos de nuestro servidor asi como Usuario  de nuestra DB
        private $servidor="localhost";
        private $usuario="root";
        private $passsword="";
        private $db="ventas";
        
        public function conexion(){
            $conexion=mysqli_connect($this->servidor,
                                    $this->usuario,
                                    $this->passsword,
                                    $this->db);

            return $conexion;
        }

    }

?>