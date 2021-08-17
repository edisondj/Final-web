<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
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
	$id = validate($_POST['id']);

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
	}else {

       $sql = "UPDATE users
               SET marca='$marca', modelo='$modelo', color='$color', comentario='$comentario', cantidad_lavadoras='$cantidad_lavadoras', valor_carga='$valor_carga', peso='$peso'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}