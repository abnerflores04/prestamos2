<?php
    /* Obtener las vistas que se iran mostrando en el index.php*/
    class vistasModelo{
        protected static function obtener_vistas_modelo($vistas){
            $listaBlanca=["home","client-list","reservation-new","client-new","client-search","client-update","company","item-list","item-new","item-search","item-update","reservation-list","reservation-pending","reservation-reservation","reservation-search","reservation-update","user-list","user-list2","user-new","user-search","user-update"];
            if (in_array($vistas,$listaBlanca)) {
                if (is_file("./vistas/contenidos/".$vistas."-view.php")) {
                    $contenido="./vistas/contenidos/".$vistas."-view.php";
                } else {
                    $contenido="404";
                }
            }elseif ($vistas=="login" || $vistas=="index") {
                $contenido="login";
            }else{
                $contenido="404";
            }
            return $contenido;
        }
        
    }