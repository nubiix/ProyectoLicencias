  {% extends 'plantillabase.twig.php'%}



    {% block body %}
    <?php //user 58643616S contra pasa ?><?php //user 96732682H contra (nif_nie)?><?php //user 43352551W contra (nada)?><?php //user 58576699D contra pasa ?>
        <div class="col-xs-2"></div>
        <div class="col-xs-8 text-center">
            <input type="hidden" id="nifNieNuevaContra" value="{{ nif_nie }}">
            <div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Cambio de contraseña</h3>
				</div>
				<div class="panel-body">
					<form action="{{ path_for('cambioContra') }}" id="form" method="POST">
                        <div class="form-group">
                            <label for="nuevaContrasena">Nueva contraseña:</label>
                            <input type="password" id="nuevaContra" name="nuevaContra">
                        </div>
                        <div class="form-group">
                            <label for="nuevaContrasena">Introduce de nuevo la contraseña:</label>
                            <input type="password" id="nuevaContraRepetida" name="nuevaContraRepetida">
                        </div>
                        <input type="button" id="btnNuevaContra" name="btnNuevaContra" value="cambiar!" class="btn btn-primary">
                    </form> 
				</div>
			</div>
        </div>
        <div class="col-xs-2"></div>
    {% endblock %}
    