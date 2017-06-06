{% extends 'plantillabase.twig.php'%}



{% block body %}
    <div class="row">
        <div class="col-xs-8">
            <div class="text-center"><h3>{{ curso }}</h3></div>
        </div>
        <div class="col-xs-4">
        </div>
    </div> 
    <div>
 
    {% for i in 0..(alumnos|length-1) %}
		<div class="row">
    	<div class="col-xs-1"></div>
        <div class="well col-xs-10">
            <div class="col-xs-4">
                <h3>{{ alumnos[i] }}</h3>    
            </div>
            <div class="col-xs-8">
                {% for key,value in licencias[i] %}
                    {% if value == 0 %}
	                    <div class="row" style="margin-bottom: 20px">
	                        <div class="col-xs-3">
	                            <input type="button" id='{{ key ~ "," ~ idAlumnos[i] }}' class="btn btn-primary" onclick="asignarLicencia(this.id)" value="asociar" >
	                        </div>
	                        <div class="col-xs-1"></div>
	                        <div class="col-xs-8">
	                            <p class="bg-success">{{ key }}</p>
	                        </div>
	                    </div>
                    {% else %}
                    	<div class="row" style="margin-bottom: 20px">
	                        <div class="col-xs-3">
	                            <p class="text-danger">Asignada :D</p>
	                        </div>
	                        <div class="col-xs-1"></div>
	                        <div class="col-xs-8">
	                            <p class="bg-danger">{{ key }}</p>
	                        </div>
	                    </div>    
                    {% endif %}
                {% endfor %}
            </div>
        </div>
        <div class="col-xs-1"></div>
		</div>
    {% endfor %}
    </div>
{% endblock %}