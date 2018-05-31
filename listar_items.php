
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
            
            <form action="listado_registrar.php" method="POST" enctype="multipart/form-data">
            
                <div class="panel panel-default">				

                    <div class="panel-heading text-primary text-center">
                        <h4 class="panel-title">REGISTRO DE ITEMS</h4>
                    </div>

                    <div class="panel-body">
						<div class="row">
							<div class="form-group col-lg-2 col-md-2 col-sm-4">
							   <label for="item">Item</label>
							   <input type="number" id="item" name="item" class="form-control" min="1" max="1000" required="" autocomplete="off">
							</div>							
                        </div>						
						<div class="row">
							<div class="form-group col-12">
								<label for="descripcion">Descripcion</label>
								<input type="text" id="descripcion" name="descripcion" class="form-control" required="" autocomplete="off">
							</div>
                        </div>						
						<div class="row">
							<div class="form-group col-lg-6">
								<label for="precio">Precio por unidad (S/.)</label>
								<input type="number" id="precio" name="precio_unit" class="form-control"  required="" autocomplete="off">                            
							</div>
							<div class="form-group col-lg-6">
								<label for="cantidad">Unidades</label>
								<input type="number" id="stock" name="cantidad" class="form-control" min="1" max="1000" required="" autocomplete="off">
							</div>
                        </div>         

                    </div>

                    <div class="panel-footer">
                        <input type="submit" value="Registrar" class="btn btn-outline-primary"/>
                    </div>

                </div>
                
            </form>
            
        </div>
        
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
    </body>
</html>

