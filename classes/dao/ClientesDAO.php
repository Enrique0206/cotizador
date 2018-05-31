<?php

class ClientesDAO{
	public static function listar(){
		$con = Conexion::getConexion();
		$sql = "select id,nombre,mes
				from empresa";
		$stmt = $con->prepare($sql);
		$stmt->execute();
		
		$lista = [];
		
		while($registro = $stmt->fetchObject('cliente')){
			$lista[]=$registro;
		}
		return $lista;
	}
	
	 public static function registrar($cliente) {
        
        $con = Conexion::getConexion();
        
        $sql = "insert into empresa (nombre, mes)
                values (:nombre, :mes)";
        
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':nombre', $cliente->nombre);
        $stmt->bindParam(':mes', $cliente->mes);
                 
        $stmt->execute();        
    }
	
	public static function obtener($id){
		
		$con = Conexion::getConexion();
		
		  $sql = "select id,nombre,mes
				from empresa			
				where id = :id";
				
		$stmt = $con->prepare($sql);
		
		$stmt->bindParam(':id', $id);
		
		$stmt->execute();
		
		if($registro = $stmt->fetchObject('cliente')){
			return $registro;
			}
		}
		
		public static function actualizar($cliente) {	        
            
        $sql = "update empresa set nombre=:nombre, mes=:mes
                where id = :id";
            
        $con = Conexion::getConexion();
		
        $stmt = $con->prepare($sql);
		$stmt->bindParam(':id', $cliente->id);
        $stmt->bindParam(':nombre', $cliente->nombre);
        $stmt->bindParam(':mes', $cliente->mes);         
        $stmt->execute();       
    }
	
	public static function eliminar($id){
		
		$con = Conexion::getConexion();
		
		$sql = "delete from empresa where id = :id";
		
		$stmt = $con->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();		
		}
}



