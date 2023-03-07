<?php
require_once('libs/smarty/libs/Smarty.class.php');

    class vista {
        function mostrarComentarios ($bd){
            $smarty = new Smarty;
            $smarty->assign('comentarios', $bd );
            $smarty->display('templates\foro.tpl');
        }
    }