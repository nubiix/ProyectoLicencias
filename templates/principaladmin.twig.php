{% extends 'plantillabase.twig.php'%}



{% block body %}
<div class="col-xs-12" style="margin-top: 30px; height: 1000px">
	<div class="container">
		<div class="col-xs-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Ultimos Usuarios Conectados</h3>
				</div>
				<div class="panel-body">
					{% for value in ultimosConectados %}
					<p>{{ value }}</p>
					{% endfor %}
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Licencias Disponibles</h3>
				</div>
				<div class="panel-body">
					{% for key,value in totalLicencias %}
					<p><b>{{ key }}: <i class="text-primary">{{value}}</i></b></p>
					{% endfor %}
				</div>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Mensajes no contestados <span class="badge">
							{% if mensajes[0] == 'No tienes ningun mensaje pendiente' %}
								0
							{% else %}
								{{ mensajes[0]|length }}
							{% endif %}
					</span></h3>
				</div>
				<div class="panel-body">
					{% for i in 0..(mensajes[0]|length-1) %}
					<div class="row well" style="margin: 5px;">
						    <div class="row">
						        <div class="col-xs-4"><label>{{ mensajes[1][i] }}</label></div>
						        <div class="col-xs-4"><label>{{ mensajes[2][i] }}</label></div>
						        <div class="col-xs-4"><label>{{ mensajes[3][i] }}</label></div>
							</div>
							<div class="row">
								<form class="form-horizontal" action="{{path_for('enviar_contestacion')}}" method="POST">
									<div class="col-xs-6">
										<input type="hidden" name="contestacion_id" value="{{ mensajes[0][i] }}">
										<input type="hidden" name="contestacion_email" value="{{ mensajes[1][i] }}">
										<textarea id="{{'contestacion,'~mensajes[0][i] }}" name="contestacion"></textarea>
									</div>
									<div class="col-xs-6">
										<button type="submit" class="btn btn-default" id="{{ mensajes[0][i] }}" name="{{ mensajes[0][i] }}">Enviar Contestacion</button>
									</div>
								</form>
							</div>
					</div>
					{% endfor %}
				</div>
			</div>
		</div>
	</div>
</div>
{% endblock %}