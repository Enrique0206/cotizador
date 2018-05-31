<?php
require_once './classes/common/Constantes.php';
require_once './classes/common/Conexion.php';
require_once './classes/dao/ClientesDAO.php';
require_once './classes/dto/Cliente.php';
date_default_timezone_set("America/Lima");
$dato = ClientesDAO::listar();  
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
                    	<h4 class="panel-title">DATOS DEL CLIENTE</h4>
                  	</div>    					
        
  					<div class="panel-body table-responsive">   					 
  						<table class="table table-hover">
         					<thead>
                	 			<tr class="text-center">
                    				
									<th>NOMBRE</th>
                        			<th>MES DE COTIZACION</th>                           			          			
                        			<th width="50"></th>
                        			<th width="50"></th>
                   				</tr>
            				</thead>
        		
                			<tbody>
                   			<?php foreach ($dato as $cliente) { ?>								
                    			<tr class="text-center">                  					
                    				<td><?=$cliente->nombre?></td>
									<td><?=$cliente->mes?></td>									               			
									<td><a href="editar_cliente.php?id=<?=$cliente->id?>" class="btn btn-warning btn-sm" >Editar</a></td>                         			
                        			<!--<td><a href="eliminar_cliente.php?id=<?=$cliente->id?>" class="btn btn-danger"></i> Eliminar</a></td>-->          	                                         
                    			</tr>                   
       	     				<?php }?>
              				</tbody>
							
        				</table>			
					</div>
        
					<div class="row container mt-5 ml-4">
						<div class="form-group col">
							<a href="listado_items.php" class="btn btn-outline-primary btn-sm">Siguiente</a>
						</div>
					</div>		
					
					<!--<div class="row container mt-5 ml-5">
						<div class="form-group col">
							<a href="listar_clientes.php" class="btn btn-success">Regresar</a>
						</div>
					</div>	-->
									
				</div>	
    			<!-- Table -->
  			
			
		</div> 	
        
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
    </body>
</html>


