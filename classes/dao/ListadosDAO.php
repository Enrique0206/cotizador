<?php

 class ListadosDAO {
	 
	 public static function listar (){
		 
		 $con = Conexion::getConexion();
		 
		 $sql = "select id,item,descripcion,precio_unit,cantidad
				from cotizacion";
		 
		 $stmt = $con->prepare($sql);
		 $stmt->execute();
		 
		 $lista = [];
		 
		 while ($registro = $stmt->fetchObject('listado')){
			 $lista[]=$registro;
		 }
		
		 return $lista;
	 }
	 
	 
	  public static function registrar($listado) {
        
        $con = Conexion::getConexion();
        
        $sql = "insert into cotizacion (item, descripcion, precio_unit, cantidad)
                values (:item, :descripcion, :precio_unit, :cantidad)";
        
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':item', $listado->item);
        $stmt->bindParam(':descripcion', $listado->descripcion);
        $stmt->bindParam(':precio_unit', $listado->precio_unit);
        $stmt->bindParam(':cantidad', $listado->cantidad);            
        $stmt->execute();        
    }
	
	
	public static function obtener($id){
		
		$con = Conexion::getConexion();
		
		  $sql = "select id,item,descripcion,precio_unit,cantidad
				from cotizacion				
				where id = :id";
				
		$stmt = $con->prepare($sql);
		
		$stmt->bindParam(':id', $id);
		
		$stmt->execute();
		
		if($registro = $stmt->fetchObject('Listado')){
			return $registro;
			}
		}	
	
	public static function actualizar($listado) {
	        
            
        $sql = "update cotizacion set item=:item, descripcion=:descripcion, precio_unit=:precio_unit
                   cantidad=:cantidad
                   where id = :id";
            
        $con = Conexion::getConexion();
		
        $stmt = $con->prepare($sql);
		$stmt->bindParam(':id', $listado->id);
        $stmt->bindParam(':item', $listado->item);
        $stmt->bindParam(':descripcion', $listado->descripcion);
        $stmt->bindParam(':precio_unit', $listado->precio_unit);
        $stmt->bindParam(':cantidad', $listado->cantidad);     
        $stmt->execute();       
    }
	
	
	public static function eliminar($id){
		
		$con = Conexion::getConexion();
		
		$sql = "delete from cotizacion where id = :id";
		
		$stmt = $con->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();		
		}
	 
 }