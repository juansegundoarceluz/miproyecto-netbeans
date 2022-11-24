<?php


//include '../class/data_base.php';
//include '../class/categorias.php';


include '../class/autoload.php';
 
if(isset($_POST['accion']) && $_POST['accion'] == 'guardar'){
     $miCategoria = new Categorias ();
     $miCategoria->nombre = $_POST['categoria'];
     $miCategoria->guardar();
 
     
}else if(isset($_GET['add'])){
     include 'views/categorias.html';
     die();
}
 
 $lista_ctg = categorias::listar();
 include 'views/lista_categorias.html';

