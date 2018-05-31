<?php

require_once './classes/common/Constantes.php';
require_once './classes/common/Conexion.php';
require_once './classes/dao/ClientesDAO.php';
require_once './classes/dto/Cliente.php';
require_once './classes/common/Flash.php';

try{
				
	$cliente = new Cliente();
	$cliente->id = $_POST['id'];
	$cliente->nombre = $_POST['nombre'];
    $cliente->mes = $_POST['mes'];
    


ClientesDAO::actualizar($cliente);

Flash::success('Registro actualizado satisfactoriamente');

header('location:cliente_items.php');
		
	
	
	} catch (Exception $ex){
		die('Error: ' . $ex->getMessage());
		}

