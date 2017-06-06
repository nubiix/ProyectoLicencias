<?php

	$tipoLicencia = $_POST["tipoLicencia"];
	$idAlumno = $_POST["idAlumno"];

	try {
	$pdo = new PDO('mysql:host=localhost;dbname=proyecto_final', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->query("set names 'utf8'");

	$sistemas = $pdo->prepare("SELECT id_clave FROM claves where nombre = ? and ref_id_relacion IS NULL LIMIT 1 ");
	
	$sistemas->execute(array($tipoLicencia));

	foreach ($sistemas->fetchAll(PDO::FETCH_OBJ) as $r){
		$licencia = $r->id_clave;
	}
	echo $licencia;

	$asignar = $pdo->prepare("INSERT INTO usuarios_clave (ref_id_clave, ref_id_usuario) values(?,?)");
	$asignar->execute(array($licencia,$idAlumno));


	$select = $pdo->prepare("SELECT id_relacion FROM usuarios_clave WHERE ref_id_clave = ?");
	$select->execute(array($licencia));
	foreach ($select->fetchAll(PDO::FETCH_OBJ) as $k){
		$relacion = $k->id_relacion;
	}

	echo $relacion;

	$update = $pdo->prepare("UPDATE claves SET ref_id_relacion = ? WHERE id_clave = ?");
	$update->execute(array($relacion,$licencia));

	$pdo=null;	// cerramos la conexion
} catch(Exception $e){
	die($e->getMessage());
}





?>