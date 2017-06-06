{% extends 'plantillabase.twig.php'%}



{% block body %}
<div class="col-xs-1"></div>
<div class="col-xs-10">
	<div class="jumbotron">
		<h1>Te has olvidado de la contraseña y ahora acudes a tu Dios en busca de ayuda!</h1>
		<p>Pues estás de suerte, tras el sencillo paso de poner tu nombre de usuario en la siguiente casilla, te enviaremos un e-mail a tu correo</p>
		<p> 
			<form>
			 	<input type="text" name="usuario"> <a class="btn btn-primary btn-lg" type="submit" 
			 	onclick="porfavor()">Enviar</a>
			</form>
		</p>
	</div>
</div>
<script type="text/javascript">
	function porfavor() {
		//Ingresamos un mensaje a mostrar
		var palabra = prompt("Pídelo por favor(Escribe POR FAVOR):", "");
		//Detectamos si el usuario ingreso un valor
		if (palabra == "POR FAVOR"){
		alert("Muy bien, correo enviado!");
		} else {
			alert("Uhhh, no has escrito POR FAVOR, no saldrás de aqui.");
			porfavor();
		}
	}
</script>
<div class="col-xs-1"></div>

{% endblock %}