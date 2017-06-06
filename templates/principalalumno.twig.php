{% extends 'plantillabase.twig.php'%}



{% block body %}
<div style="margin-top: 30px; height: 1000px">
<div class="col-xs-3 well">
	<img src="{{base_url()}}/../img/{{ datos_user.8 }}.jpg" class="img-rounded" alt="Responsive image" width="120" height="150" onerror="this.src='{{base_url()}}/../img/default.png'">
		<p><b>Nombre:</b> {{ datos_user.4 }}</p>
		<p><b>Apellidos:</b> {{ datos_user.5 }} {{ datos_user.6 }}</p>
		<p><b>DNI:</b> {{ datos_user.9 }}</p>
		<p><b>Cial:</b> {{ datos_user.7 }}</p>
		<p><b>Curso:</b> {{ datos_user.1 }}</p>
		<p><b>Numero de lista:</b> {{ datos_user.3 }}</p>
		<p><b>Email:</b> {{ datos_user.12 }}</p>
</div>
<div class="col-xs-8">
	<div class="row" style="margin-left: 150px">
		<h1>Claves Otorgadas</h1>
	</div>
	{% if nombre == null %}
		<div class="row">
			<h3>Me temo que no tienes licencias ¡¡RECLAMA POR TUS DERECHOS!!</h3>
			<img src="https://media.giphy.com/media/3oriff4xQ7Oq2TIgTu/giphy.gif" alt="esta vacio compay!" style="margin-left: 100px">
		</div>
	{% else %}
		{% for i in 0..(nombre|length-1) %}
			<div class="row">
				<div class="col-xs-3">
					<p class="lead">{{ nombre[i] }}</p>
				</div>
				<div class="col-xs-7">
					<p class="lead">{{ licencia[i] }}</p>
				</div>
				<div class="col-xs-2">
					<form method="POST" action="{{path_for('generar_pdf')}}">
						<input type="hidden" id="id" name="id" value="{{ id[i] }}">
						<input type="hidden" id="nombre" name="nombre" value="{{ nombre[i] }}">
						<input type="hidden" id="licencia" name="licencia" value="{{ licencia[i] }}">
						<button type="submit" class="btn btn-primary" href="{{path_for('generar_pdf')}}">Generar PDF</button>
					</form>
				</div>
			</div>
		{% endfor %}
	{% endif %}
	{% if nombre != null %}
		<div class="row">
			<form method="POST" action="{{path_for('generar_todos_pdf')}}">
				<input type="hidden" id="id" name="id" value="{{total_id}}">
				<button type="submit" class="btn btn-primary" style="margin-left: 200px">generar PDF con todas sus claves</button>
			</form>
		</div>
	{% endif %}
	
</div>
<div class="col-xs-1"></div>
</div>
{% endblock %}