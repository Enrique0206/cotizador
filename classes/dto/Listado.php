
<?php
class Listado {		
	public function getSubtotal(){
		
		$resultado = $this->cantidad * $this->precio_unit;
		return $resultado;
	}		
	
}