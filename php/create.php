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
	$lavadora_id = validate($_POST['lavadora_id']);
	$nombre = validate($_POST['nombre']);
	$tipo = validate($_POST['tipo']);
	$valor = validate($_POST['valor']);
	$peso_lavadora = validate($_POST['peso_lavadora']);

	$user_data = 'marca='.$marca. '&modelo='.$modelo. '&color='.$color. '&comentario='.$comentario. '&cantidad_lavadoras='.$cantidad_lavadoras. '&valor_carga='.$valor_carga. '&peso='.$peso. '&lavadora_id='.$lavadora_id. '&nombre='.$nombre. '&tipo='.$tipo. '&valor='.$valor. '&peso_lavadora='.$peso_lavadora;

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
	else if (empty($lavadora_id)) {
		header("Location: ../index.php?error=id de lavadora is required&$user_data");
	}
	else if (empty($nombre)) {
		header("Location: ../index.php?error=nombre is required&$user_data");
	}
	else if (empty($tipo)) {
		header("Location: ../index.php?error=tipo is required&$user_data");
	}
	else if (empty($valor)) {
		header("Location: ../index.php?error=valor de lavadora is required&$user_data");
	}
	else if (empty($peso_lavadora)) {
		header("Location: ../index.php?error=peso de lavadora is required&$user_data");
	}
	else {

       $sql = "INSERT INTO users(marca, modelo, color, comentario, cantidad_lavadoras, valor_carga, peso, lavadora_id, nombre, tipo, valor, peso_lavadora) 
               VALUES('$marca', '$modelo', '$color', '$comentario', '$cantidad_lavadoras', '$valor_carga', '$peso', '$lavadora_id', '$nombre', '$tipo', '$valor', '$peso_lavadora')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}