<!DOCTYPE html>
<html>
<head>
	<title>Gestion de camniones de Venta</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/create.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Gestion de camniones de Venta<</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="marca">Marca</label>
		     <input type="marca" 
		           class="form-control" 
		           id="marca" 
		           name="marca" 
		           value="<?php if(isset($_GET['marca']))
		                           echo($_GET['marca']); ?>" 
		           placeholder="digite la marca">
		   </div>

		   <div class="form-group">
		     <label for="modelo">Modelo</label>
		     <input type="modelo" 
		           class="form-control" 
		           id="modelo" 
		           name="modelo" 
		           value="<?php if(isset($_GET['modelo']))
		                           echo($_GET['modelo']); ?>"
		           placeholder="digite el modelo">
		   </div>
		   <div class="form-group">
		     <label for="color">Color</label>
		     <input type="text" 
		           class="form-control" 
		           id="color" 
		           name="color" 
		           value="<?php if(isset($_GET['color']))
		                           echo($_GET['color']); ?>"
		           placeholder="digite el Color">
		   </div>
		   <div class="form-group">
		     <label for="comentario">Comentario</label>
		     <input type="comentario" 
		           class="form-control" 
		           id="comentario" 
		           name="comentario" 
		           value="<?php if(isset($_GET['comentario']))
		                           echo($_GET['comentario']); ?>"
		           placeholder="digite el comentario">
		   </div>
		   <div class="form-group">
		     <label for="cantidad_lavadoras">Cantidad de Lavadoras</label>
		     <input type="cantidad_lavadoras" 
		           class="form-control" 
		           id="cantidad_lavadoras" 
		           name="cantidad_lavadoras" 
		           value="<?php if(isset($_GET['cantidad_lavadoras']))
		                           echo($_GET['cantidad_lavadoras']); ?>"
		           placeholder="digite la cantidad de lavadoras">
		   </div>
		   <div class="form-group">
		     <label for="valor_carga">Valor de la carga</label>
		     <input type="valor_carga" 
		           class="form-control" 
		           id="valor_carga" 
		           name="valor_carga" 
		           value="<?php if(isset($_GET['valor_carga']))
		                           echo($_GET['valor_carga']); ?>"
		           placeholder="digite el Valor de la carga">
		   </div>
		   <div class="form-group">
		     <label for="peso">Peso de la carga</label>
		     <input type="peso" 
		           class="form-control" 
		           id="peso" 
		           name="peso" 
		           value="<?php if(isset($_GET['peso']))
		                           echo($_GET['peso']); ?>"
		           placeholder="digite el peso de la carga">
		   </div>
		   <div class="form-group">
		     <label for="lavadora_id">ID de lavadora</label>
		     <input type="text" 
		           class="form-control" 
		           id="lavadora_id" 
		           name="lavadora_id" 
		           value="<?php if(isset($_GET['lavadora_id']))
		                           echo($_GET['lavadora_id']); ?>"
		           placeholder="digite el id de la lavadora">
		   </div>
		   <div class="form-group">
		     <label for="nombre">Marca de lavadora</label>
		     <input type="nombre" 
		           class="form-control" 
		           id="nombre" 
		           name="nombre" 
		           value="<?php if(isset($_GET['nombre']))
		                           echo($_GET['nombre']); ?>"
		           placeholder="digite marca de la lavadora">
		   </div>
		   <div class="form-group">
		     <label for="tipo">modelo de lavadora</label>
		     <input type="tipo" 
		           class="form-control" 
		           id="tipo" 
		           name="tipo" 
		           value="<?php if(isset($_GET['tipo']))
		                           echo($_GET['tipo']); ?>"
		           placeholder="digite el modelo de lavadora">
		   </div>
		   <div class="form-group">
		     <label for="valor">valor de lavadora</label>
		     <input type="valor" 
		           class="form-control" 
		           id="valor" 
		           name="valor" 
		           value="<?php if(isset($_GET['valor']))
		                           echo($_GET['valor']); ?>"
		           placeholder="digite el valor de la lavadora">
		   </div>
		   <div class="form-group">
		     <label for="peso_lavadora">Peso de lavadora</label>
		     <input type="peso_lavadora" 
		           class="form-control" 
		           id="peso_lavadora" 
		           name="peso_lavadora" 
		           value="<?php if(isset($_GET['peso_lavadora']))
		                           echo($_GET['peso_lavadora']); ?>"
		           placeholder="digite el peso de la lavadora">
		   </div>


		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Agregar</button>
				  <br>
				  <br>
				  <br>
		    <a href="read.php" class="link-primary">Listado</a>
	    </form>
	</div>
</body>
</html>