<?php
require_once './classes/common/Constantes.php';
require_once './classes/common/Conexion.php';
require_once './classes/dao/ListadosDAO.php';
require_once './classes/dto/Listado.php';
require_once './classes/dao/ClientesDAO.php';
require_once './classes/dto/Cliente.php';
date_default_timezone_set("America/Lima");
$lista = ListadosDAO::listar();  
$dato = ClientesDAO::listar();
?>
<!doctype html>
<html lang="es">
	<head>
		<title>Generar PDF con PHP</title>
		<meta charset="UTF-8">		
		
		<style>				
			
			.direccion {
				margin: 3px;
				font-size: 10px;
				padding-left: 500px;			
			}
			
			h2 {
				text-align: center;
				font-size: 22px;    
				margin-top: 40px;
				margin-bottom: 40px;
			}

			.parrafo {
				font-size: 13px;
				margin: 10px;
				padding-left: 10px;
				padding-right: 10px;
			}

			table{
				margin-top: 20px;
				margin-left: 20px;
				border: 1px solid #c7c7c7;
				border-collapse: collapse;
				text-align: center;
			}			
		

			.contenido {
				font-size: 13px;
			}

			

			.tex_firma {
				font-size: 20px;
				margin: 2px;
				
 

			.nota {
				padding-top: 20px;
				padding-left: 16px;
				font-size: 10px;
			}
		</style>
	</head>
	<body>	
		
		<div>
			<img style="padding-top:50px" src="./img/logo_direccion.jpg" alt="logo"/>	
			
		</div>
		
		<div>
			<?php foreach($dato as $cliente){ ?>
			<h2>COTIZACION</h2>			
			<p class="parrafo">Estimado señor: </p>
			<p style="margin-left:20px"><strong><?=$cliente->nombre?></strong></p>
			<p class="parrafo">Por medio de esta carta le presento la cotización en función a los servicios solicitados.</p>
			<?php } ?>
		</div>	
		
		
		<table>
			<thead>
			  <tr style="background:#eaeaea">				  
				<th style="border:1px solid #c7c7c7;width:50px">Items</th>
				<th style="border:1px solid #c7c7c7;width:400px;height: auto">Descripcion</th>				
				<th style="border:1px solid #c7c7c7;width:80px">Precio Unit. (S/.)*</th>
				<th style="border:1px solid #c7c7c7;width:50px">Unid.</th>
				<th style="border:1px solid #c7c7c7;width:80px">Precio Total (S/.)*</th>
			  </tr>
			</thead>			
			<tbody>
                <?php 
				$suma = 0;//Prueba
					foreach ($lista as $listado) {
						$suma = $suma +$listado->getSubtotal();
				?>
                <tr>                  					
                    <td style="border:1px solid #c7c7c7;width:50px"><?=$listado->item?></td>
                    <td style="border:1px solid #c7c7c7;width:400px;text-align: justify"><?=$listado->descripcion?></td>
                    <td style="border:1px solid #c7c7c7;width:80px"><?=$listado->precio_unit?></td>                                
                    <td style="border:1px solid #c7c7c7;width:50px"><?=$listado->cantidad?></td>                          
                    <td style="border:1px solid #c7c7c7;width:80px"><?=$listado->getSubtotal()?></td>   								         	                                         
                </tr>                   
       	     	<?php }?>
            </tbody>  		
			<tfoot>							
				<tr>									
					<td colspan="3"></td>									
					<td style="background:#eaeaea;border:1px solid #c7c7c7">Monto Total</td>
					<td style="background:#eaeaea;border:1px solid #c7c7c7">S/. <?php echo $suma; ?></td>
				</tr>								
			</tfoot>
		</table>
		
		<div>
			<p class="parrafo" style="margin-bottom: 10px">Recuerde que esta cotización tiene validez durante los próximos 15 días a partir de la fecha. Para cualquier consulta e inquietud comunicarse a nuestra línea telefónica.</p>
			<p class="parrafo">Esperando una pronta respuesta, me despido cordialmente.</p>
		</div>
		
		<div style="margin-top:50px">		
			<p style="margin-left:20px">________________________</p>
			<p style="margin-left:50px; font-size: 13px">Gerente de Ventas</p>	
			
		</div>	
		<div style="margin-top:50px">
			<?php foreach($dato as $cliente){ ?>			
			<p style="padding-left:500px">Lima, <?php echo date("d") ?> de <?=$cliente->mes?> del <?php echo date("Y") ?></p>
			
			<?php } ?>
		</div>
		
		
		
	
	</body>
</html>