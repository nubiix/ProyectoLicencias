{% extends 'plantillabase.twig.php'%}



{% block body %}
<div style="margin-top: 30px; height: 1000px">
	
<div class="col-xs-6" style="margin-top: 100px">
	<a href="{{path_for('subirusuariosalumnos')}}" class="btn btn-primary btn-lg btn-block" role="button">Subir Alumnos</a>
</div>
<div class="col-xs-6" style="margin-top: 100px">
	<a href="{{path_for('subirusuariosprofesores')}}" class="btn btn-primary btn-lg btn-block" role="button">Subir Profesores</a>
</div>

</div>
{% endblock %}