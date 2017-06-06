{% extends 'plantillabase.twig.php'%}



{% block body %}
<div style="margin-top: 30px; height: 1000px">
    <div class="row">
        <div class="text-center"><h1>Elige el Curso</h1></div>
    </div>  
    <div class="row" style="margin-top: 30px">
        {% for i in 0..(curso|length-1) %}
            <div class="col-xs-2"></div>
            <div class="col-xs-1">
                <form method="POST" action="{{path_for('asociarclavespost')}}">
					<input type="hidden" id="curso" name="curso" value="{{ curso[i] }}">
					<button type="submit" class="btn btn-primary">{{ curso[i] }}</button>
				</form>    
            </div>
            <div class="col-xs-1"></div>
        {% endfor %}
    </div>      
</div>
{% endblock %}

