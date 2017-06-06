<?php

	$id=isset($_POST["usuario"])?$_POST["usuario"]:"";
	$pdo = new PDO('mysql:host=localhost;dbname=proyecto_final', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec("SET NAMES 'utf8'");
	$consulta= $pdo->prepare("SELECT * FROM usuarios WHERE id_usuario=$id");
	$consulta->execute();
	
	
	$a_retornar = "";
	foreach ($consulta->fetchAll(PDO::FETCH_OBJ) as $value) {
	  if($value->expediente == null ){
	   $a_retornar.= '<form class="form-horizontal" method="post" id="actualizarUser" action="/Proyecto_Licencias/public/admin/actualizaruser">
		<div class="form-group">
			<label for="nombre" class="col-xs-3 control-label">Nombre del profesor</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="nombre" name="nombre" value="'.$value->nombre.'">
			</div>
		</div>
		<div class="form-group">
			<label for="primer_apellido" class="col-xs-3 control-label">Primer apellido</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="primer_apellido" name="primer_apellido" value="'.$value->primer_apellido.'">
			</div>
		</div>

		<div class="form-group">
			<label for="segundo_apellido" class="col-xs-3 control-label">Segundo apellido</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" value="'.$value->segundo_apellido.'">
			</div>
		</div>
        
        <div class="form-group">
			<label for="departamento" class="col-xs-3 control-label">Departamento</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="departamento" name="departamento" value="'.$value->departamento.'">
			</div>
		</div>
		<div class="form-group">
			<label for="nif_nie" class="col-xs-3 control-label">NIF o NIE</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="nif_nie" name="nif_nie" value="'.$value->nif_nie.'">
			</div>
		</div>
		<div class="form-group">
			<label for="telefono_sms" class="col-xs-3 control-label">Telefono sms</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="telefono_sms" name="telefono_sms" value="'.$value->telefono_sms.'">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-xs-3 control-label">Email</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="email" name="email" value="'.$value->email.'">
			</div>
		</div>
		<div class="form-group">
			<label for="direccion" class="col-xs-3 control-label">direccion</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="direccion" name="direccion" value="'.$value->direccion.'">
			</div>
		</div>
		<div class="form-group">
			<label for="numero_afiliacion" class="col-xs-3 control-label">numero de afiliacion</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="numero_afiliacion" name="numero_afiliacion" value="'.$value->numero_afiliacion.'">
			</div>
		</div>
		<input type="hidden" id="id" name="id" value="'.$value->id_usuario.'">
		<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				<button type="button" id="comprobar" class="btn btn-default" onclick="actualizar()">Actualizar!</button>
			</div>
		</div>
	</form>';
	  }else{
	     $a_retornar.= '<form class="form-horizontal" id="actualizarUser" method="post" action="/Proyecto_Licencias/public/admin/actualizaruser">
		<div class="form-group">
		<label for="nombre_curso" class="col-xs-3 control-label">Nombre del curso</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="nombre_curso" name="nombre_curso" value="'.$value->nombre_curso.'">
			</div>
		</div>
		<div class="form-group">
			<label for="numero_lista" class="col-xs-3 control-label">Numero de lista</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="numero_lista" name="numero_lista" value="'.$value->numero_lista.'"">
			</div>
		</div>

		<div class="form-group">
			<label for="nombre" class="col-xs-3 control-label">Nombre del alumno</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="nombre" name="nombre" value="'.$value->nombre.'">
			</div>
		</div>
		<div class="form-group">
			<label for="primer_apellido" class="col-xs-3 control-label">Primer apellido</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="primer_apellido" name="primer_apellido" value="'.$value->primer_apellido.'">
			</div>
		</div>

		<div class="form-group">
			<label for="segundo_apellido" class="col-xs-3 control-label">Segundo apellido</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" value="'.$value->segundo_apellido.'">
			</div>
		</div>

		<div class="form-group">
			<label for="cial" class="col-xs-5 control-label">CIAL</label>
			<div class="col-xs-7">
				<input type="text" class="form-control" id="cial" name="cial" value="'.$value->cial.'">
			</div>
		</div>

		<div class="form-group">
			<label for="expediente" class="col-xs-5 control-label">Expediente</label>
			<div class="col-xs-7">
				<input type="text" class="form-control" id="expediente" name="expediente" value="'.$value->expediente.'">
			</div>
		</div>

		<div class="form-group">
			<label for="nif_nie" class="col-xs-3 control-label">NIF o NIE</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="nif_nie" name="nif_nie" value="'.$value->nif_nie.'">
			</div>
		</div>

		<div class="form-group">
			<label for="telefono" class="col-xs-3 control-label">Telefono</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="telefono" name="telefono" value="'.$value->telefono.'">
			</div>
		</div>

		<div class="form-group">
			<label for="telefono_sms" class="col-xs-3 control-label">Telefono sms</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="telefono_sms" name="telefono_sms" value="'.$value->telefono_sms.'">
			</div>
		</div>

		<div class="form-group">
			<label for="email" class="col-xs-3 control-label">Email</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="email" name="email" value="'.$value->email.'">
			</div>
		</div>
		<input type="hidden" id="id" name="id" value="'.$value->id_usuario.'">
		<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				<button type="button" id="comprobar" class="btn btn-default" onclick="actualizar()" >Actualizar!</button>
			</div>
		</div>
	</form>';
	  }
	
	}
	
	echo $a_retornar;
?>