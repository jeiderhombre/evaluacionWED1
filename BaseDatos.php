<?php
    class BaseDatos{
        //variable--atributos
        public $usuarioBD="root";
        public $passworBD="";

        //funsion especial
        public function __construct(){}
        
        //funsiones--metodos
        public function conectarBD(){
            try{
                $infoBD="mysql:host=localhost;dbname=tiendasabado";
                $conexionBD=new PDO($infoBD, $this->usuarioBD, $this->passworBD);
                return $conexionBD;
            }catch(PDOException $error){
                echo($error->getMessage());
            }
        }

        //funcion guardar informacion
        public function agregarDatos($consultarsql){
            //nos conectamos a la base de datos
            $conexionBD= $this->conectarBD();

            //consultar la base de datos
            $contarAgregarDatos= $conexionBD->prepare($consultarsql);

            //ejecutar la consulta
            $resultado =$contarAgregarDatos->execute();

            //comprobar datos
            if($resultado){
                echo("exito agregando datos");
            }else{
                echo("error");
            }
        }
    }
?>