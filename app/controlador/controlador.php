<?php

include_once 'app\modelo\modelo.php';
include_once 'app\vista\vista.php';

    class controlador {
        private $modelo;
        private $vista;

        function __construct() {
            $this->modelo = new modelo();
            $this->vista = new vista();
        }

        function getComentarios($params){
            $params = [
                "limit" => "18446744073709551610",
                "offset" => "0"
            ];
            if (isset($_GET['limit'])){
                $params["limit"] = $_GET['limit'];
                if (isset($_GET['offset'])){
                    $params["offset"] = ($_GET['offset']-1)*$params["limit"];
                }
        }
        $bd = $this->modelo->getComentarios($params);
        $this->vista->mostrarComentarios($bd);
    }

    function addComentario(){
        $nombre = $_POST['nombre'];
        $comentario = $_POST['comentario'];
        $this->modelo->addComentario($nombre,$comentario);
        header("Location: " . BASE_URL . "foro"); 
    }
}