<?php

    class modelo {

        private function connect() {
            $bd = new PDO('mysql:host=localhost;'.'dbname=foro;charset=utf8', 'root', '');
            return $bd; 
        }

        function getComentarios($params) {
            $bd = $this->connect();
            $query = $bd->prepare(" SELECT * 
            FROM comentarios 
            ORDER BY fecha desc
            LIMIT $params[limit]
            OFFSET $params[offset]");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        function addComentario($nombre,$comentario){
            $bd = $this->connect();
            $query = $bd->prepare("INSERT INTO comentarios (nombre,comentario) VALUES (?, ?)");
            $query->execute([$nombre,$comentario]);

    }
}