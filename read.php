<?php include "php/read.php"; ?>
<?php require "reporte.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Agregar Camiones</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body><h4 class="display-4 text-center">Listado de camiones</h4><br>
	<div class="container ">
	<div class="link-right">
				<button class = "btn btn-warning"><a href="index.php" class="link-primary">Agregar</a></button>
			</div>
		<div class="box d-flex justify-content-center">
			
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped" >
			  <thead>
			  
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Marca</th>
			      <th scope="col">Modelo</th>
			      <th scope="col">Color</th>
				  <th scope="col">Comentario</th>
			      <th scope="col">Cant. lavadoras</th>
			      <th scope="col">Valor Carga</th>
				  <th scope="col">Peso</th>
				  <th scope="col">Lavadora id</th>
				  <th scope="col">Marca</th>
				  <th scope="col">Modelo</th>
				  <th scope="col">Valor</th>
				  <th scope="col">Peso lavadora</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['marca']?></td>
			      <td><?php echo $rows['modelo']; ?></td>
				  <td><?php echo $rows['color']; ?></td>
				  <td><?php echo $rows['comentario']; ?></td>
				  <td><?php echo $rows['cantidad_lavadoras']; ?></td>
				  <td><?php echo $rows['valor_carga']; ?></td>
				  <td><?php echo $rows['peso']; ?></td>
				  <td><?php echo $rows['lavadora_id']; ?></td>
				  <td><?php echo $rows['nombre']; ?></td>
				  <td><?php echo $rows['tipo']; ?></td>
				  <td><?php echo $rows['valor']; ?></td>
				  <td><?php echo $rows['peso_lavadora']; ?></td>
			      </td>
				  <td><a href="reporte.php"
			      	     class="btn btn-success">Ver reporte</a>

			      	
			      </td>
			      <td><a href="update.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-success">Update</a>

			      	  <a href="php/delete.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			
		</div>
	</div>
</body>
</html>