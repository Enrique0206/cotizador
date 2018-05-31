<?php
//var_dump($_POST);
require_once './classes/common/Constantes.php';
require_once './classes/common/Conexion.php';
require_once './classes/dao/ListadosDAO.php';
require_once './classes/dto/Listado.php';
require_once './classes/common/Flash.php';


try{   
    $listado = new Listado();
    $listado->item = $_POST['item'];
    $listado->descripcion = $_POST['descripcion'];
    $listado->precio_unit = $_POST['precio_unit'];
    $listado->cantidad = $_POST['cantidad'];
    
    
    
    ListadosDAO::registrar($listado);
    
    Flash::success('Registro guardado');
    
    header('location:listado_items.php');
        
} catch (Exception $ex) {
    die('Error: '  . $ex->getMessage());
}