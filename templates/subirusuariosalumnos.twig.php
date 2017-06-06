{% extends 'plantillabase.twig.php '%}



{% block body %}
<div class="col-xs-6">
	<div class="row">
		<h1>Subir alumnos desde archivo CSV</h1>
	</div>
	<div class="row">
		<form method="POST" action="{{path_for('subirusuariosalumnospost')}}" enctype="multipart/form-data">
			<div class="form-group">
				<label for="subirxml">Subir alumnos</label>
				<input type="file" id="subirusuariosalumnos" name="subirusuariosalumnos">	
			</div>
			<button type="submit" class="btn btn-default">Enviar</button>
		</form>
	</div>
</div>
<div class="col-xs-6">
	<form class="form-horizontal" method="POST" action="{{path_for('subirusuariosalumnosmanual')}}">
		<div class="form-group">
		<label for="nombre_curso" class="col-xs-3 control-label">Nombre del curso(corto)</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="nombre_curso" name="nombre_curso" placeholder="nombre del curso">
			</div>
		</div>
		<div class="form-group">
		<label for="nombre_curso_largo" class="col-xs-3 control-label">Nombre del curso(largo)</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="nombre_curso_largo" name="nombre_curso_largo" placeholder="nombre del curso">
			</div>
		</div>
		<div class="form-group">
			<label for="numero_lista" class="col-xs-3 control-label">Numero de lista</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="numero_lista" name="numero_lista" placeholder="numero de lista">
			</div>
		</div>

		<div class="form-group">
			<label for="nombre" class="col-xs-3 control-label">Nombre del alumno</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre del alumno">
			</div>
		</div>
		<div class="form-group">
			<label for="primer_apellido" class="col-xs-3 control-label">Primer apellido</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="primer_apellido" name="primer_apellido" placeholder="primer apellido">
			</div>
		</div>

		<div class="form-group">
			<label for="segundo_apellido" class="col-xs-3 control-label">Segundo apellido</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" placeholder="segundo apellido">
			</div>
		</div>

		<div class="form-group">
			<label for="cial" class="col-xs-5 control-label">CIAL</label>
			<div class="col-xs-7">
				<input type="text" class="form-control" id="cial" name="cial" placeholder="cial">
			</div>
		</div>

		<div class="form-group">
			<label for="expediente" class="col-xs-5 control-label">Expediente</label>
			<div class="col-xs-7">
				<input type="text" class="form-control" id="expediente" name="expediente" placeholder="primer apellido">
			</div>
		</div>

		<div class="form-group">
			<label for="nif_nie" class="col-xs-3 control-label">NIF o NIE</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="nif_nie" name="nif_nie" placeholder="nif o nie">
			</div>
		</div>

		<div class="form-group">
			<label for="telefono" class="col-xs-3 control-label">Telefono</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono">
			</div>
		</div>

		<div class="form-group">
			<label for="telefono_sms" class="col-xs-3 control-label">Telefono sms</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="telefono_sms" name="telefono_sms" placeholder="telefono sms">
			</div>
		</div>

		<div class="form-group">
			<label for="email" class="col-xs-3 control-label">Email</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="email" name="email" placeholder="email">
			</div>
		</div>


		<!-- aqui no se si ocultar este elemento y cuando se importe a la base de datos poner en el campo password el mismo que el nif_nie para que la contra se la misma que el usuario, como solo quiero una vista general lo he puesto pero es ocultable -->
		<!-- <div class="form-group">
			<label for="password" class="col-xs-3 control-label">Contraseña</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="password" placeholder="contraseña">
			</div>
		</div> -->

		<!-- este div es para subir foto, pero me da pereza hacerlo ahora, asi que mas tarde hay que gestionar que suba una foto, se copie en el directorio del proyecto y en la base de datos se guarde la direccion que mas tarde se incluira en el src de la imagen -->
		<!--
		<div class="form-group">
			<label for="email" class="col-xs-3 control-label">Email</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="email" placeholder="email">
			</div>
		</div>
		-->

		
		<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				<button type="submit" class="btn btn-default">Agregar!</button>
			</div>
		</div>
	</form>


</div>

{% endblock %}