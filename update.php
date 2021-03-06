<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualizacion de listado</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Editar Listado Camiones</h4><hr><br>
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
		           value="<?=$row['marca'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="modelo">Modelo</label>
		     <input type="modelo" 
		           class="form-control" 
		           id="modelo" 
		           name="modelo" 
		           value="<?=$row['modelo'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="color">Color</label>
		     <input type="text" 
		           class="form-control" 
		           id="color" 
		           name="color" 
		           value="<?=$row['color'] ?>">
		   </div>
		   <div class="form-group">
		     <label for="comentario">Comentario</label>
		     <input type="comentario" 
		           class="form-control" 
		           id="comentario" 
		           name="comentario" 
		           value="<?=$row['comentario'] ?>">
		   </div>
		   <div class="form-group">
		     <label for="cantidad_lavadoras">Cantidad de Lavadoras</label>
		     <input type="cantidad_lavadoras" 
		           class="form-control" 
		           id="cantidad_lavadoras" 
		           name="cantidad_lavadoras" 
		           value="<?=$row['cantidad_lavadoras'] ?>">
		   </div>
		   <div class="form-group">
		     <label for="valor_carga">Valor de la carga</label>
		     <input type="valor_carga" 
		           class="form-control" 
		           id="valor_carga" 
		           name="valor_carga" 
		           value="<?=$row['valor_carga'] ?>">
		   </div>
		   <div class="form-group">
		     <label for="peso">Peso de la carga</label>
		     <input type="peso" 
		           class="form-control" 
		           id="peso" 
		           name="peso" 
		           value="<?=$row['peso'] ?>">
		   </div>
		   <div class="form-group">
		     <label for="lavadora_id">ID de lavadora</label>
		     <input type="lavadora_id" 
		           class="form-control" 
		           id="lavadora_id" 
		           name="lavadora_id" 
		           value="<?=$row['lavadora_id'] ?>">
		   </div>
		   <div class="form-group">
		     <label for="nombre">Marca de lavadora</label>
		     <input type="nombre" 
		           class="form-control" 
		           id="nombre" 
		           name="nombre" 
		           value="<?=$row['nombre'] ?>">
		   </div>
		   <div class="form-group">
		     <label for="tipo">Modelo de lavadora</label>
		     <input type="tipo" 
		           class="form-control" 
		           id="tipo" 
		           name="tipo" 
		           value="<?=$row['tipo'] ?>">
		   </div>
		   <div class="form-group">
		     <label for="valor">valor de lavadora</label>
		     <input type="valor" 
		           class="form-control" 
		           id="valor" 
		           name="valor" 
		           value="<?=$row['valor'] ?>">
		   </div>
		   <div class="form-group">
		     <label for="peso_lavadora">Peso de lavadora</label>
		     <input type="peso_lavadora" 
		           class="form-control" 
		           id="peso_lavadora" 
		           name="peso_lavadora" 
		           value="<?=$row['peso_lavadora'] ?>">
		   </div>

		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>