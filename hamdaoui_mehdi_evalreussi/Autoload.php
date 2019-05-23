<?php

class Autoload{

    public static $nb = 0; // permet de compter le nombre de fois où l'on passe dans l'autoload

    public static function className($className){

        $tab = explode('\\', $className);

        if( $tab[0] == 'BackOffice'){

            $path = __DIR__. '/../src'. implode('/', $tab) . '.php';
        }
        else{

            $path = __DIR__. '/'. implode('/', $tab) . '.php';
        }
        require $path;

        //echo 'Chemin : ' . $path . '<hr/>'; 

        self::$nb++;
    }
}
spl_autoload_register( array('Autoload', 'className') );