<?php
/**
 * description of autoload
 * 
 * @author juanse
 */
try {
    $conector = new PDO("mysql:dbname=miproyecto;host=127.0.0.1","root","");
    echo"conexion exitosa";
}  catch (Exception $ex) {
    echo "fallo de conexion" .$ex->getmessage();


}

class base_datos {
        private $gbd;
  

    function __construct($driver, $base_datos, $host, $user, $pass){
        $conection = $driver . ":dbname=" . $base_datos . ";host=$host";
        $this->gbd = new PDO($conection, $user, $pass);
        
        if (!$this->gbd){
            throw new exception("no se ha podido realizar la conexion");
        }
        
    }
    function select($tabla, $filtros = null, $arr_porepare = null, $orden= null, $limit = null){
        $sql = "select * from" . $tabla;
        if ($filtros != null){
            $sql .= "where" . $filtros;
        }
        if ($orden != null){
            $sql .= "order by " . $orden;
        }
        if ($limit != null){
            $sql .= " limit " . $limit;
        }
        $resource = $this->gbd->prepare($sql);
        $resource->execute($arr_porepare);
        if ($resource){
            return $resource->fetchALL (PDO::FETCH_ASSOC);
        } else{
            throw new exception("no se pudo realizar la consulta de seleccion");
            
        }
    }
    function delete($tabla, $filtros = null, $arr_prepare = null){
        //implementacion de nuestra funcion
        $sql = "DELETE FROM" .$tabla . "WHERE" . $filtros;
        
        $resource = $this->gbd->prepare($sql);
        $resource->execute($arr_prepare);
        if ($resource){
            return true;
        } else {
            throw new Exception("no se pudo realizar la consulta de seleccion");
            
        }
    }
    function insert($tabla, $campos, $valores, $arr_prepare = null){
        //implementacion de nuestra funcion
        $sql = "INSERT INTO" . $tabla . "(" . $campos . ") VALUES ($valores)";
        
        $resource = $this->gbd->prepare(sql);
        $resource->execute($arr_prepare);
        if ($resource){
            return $this->gbd->lastInsertId();
        } else {
            echo '<pre>';
            print_r($resource->errorinfo());
            echo '</pre>';
            throw new Exception("no se pudo realizar la consulta de la seleccion");
            
        }
        function update($tabla, $campos, $filtros, $arr_prepare = null){
        // implementacion de nuestra funcion
            $sql = "UPDATE" . $tabla . "set" . $campos . "WHERE" . $filtros;
            
            $resource = $this->gbd->prepare($sql);
            $resource->execute($arr_prepare);
            if ($resource) {
                return true;
            } else{
                
                echo '<pre';
                print_r($resource->errorInfo());
                echo '</pre>';
                throw new exception("no se pudo realizar la consulta de la seleccion");
                
                
            }
            
        }
            
        
        
           
    }
    
        
            
        
        
    
        
    }
