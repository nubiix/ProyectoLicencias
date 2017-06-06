$(document).ready(function() {
	$.ajax({
		type: 'POST', //por defecto es GET, puede ser “POST‟
		url: '../../assert/php/buscador.php', // página solicitada
		async: true, // true=asíncrono, false = síncrono
		dataType: 'html', //formato esperado de respuesta del servidor
		// 'xml', 'html', 'json', “script‟, “jsonp‟, “text‟
		success: function(respuesta) {//callback a ejecutar en caso de éxito	
			$("#div_datos").html(respuesta);
		},
	});
	//keyup recoge las palabras escritas en el input y va mostrando el contenido que va devolviendo le ajax de la base de datos.
	$("#BuscarUsuarios").keyup(function(){
		$.ajax({
			type: 'POST', //por defecto es GET, puede ser “POST‟
			url: '../../assert/php/buscador.php', // página solicitada
			data: {usuario:$("#BuscarUsuarios").val()},
			async: true, // true=asíncrono, false = síncrono
			dataType: 'html', //formato esperado de respuesta del servidor
			// 'xml', 'html', 'json', “script‟, “jsonp‟, “text‟
			success: function(respuesta) {//callback a ejecutar en caso de éxito
				$("#div_datos").html(respuesta);
			},
		});
	});


	$("#comment").bind("keyup blur",function(){
        var caracteres = $("#comment").val();
        if(caracteres.length >= 1000)
        {
            caracteres=caracteres.substr(0,1000);
        }
        var falta=1000-caracteres.length;
        $("#comment").val(caracteres);
        $("#falta").html("Caben "+falta+" caracteres.");
    });

});

function editarUser(id)
{
	$.ajax({
			type: 'POST', //por defecto es GET, puede ser “POST‟
			url: '../../assert/php/obtenerUsuario.php', // página solicitada
			data: {usuario:id},
			async: true, // true=asíncrono, false = síncrono
			dataType: 'html', //formato esperado de respuesta del servidor
			// 'xml', 'html', 'json', “script‟, “jsonp‟, “text‟
			success: function(respuesta) {//callback a ejecutar en caso de éxito
				//respuesta = JSON.parse(respuesta);
				$("#div_datos").attr("class"," hidden");
				$("#div_usuario_seleccionado").html(respuesta);
				
			},
		});


}

function actualizar(){
    if($("#departamento").length)
    {
        if($("#nombre").val().length == 0){
            alert("no has introducido el nombre");
        }else if($("#primer_apellido").val().length==0){
            alert("no has introducido el primer apellido");
        }else if($("#segundo_apellido").val().length==0){
            alert("no has introducido el segundo apellido");
        }else if($("#nif_nie").val().length==0){
            alert("no has introducido el nif/nie");
        }else if($("#telefono_sms").val().length==0){
            alert("no has introducido el telefono");
        }else if($("#email").val().length==0){
            alert("no has introducido el email");
        }else if($("#direccion").val().length==0){
            alert("no has introducido la direccion");
        }else if($("#numero_afiliacion").val().length==0){
            alert("no has introducido el numero de afiliacion");
        }else if($("#departamento").val().length==0){
            alert("no has introducido el departamento");
        }else{
            $("#actualizarUser").submit();
        }
    }else{
        if($("#nombre").val().length == 0){
            alert("no has introducido el nombre");
        }else if($("#primer_apellido").val().length==0){
            alert("no has introducido el primer apellido");
        }else if($("#segundo_apellido").val().length==0){
            alert("no has introducido el segundo apellido");
        }else if($("#nif_nie").val().length==0){
            alert("no has introducido el nif/nie");
        }else if($("#telefono_sms").val().length==0){
            alert("no has introducido el telefono");
        }else if($("#email").val().length==0){
            alert("no has introducido el email");
        }else if($("#cial").val().length==0){
            alert("no has introducido el cial");
        }else if($("#telefono").val().length==0){
            alert("no has introducido el telefono");
        }else if($("#expediente").val().length==0){
            alert("no has introducido el expediente");
        }else if($("#nombre_curso").val().length==0){
            alert("no has introducido el nombre del curso");
        }else if($("#numero_lista").val().length==0){
            alert("no has introducido el numero de lista");
        }else{
            $("#actualizarUser").submit();
        }
    }
}
