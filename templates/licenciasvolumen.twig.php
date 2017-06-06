{% extends 'plantillabase.twig.php'%}



{% block body %}
<div style="margin-top: 30px; height: 1000px">
<div class="col-xs-1"></div>
<div class="col-xs-10">
<h1 class="text-left">Licencias de volumen:</h1>
	<div class="row">
		<div class="col-xs-6">
			{% for j in nombre %}
				<h3>Para el sistema: {{ j }}</h3>
			{% endfor %}
		</div>
		<div class="col-xs-6">
			{% for k in clave %}
				<h3>Clave: {{ k }}</h3>
			{% endfor %} 
		</div>
	</div>
</div>
<div class="col-xs-1"></div>
</div>
{% endblock %}