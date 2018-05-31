<?php
require_once './classes/common/Constantes.php';
require_once './classes/common/Conexion.php';
require_once './classes/dao/ListadosDAO.php';
require_once './classes/dto/Listado.php';
require_once './classes/common/Flash.php';

try {
    
    $id = $_GET['id'];    
    
    ListadosDAO::eliminar($id); // le damos el parametro a eliminar
	
    Flash::success('Producto eliminado satisfactoriamente');//aviso de cambio de estado
    
    header('location:listado_items.php');//se redirecciona una vez actualizado
    
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}