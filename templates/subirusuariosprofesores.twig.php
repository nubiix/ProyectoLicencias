{% extends 'plantillabase.twig.php '%}



{% block body %}









<div class="col-xs-6">
	<div class="row">
		<h1>Subir profesores desde archivo CSV</h1>
	</div>
	<div class="row">
		<form method="POST" action="{{path_for('subirusuariosprofesorespost')}}" enctype="multipart/form-data">
			<div class="form-group">
				<label for="subirxml">Subir profesores</label>
				<input type="file" id="subirusuariosprofesores" name="subirusuariosprofesores">	
			</div>
			<button type="submit" class="btn btn-default">Enviar</button>
		</form>
	</div>
</div>
<div class="col-xs-6">
	<form class="form-horizontal" method="POST" action="{{path_for('subirusuariosalumnosmanual')}}">
		
		
		<div class="form-group">
			<label for="nombre" class="col-xs-3 control-label">Nombre del alumno</label>
			<div class="col-xs-9">
				<input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre del alumno">
			</div>
		</div>
		<div class="form-group">
			<label for="primer_apellido" class="col-xs-3 control-label">Primer apellido</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" name="primer_apellido" id="primer_apellido" placeholder="primer apellido">
			</div>
		</div>

		<div class="form-group">
			<label for="segundo_apellido" class="col-xs-3 control-label">Segundo apellido</label>
			<div class="col-xs-9">
				<input type="text" name="segundo_apellido" class="form-control" id="segundo_apellido" placeholder="segundo apellido">
			</div>
		</div>

		<div class="form-group">
			<label for="nif_nie" class="col-xs-3 control-label">NIF o NIE</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" name="nif_nie" id="nif_nie" placeholder="nif o nie">
			</div>
		</div>

		<div class="form-group">
			<label for="telefono_sms" class="col-xs-3 control-label">Telefono sms</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" name="telefono_sms" id="telefono_sms" placeholder="telefono sms">
			</div>
		</div>

		<div class="form-group">
			<label for="email" class="col-xs-3 control-label">Email</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="email" name="email" placeholder="email">
			</div>
		</div>
		
		<div class="form-group">
			<label for="direccion" class="col-xs-3 control-label">direccion</label>
			<div class="col-xs-9">
				<input type="text" name="direccion" class="form-control" id="direccion" placeholder="direccion">
			</div>
		</div>
		
		<div class="form-group">
			<label for="numero_afiliacion" class="col-xs-3 control-label">numero de afiliacion</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="numero_afiliacion" name="numero_afiliacion" placeholder="numero de afiliacion">
			</div>
		</div>

		<div class="form-group">
			<label for="curso_tutor" class="col-xs-3 control-label">tutor (poner nombre del curso del que es tutor)</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="curso_tutor" name="curso_tutor" placeholder="curso del que es tutor...">
			</div>
		</div>

		<!-- aqui pensaba que saliese un desplegable con todos los cursos posibles, para que el admin cuanado lo metiese, especificase de que curso es tutor, pero no  podria seleccionar mas de uno, cosa que la base de datos si permite, por lo que  como solucion he pensado en una opcion extra que pregutnase si es tutor de mas de un curso, y en caso de ser asi, crease x inputs igual al numero introducido para luego subirlo a la base de datos. Si se te ocurre algo mejor implementalo, si no, esto me parece una buena solucion -->

		
		<div class="form-group">
			<label for="direccion" class="col-xs-3 control-label">direccion</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion">
			</div>
		</div>
		
		<!-- aqui no se si ocultar este elemento y cuando se importe a la base de datos poner en el campo password el mismo que el nif_nie para que la contra se la misma que el usuario, como solo quiero una vista general lo he puesto pero es ocultable -->
		<!--<div class="form-group">
			<label for="password" class="col-xs-3 control-label">Contraseña</label>
			<div class="col-xs-9">
				<input type="text" class="form-control" id="password" placeholder="contraseña">
			</div>
		</div>
		-->
		<!-- este div es para subir foto, pero me da pereza hacerlo ahora, asi que mas tarde hay que gestionar que suba una foto, se copie en el directorio del proyecto y en la base de datos se guarde la direccion que mas tarde se incluira en el src de la imagen -->
		
		<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				<button type="submit" class="btn btn-default">Agregar!</button>
			</div>
		</div>
	</form>


</div>

{% endblock %}