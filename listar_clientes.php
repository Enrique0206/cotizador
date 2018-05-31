
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
            
            <form action="cliente_registrar.php" method="POST" enctype="multipart/form-data">
            
                <div class="panel panel-default">				

                    <div class="panel-heading">
                        <h4 class="panel-title"></h4>
                    </div>
					<div class="jumbotron jumbotron-fluid">
						<div class="container">
						  <h1 class="display-4">Registro del cliente</h1>
						  <p class="lead">Ingrese el nombre de la empresa. Ingrese el dia y mes, por ejemplo: 25 de diciembre</p>
						</div>
					</div>

                    <div class="panel-body">
						<div class="row">
							<div class="form-group col-lg-2 col-md-2 col-sm-4">
							   <label for="nombre">Nombre</label>
							   <input type="text" id="nombre" name="nombre" class="form-control" min="1" max="100" required="" autocomplete="off" placeholder="Ingresar Nombre de la Empresa">
							</div>							
                        </div>						
						<div class="row">
							<div class="form-group col-12">
								<label for="mes">Dia y Mes</label>
								<input type="text" id="mes" name="mes" class="form-control" required="" autocomplete="off" placeholder="ejemplo: 25 de Diciembre">
							</div>
                        </div>	
                    </div>

                    <div class="panel-footer">
                        <input type="submit" value="Registrar" class="btn btn-primary"/>
                    </div>

                </div>
                
            </form>
            
        </div>
        
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
    </body>
</html>

