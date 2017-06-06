<?php

$usuario = isset($_POST['usuario'])? $_POST['usuario']:"";

try {

	$pdo = new PDO('mysql:host=localhost;dbname=proyecto_final', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec("SET NAMES 'utf8'");
	if ($usuario == ""){
		$consulta= $pdo->prepare("SELECT id_usuario, nombre, primer_apellido, segundo_apellido, telefono, telefono_sms, email, direccion, nombre_curso 
			FROM usuarios");
	}else{
		$consulta= $pdo->prepare("SELECT id_usuario, nombre, primer_apellido, segundo_apellido, telefono, telefono_sms, email, direccion, nombre_curso 
			FROM usuarios WHERE nombre LIKE '%".$usuario."%' OR primer_apellido LIKE '%".$usuario."%' OR segundo_apellido LIKE '%".$usuario."%' OR email LIKE '%".$usuario."%'
			OR nombre_curso LIKE '%".$usuario."%'");
	}
	$consulta->execute();
	
	$a_retornar = "";
	$a_retornar = "<table class='table table-hover'>
			<thead>
				<th>Nombre</th>
				<th>Primer Apellido</th>
				<th>Segundo Apellido</th>
				<th>Teléfono</th>
				<th>Teléfono sms</th>
				<th>Email</th>
				<th>Dirección</th>
				<th>Curso</th>
				<th>Administrar</th>
			</thead>
			<tbody>
			<div id='tr_datos'>";
		
	foreach ($consulta->fetchAll(PDO::FETCH_OBJ) as $r){
		$a_retornar .= "<tr>
							<td>".$r->nombre."</td>
							<td>".$r->primer_apellido."</td>
							<td>".$r->segundo_apellido."</td>
							<td>".$r->telefono."</td>
							<td>".$r->telefono_sms."</td>
							<td>".$r->email."</td>
							<td>".$r->direccion."</td>
							<td>".$r->nombre_curso."</td>
							<td><input type='button' class='btn btn-primary' id='".$r->id_usuario."' onclick='editarUser(this.id)' value='Editar'></input></td>";
		$a_retornar .= "</tr>";
	}
	$a_retornar .= "</div></tbody></table>";
	echo $a_retornar;
	$pdo=null;	// cerramos la conexion
} catch(Exception $e){
	die($e->getMessage());
	}

?>