<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$marca = validate($_POST['marca']);
	$modelo = validate($_POST['modelo']);
	$color = validate($_POST['color']);
	$comentario = validate($_POST['comentario']);
	$cantidad_lavadoras = validate($_POST['cantidad_lavadoras']);
	$valor_carga = validate($_POST['valor_carga']);
	$peso = validate($_POST['peso']);

	$user_data = 'marca='.$marca. '&modelo='.$modelo. '&color='.$color. '&comentario='.$comentario. '&cantidad_lavadoras='.$cantidad_lavadoras. '&valor_carga='.$valor_carga. '&peso='.$peso;

	if (empty($marca)) {
		header("Location: ../index.php?error=marca is required&$user_data");
	}else if (empty($modelo)) {
		header("Location: ../index.php?error=modelo is required&$user_data");
	}
	else if (empty($color)) {
		header("Location: ../index.php?error=color is required&$user_data");
	}
	else if (empty($comentario)) {
		header("Location: ../index.php?error=comentario is required&$user_data");
	}
	else if (empty($cantidad_lavadoras)) {
		header("Location: ../index.php?error=cantidad de lavadoras is required&$user_data");
	}
	else if (empty($valor_carga)) {
		header("Location: ../index.php?error=valor de carga is required&$user_data");
	}
	else if (empty($peso)) {
		header("Location: ../index.php?error=peso is required&$user_data");
	}
	else {

       $sql = "INSERT INTO users(marca, modelo, color, comentario, cantidad_lavadoras, valor_carga, peso) 
               VALUES('$marca', '$modelo', '$color', '$comentario', '$cantidad_lavadoras', '$valor_carga', '$peso')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}