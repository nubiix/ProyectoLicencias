{% extends 'plantillabase.twig.php'%}



{% block body %}
<div class="col-xs-12">
	<div class="container">
		<nav class="navbar">
			<div class="container-fluid">
				<form class="form-inline waves-effect waves-light">
					<input type="text" id="BuscarUsuarios" class="form-control" placeholder="Buscar" style="background-color: white">
				</form>
			</div>
		</nav>
		<div id="div_datos">
 		</div>
 		<div id="div_usuario_seleccionado">
 		</div>
	</div>
</div>
{% endblock %}