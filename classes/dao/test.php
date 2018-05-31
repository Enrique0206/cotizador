<?php

require_once '../common/Constantes.php';
require_once '../common/Conexion.php';
require_once '../dao/ListadosDAO.php';
require_once '../dto/Listado.php';
require_once '../dao/ClientesDAO.php';
require_once '../dto/Cliente.php';

//$lista = ListadosDAO::listar();

//var_dump($lista);

/*$listado = new Listado();
$listado->item = 6;
$listado->descripcion = 'reparaciones2';
$listado->precio_unit = 35;
$listado->cantidad = 1;
$listado->total_item = 35;

ListadosDAO::registrar($listado);

echo 'Producto registrado';*/

/*$lista = ClientesDAO::listar();
var_dump($lista);*/

/*$cliente = new Cliente();
$cliente->nombre = 'susu';
$cliente->mes = 'diciembre' ;


ClientesDAO::registrar($cliente);

echo 'Cliente registrado';*/

/*$cliente = ClientesDAO::obtener(1);
var_dump($cliente);*/