<?php

/**
 * description of autoload
 * 
 * @author juanse
 */
class Autocarga{
    static public function cargar_clase($clase){
        $arrayClase = array();
        $base = __DIR__.DIRECTORY_SEPARATOR;
        $arrayClase['base_datos'] = $base. 'data_base.php';
        $arrayClase['categorias'] = $base. 'categorias.php';
        $arrayClase['productos'] = $base. 'productos.php';
        
        if(isset($arrayClase[clase])) {
            if (file_exist($arrayClase[$clase])){
                include $arrayClase[$clase];
            }else {
                throw new exception("archivo de clase no encontrada [{$arrayClase[clase]}]");
            }
        }
        
    }
}

spl_autoload_register('Autocarga::cargar_clase');
      


