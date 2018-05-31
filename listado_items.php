<?php
require_once './classes/common/Constantes.php';
require_once './classes/common/Conexion.php';
require_once './classes/dao/ListadosDAO.php';
require_once './classes/dto/Listado.php';
date_default_timezone_set("America/Lima");
$lista = ListadosDAO::listar();  
?>

<html>
    <head lang="es">
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        
        
    </head>
    <body>
       
		
		<div id="contenido" class="container">	
 
				<!-- Table -->
				<div class="panel panel-default">				
    
					<div class="panel-heading text-primary text-center">
                    	<h4>LISTA DE PRODUCTOS</h4>
                  	</div>    					
        
  					<div class="panel-body table-responsive">   					 
  						<table class="table table-hover">
         					<thead>
                	 			<tr class="text-center">
                    				
									<th>ITEM</th>
                        			<th>DESCRIPCION</th>                        			
                        			<th>PRECIO UNIT (S./)</th>
									<th>CANTIDAD</th>
                        			<th>TOTAL (S./)</th>                			
                        			<th width="50"></th>
                        			<th width="50"></th>
                   				</tr>
            				</thead>
        		
                			<tbody>
                   			<?php 
							$suma = 0;//Prueba
							foreach ($lista as $listado) {
								$suma = $suma +$listado->getSubtotal();
								?>
                    			<tr class="text-center">                  					
                    				<td><?=$listado->item?></td>
									<td><?=$listado->descripcion?></td>
									<td><?=$listado->precio_unit?></td>                                
                        			<td><?=$listado->cantidad?></td>                          
                        			<td><?=$listado->getSubtotal()?></td>                 			
									<td><a href="editar_items.php?id=<?=$listado->id?>" class="btn btn-warning btn-sm" >Editar</a></td>                         			
                        			<td><a href="eliminar_items.php?id=<?=$listado->id?>" class="btn btn-danger btn-sm"></i> Eliminar</a></td>            	                                         
                    			</tr>                   
       	     				<?php }?>
              				</tbody>    
							<tfoot>								
								<tr class="text-center">
									<td></td>
									<td></td>
									<td></td>									
									<td class="shadow-none p-3 mb-5 bg-light rounded text-primary">Monto Total</td>
									<td class="shadow-none p-3 mb-5 bg-light rounded">S/. <?php echo $suma; ?></td>
								</tr>								
							</tfoot>
        				</table>			
					</div>
        
					<div>						
							<a href="listar_items.php" class="btn btn-outline-primary btn-sm">Nuevo Item</a>					
							<a href="cliente_items.php" class="btn btn-outline-warning btn-sm">Editar Cliente</a>											
					</div>	
					
					<div class="mt-5">
						<form action="form_cod.php" method="post">							
								<input type="submit" name="create_pdf" class="btn btn-outline-success btn-sm" value="Generar PDF">
						</form>	
					</div>
					
								
				</div>	
    			<!-- Table -->
  			
			
		</div> 	
        
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
    </body>
</html>




