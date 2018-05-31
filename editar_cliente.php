<?php
require_once './classes/common/Constantes.php';
require_once './classes/common/Conexion.php';
require_once './classes/dao/ClientesDAO.php';
require_once './classes/dto/Cliente.php';
require_once './classes/common/Flash.php';

$id = $_GET['id'];  
$cliente = ClientesDAO::obtener($id);
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
        <div class="container">
            
            <form action="editar_clienteCod.php" method="POST" enctype="multipart/form-data">
            
                <div class="panel panel-default">				

                    <div class="panel-heading text-primary text-center">
                        <h4 class="panel-title">EDITAR CLIENTE</h4>
                    </div>

                    <div class="panel-body">
						<div> 
                       		<label for="id"></label>
                            <input type="hidden" id="id" name="id" class="form-control" required="" placeholder="Ingrese el id" value="<?=$cliente->id?>">
                       	</div>
						
						<div class="row">
							<div class="form-group col-lg-6 col-md-6 col-sm-6 col-sm-xs-6">
							   <label for="nombre">Nombre</label>
							   <input type="text" id="nombre" name="nombre" class="form-control" min="1" max="1000" autocomplete="off" value="<?=$cliente->nombre?>">
							</div>
							<div class="form-group col-lg-6 col-md-6 col-sm-6 col-sm-xs-6">
								<label for="mes">Mes</label>
								<input type="text" id="mes" name="mes" class="form-control" required="" autocomplete="off" value="<?=$cliente->mes?>">
							</div>
                        </div>						
						
                    </div>

                    <div class="panel-footer">
                        <input type="submit" value="editar" class="btn btn-outline-primary btn-sm"/>
                    </div>

                </div>
                
            </form>
            
        </div>
        
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
    </body>
</html>

