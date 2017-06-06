{% extends 'plantillabase.twig.php'%}



{% block body %}


<!--Form with header-->
    <form class="form-horizontal" action="" method="POST">
        <div class="card">
            <div class="card-block">
            
                <!--Header-->
                <div class="form-header blue-gradient">
                  <h3><i class="fa fa-user"></i> LOGIN:</h3>
                </div>
                
                <!--Body-->
                <div class="md-form">
                  <i class="fa fa-user prefix"></i>
                  <input type="text" id="usuario" name="usuario" value="{{ usuario }}" class="form-control">
                  <label for="form3">Usuario</label>
                </div>
                <div class="md-form">
                  <i class="fa fa-lock prefix"></i>
                  <input type="password" id="password" name="password"  value="{{ pass }}"  class="form-control">
                  <label for="form4">Contraseña</label>
                </div>
                {% if (error == 1) %}
    				<div class="col-xs-2"></div>
    				<div class="col-xs-10 alert alert-danger" role="alert">
    					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    					<span class="sr-only">Error:</span>
    					Usuario o Contraseña incorrectos
    				</div>
    			{% endif %}
                            
                            
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Entrar!</button>
				  <button type="reset" class="btn btn-danger">Cancelar</button>                  
                    <div class="modal-footer">
                    	<p>
                        	<input type="checkbox" name="guardar_clave" value="1"> Recordar mis datos · ¿Olvidaste tu  <a href="{{path_for('restaurar_password')}}">contraseña</a>?
                        </p>
                    </div>
                </div>
            
            </div>
        </div>
    </form>

<!--/Form with header-->


{% endblock %}