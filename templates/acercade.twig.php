{% extends 'plantillabase.twig.php'%}



{% block body %}
<div class="container" style="background-color: white; padding-top: 40px; padding-bottom: 40px; height: 1000px">

<div class="col-xs-2"></div>
<div class="col-xs-8">
	<div class="row">
		<h1>Acerca de</h1>
	</div>
	<div class="row">
		<p>Saludos internauta. Estás en el apartado adecuado para saber un poco más de los creadores
		de esta aplicación web. Te preguntarás quienes somos y como hicimos esta maravillosa y funcional
		aplicación. Para empezar, conócenos un poco mas:</p>
		<div class="well">
			<div class="media-left">
					<img class="zoomIt" src="{{base_url()}}/../img/migue.png" alt="migue" width="64" height="64">
			</div>
			<div class="media-body">
				<h4 class="media-heading">Miguel Angel González Rodríguez</h4>
				Programador. Su sueño es crear una red social con la cual hacerse rico y viajar por todo el mundo. Juego favorito "Halo", r.a.p como forma de vida. Si quieres conocerlo mejor pulse <a data-toggle="collapse" href="#collapseMigue" aria-expanded="false"
				aria-controls="collapseMigue">aqui</a>.
				<div class="collapse" id="collapseMigue">
 					<div style="margin-top: 10px">
 						<p><b>Información adicional:</b><p>
    					<p>Ciertamente programar tiene sus cosas buenas y malas, siempre que seas alguien curioso al cual le gusta crear cosas, investigar, actualizarse, te verás recompensado cuando consigas tu proposito o tu aplicación deseada. Pero de mientras preparate para dolores de cabeza y horas de vida y sueño perdidas. Pero que aburrida sería la vida si no nos la complicaramos. Un saludo de tu amigo y vecino Spider-m... Migue!</p>
    					<p><b>Redes:</b><p>
    					<p>
	    					<a href="https://www.facebook.com/profile.php?id=100012279423015" target="_blank">
	    						<i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
	    					</a>
	    					<a href="https://twitter.com/Miguewoolf" target="_blank">
	    						<i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
	    					</a>
	    					<a href="https://plus.google.com/104121579322674560082" target="_blank">
	    						<i class="fa fa-google-plus fa-2x" aria-hidden="true"></i>
	    					</a>
    					</p>
    					<p><b>Correo:</b></p>
    					<p>soulmigue@gmail.com</p>
  					</div>
				</div>
			</div>
		</div>
		<div class="well">
			<div class="media-left">
				<a href="#">
					<img class="zoomIt" src="{{base_url()}}/../img/romel.jpg" alt="romel" width="64" height="64">
				</a>
			</div>
			<div class="media-body">
				<h4 class="media-heading">Romel García Rodríguez</h4>
				Programador. Según su filosofia haber estudiado informática fue un gran error, pero los hombres de verdad son consecuentes con sus deciciones. Juego favorito "Final Fantasy X", r.a.p como forma de vida. Si quieres conocerlo mejor pulse <a data-toggle="collapse" href="#collapseRomel" aria-expanded="false"
				aria-controls="collapseRomel">aqui</a>.
				<div class="collapse" id="collapseRomel">
 					<div style="margin-top: 10px">
 						<p><b>Información adicional:</b><p>
    					<p>Programar fue divertido, hasta que supe como se programaba, ahora, vago por estos lares pegandome con el codigo, haciendo cosas realmente guays, y enseñando a los jovenes lechones avidos de conocimiento porque es una mala idea estudiar el noble arte de pegarse con un ordenador... Suele ganar el... lokthar ogar! </p>
    					<p><b>Redes:</b><p>
    					<p>
	    					<a href="https://www.facebook.com/romel.garciarodriguez" target="_blank">
	    						<i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
	    					</a>
	    					<a href="https://www.twitter.com/Kaosnubi" target="_blank">
	    						<i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
	    					</a>
	    					<a href="https://plus.google.com/100040519746345216465" target="_blank">
	    						<i class="fa fa-google-plus fa-2x" aria-hidden="true"></i>
	    					</a>
    					</p>
    					<p><b>Correo:</b></p>
    					<p>osowowi@gmail.com</p>
  					</div>
				</div>
			</div>
		</div>
		<div class="container">Aquí el -> <a data-toggle="collapse" href="#collapseFAQ" aria-expanded="false" aria-controls="collapseFAQ">FAQs</a>.
			<div class="collapse" id="collapseFAQ">
				<div class="well">
					<p><b>¿De que va esta Aplicación Web?</b></p>
					<p>Esta aplicación está enfocada para los usuarios de un instituto en donde un Administrador o Profesor puede repartir Licencias de Sistemas Operativos
					a Alumnos, y estos pueden ver las licencias que le han sido otorgadas.
					</p>
					<p><b>¿Qué tecnología usa?</b></p>
					<p>La aplicación está construida con PHP(Framework Slim), Javascript, HTML, CSS, SQL.</p>
				</div>
			</div>
		</div>
		<div class="container">Aquí el -> <a data-toggle="collapse" href="#collapseContac" aria-expanded="false" aria-controls="collapseContac">Contáctanos</a>.
			<div class="collapse" id="collapseContac">
				<div class="well">
					<div class="text-center">
				        <h3><i class="fa fa-envelope"></i>Contáctanos:</h3>
				        <hr class="mt-2 mb-2">
				    </div>
					<p><b>¡¡Aquí podrás enviarnos un mensaje, recuerda poner tus datos!! (email)<br>(1000 caracteres como maximo)</b></p>
					  <div class="col-xs-12"><p id="mensajeResultado"></p></div>
						<div class="form-group" id="divEmail">
							<label for="email">Email</label>
							<input type="text" class="form-control" rows="5" id="email">
						</div>
						<div class="form-group" id="divComentario">
							<label for="comment">Comentario:</label>
							<textarea class="form-control" rows="5" id="comment"></textarea>
						</div>
						<button type="button" id="enviarComentario" class="btn btn-primary">Enviar!</button>
						<div id="falta"></div>
				</div>
			</div>
		</div>
		<div class="container" style="margin-top: 10px">Tras conocer a los mejores programadores que encontrarás en tu vida, seguramente quieras saber el codigo fuente de nuestra aplicación. Como somos tan magnánimos y benevolentes te ofrecemos el enlace a nuestro github donde encontraras todo el código de nuestra aplicación: <a href="https://github.com/nubiix/ProyectoLicencias" target="_blank"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a></div>
	</div>
</div>
<div class="col-xs-2"></div>

</div>
{% endblock %}