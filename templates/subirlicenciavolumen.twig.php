{% extends 'plantillabase.twig.php'%}



{% block body %}
<div style="margin-top: 30px; height: 1000px">
<div class="col-xs-3"></div>
<div class="col-xs-6">
	<h1>Subir licencia de volumen</h1>
	<form method="POST" action="{{path_for('subirlicenciavolumenpost')}}">
	<div class="form-group">
		<label for="nombre">Nombre</label>
		<input type="text" class="form-control" id="nombre" placeholder="nombre de la key" name="nombre">
	</div>
	<div class="form-group">
		<label for="key">Clave</label>
		<input type="text" class="form-control" id="key" placeholder="key" name="key">
	</div>
	<button type="submit" class="btn btn-primary">subir licencia</button>
</form>
</div>
<div class="col-xs-3"></div>
</div>
{% endblock %}