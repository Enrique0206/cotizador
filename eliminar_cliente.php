<?php

require_once './classes/common/Constantes.php';
require_once './classes/common/Conexion.php';
require_once './classes/dao/ClientesDAO.php';
require_once './classes/dto/Cliente.php';
require_once './classes/common/Flash.php';

try {
    
    $id = $_GET['id'];    
    
    ClientesDAO::eliminar($id); // le damos el parametro a eliminar
	
    Flash::success('Producto eliminado satisfactoriamente');//aviso de cambio de estado
    
    header('location:cliente_items.php');//se redirecciona una vez actualizado
    
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}