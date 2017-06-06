$(document).ready(function(){
    compruebaAceptaCookies();
    var URLactual = window.location;
    URLactual = String(URLactual);
    var res = URLactual.split("/");
    if(res[res.length-1] == ""){
        $("#li_login").addClass("active");
    }
    if (res[res.length-1] == "acercade" || res[res.length-1] == "#acercade") {
        $("#li_acercade").addClass("active");
    }
    if (res[res.length-1] == "admin") {
        $("#li_admin").addClass("active");
    }
    if (res[res.length-1] == "subirxml") {
        $("#li_subirxml").addClass("active");
    }
    if (res[res.length-1] == "subirlicenciavolumen") {
        $("#li_subirlicenciavolumen").addClass("active");
    }
    if (res[res.length-1] == "subirusuarios") {
        $("#li_subirusuarios").addClass("active");
    }
    if (res[res.length-1] == "alum") {
        $("#li_subirusuarios").addClass("active");
    }
    if (res[res.length-1] == "prof") {
        $("#li_subirusuarios").addClass("active");
    }
    if (res[res.length-1] == "profesor") {
        $("#li_profesor").addClass("active");
    }
    if (res[res.length-1] == "alumno") {
        $("#li_alumno").addClass("active");
    }
    if (res[res.length-1] == "licenciasvolumen") {
        $("#li_licenciasvolumen").addClass("active");
    }
    if (res[res.length-1] == "asociarclaves") {
        $("#li_asociarclaves").addClass("active");
    }    
    if (res[res.length-1] == "administrarusuarios") {
        $("#li_administrarusuarios").addClass("active");
    }

 $("#enviarComentario").bind("click",function(){
        alert("hola");

        var email = $("#email").val();
        if(email.search(/(.)+@(.)+\.(.){1,3}/i)==-1){
            $("#divEmail").attr("class"," has-error");
        }else{
            $("#divEmail").removeClass("has-error");
            var comentario = $("#comment").val();
            if(comentario.search(/(.)+/i)==-1){
                $("#divComentario").attr("class"," has-error");
            }else{
                $("#divComentario").removeClass("has-error");
                $.ajax({
                    type: 'POST', //por defecto es GET, puede ser “POST‟
                    url: '../assert/php/envioComentario.php', // página solicitada
                    data: {correo:email,mensaje:comentario},
                    async: true, // true=asíncrono, false = síncrono
                    dataType: 'html', //formato esperado de respuesta del servidor
                    // 'xml', 'html', 'json', “script‟, “jsonp‟, “text‟
                    success: function(respuesta) {//callback a ejecutar en caso de éxito
                        if(respuesta=='ok')
                        {
                            $("#email").val("");
                            $("#comment").val("");
                            $("#mensajeResultado").html("El mensaje ha sido enviado con exito, enviaremos tu respuesta a tu correo :D");
                            $("#mensajeResultado").attr("class"," bg-success");
                        }else if(respuesta=="ko"){
                            $("#mensajeResultado").html("Ha habido algun problema enviando tu comentario, ¿Has introducido algo raro? Si no es asi, intentalo en unos minutos...");
                            $("#mensajeResultado").attr("class"," bg-danger");
                            
                        }
                        
                    },
                });
            }
            
        }
        
        
    });
    $("#btnNuevaContra").click(function(){
        var submit = true;
        var nif_nie = $("#nifNieNuevaContra").val();
        
        if($("#nuevaContra").val()!="" || $("#nuevaContraRepetida").val() != ""){
            var primeraContra = $("#nuevaContra").val(); 
            var segundaContra = $("#nuevaContraRepetida").val();
            if(primeraContra!=segundaContra)
            {
                alert("las contraseñas no son iguales");
                submit = false;
            }else if(nif_nie==primeraContra){
                alert("No puedes poner la misma contraseña que antes");
                submit = false;
            }
            
        }else{
            alert("Ambos campos deben tener la nueva contraseña y coincidir, no los dejes vacios");
            submit = false;
        }
        //event.preventDefault();
        if(submit){
            $("#form").submit();
        }
        
    });



    $('a[href=\\#acercade]').click(function (event){
        event.stopPropagation();
        var Position = jQuery('[id="acercade"]').offset().top;
        jQuery('html, body').animate({ scrollTop: Position }, 1100);
        return false;
    });


    /*if (window.console){
        console.log("Ejemplo de mensaje o log predeterminado");
        console.error("Ejemplo de mensaje de error");
        console.warn("Ejemplo de mensaje de advertencia");
        console.info("Ejemplo de mensaje de información");
        }
    */
console.log( " ▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄        ▄  ▄               ▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄        ▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄   ▄▄▄▄▄▄▄▄▄▄▄       ▄▄▄▄▄▄▄▄▄▄▄ ");
console.log( "▐░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░▌      ▐░▌▐░▌             ▐░▌▐░░░░░░░░░░░▌▐░░▌      ▐░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░▌ ▐░░░░░░░░░░░▌     ▐░░░░░░░░░░░▌");
console.log( "▐░█▀▀▀▀▀▀▀█░▌▀▀▀▀█░█▀▀▀▀ ▐░█▀▀▀▀▀▀▀▀▀ ▐░▌░▌     ▐░▌ ▐░▌           ▐░▌ ▐░█▀▀▀▀▀▀▀▀▀ ▐░▌░▌     ▐░▌ ▀▀▀▀█░█▀▀▀▀ ▐░█▀▀▀▀▀▀▀█░▌▐░█▀▀▀▀▀▀▀█░▌     ▐░█▀▀▀▀▀▀▀█░▌");
console.log( "▐░▌       ▐░▌    ▐░▌     ▐░▌          ▐░▌▐░▌    ▐░▌  ▐░▌         ▐░▌  ▐░▌          ▐░▌▐░▌    ▐░▌     ▐░▌     ▐░▌       ▐░▌▐░▌       ▐░▌     ▐░▌       ▐░▌");
console.log( "▐░█▄▄▄▄▄▄▄█░▌    ▐░▌     ▐░█▄▄▄▄▄▄▄▄▄ ▐░▌ ▐░▌   ▐░▌   ▐░▌       ▐░▌   ▐░█▄▄▄▄▄▄▄▄▄ ▐░▌ ▐░▌   ▐░▌     ▐░▌     ▐░▌       ▐░▌▐░▌       ▐░▌     ▐░█▄▄▄▄▄▄▄█░▌");
console.log( "▐░░░░░░░░░░▌     ▐░▌     ▐░░░░░░░░░░░▌▐░▌  ▐░▌  ▐░▌    ▐░▌     ▐░▌    ▐░░░░░░░░░░░▌▐░▌  ▐░▌  ▐░▌     ▐░▌     ▐░▌       ▐░▌▐░▌       ▐░▌     ▐░░░░░░░░░░░▌");
console.log( "▐░█▀▀▀▀▀▀▀█░▌    ▐░▌     ▐░█▀▀▀▀▀▀▀▀▀ ▐░▌   ▐░▌ ▐░▌     ▐░▌   ▐░▌     ▐░█▀▀▀▀▀▀▀▀▀ ▐░▌   ▐░▌ ▐░▌     ▐░▌     ▐░▌       ▐░▌▐░▌       ▐░▌     ▐░█▀▀▀▀▀▀▀█░▌");
console.log( "▐░▌       ▐░▌    ▐░▌     ▐░▌          ▐░▌    ▐░▌▐░▌      ▐░▌ ▐░▌      ▐░▌          ▐░▌    ▐░▌▐░▌     ▐░▌     ▐░▌       ▐░▌▐░▌       ▐░▌     ▐░▌       ▐░▌");
console.log( "▐░█▄▄▄▄▄▄▄█░▌▄▄▄▄█░█▄▄▄▄ ▐░█▄▄▄▄▄▄▄▄▄ ▐░▌     ▐░▐░▌       ▐░▐░▌       ▐░█▄▄▄▄▄▄▄▄▄ ▐░▌     ▐░▐░▌ ▄▄▄▄█░█▄▄▄▄ ▐░█▄▄▄▄▄▄▄█░▌▐░█▄▄▄▄▄▄▄█░▌     ▐░▌       ▐░▌");
console.log( "▐░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░▌      ▐░░▌        ▐░▌        ▐░░░░░░░░░░░▌▐░▌      ▐░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░▌ ▐░░░░░░░░░░░▌     ▐░▌       ▐░▌");
console.log( " ▀▀▀▀▀▀▀▀▀▀  ▀▀▀▀▀▀▀▀▀▀▀  ▀▀▀▀▀▀▀▀▀▀▀  ▀        ▀▀          ▀          ▀▀▀▀▀▀▀▀▀▀▀  ▀        ▀▀  ▀▀▀▀▀▀▀▀▀▀▀  ▀▀▀▀▀▀▀▀▀▀   ▀▀▀▀▀▀▀▀▀▀▀       ▀         ▀ ");
console.log( "                                                                                                                                                         ");
console.log( " ▄            ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄        ▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄                                     ");
console.log( "▐░▌          ▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░▌      ▐░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌                                    ");
console.log( "▐░▌           ▀▀▀▀█░█▀▀▀▀ ▐░█▀▀▀▀▀▀▀▀▀ ▐░█▀▀▀▀▀▀▀▀▀ ▐░▌░▌     ▐░▌▐░█▀▀▀▀▀▀▀▀▀  ▀▀▀▀█░█▀▀▀▀ ▐░█▀▀▀▀▀▀▀█░▌▐░█▀▀▀▀▀▀▀▀▀                                     ");
console.log( "▐░▌               ▐░▌     ▐░▌          ▐░▌          ▐░▌▐░▌    ▐░▌▐░▌               ▐░▌     ▐░▌       ▐░▌▐░▌                                              ");
console.log( "▐░▌               ▐░▌     ▐░▌          ▐░█▄▄▄▄▄▄▄▄▄ ▐░▌ ▐░▌   ▐░▌▐░▌               ▐░▌     ▐░█▄▄▄▄▄▄▄█░▌▐░█▄▄▄▄▄▄▄▄▄                                     ");
console.log( "▐░▌               ▐░▌     ▐░▌          ▐░░░░░░░░░░░▌▐░▌  ▐░▌  ▐░▌▐░▌               ▐░▌     ▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌                                    ");
console.log( "▐░▌               ▐░▌     ▐░▌          ▐░█▀▀▀▀▀▀▀▀▀ ▐░▌   ▐░▌ ▐░▌▐░▌               ▐░▌     ▐░█▀▀▀▀▀▀▀█░▌ ▀▀▀▀▀▀▀▀▀█░▌                                    ");
console.log( "▐░▌               ▐░▌     ▐░▌          ▐░▌          ▐░▌    ▐░▌▐░▌▐░▌               ▐░▌     ▐░▌       ▐░▌          ▐░▌                                    ");
console.log( "▐░█▄▄▄▄▄▄▄▄▄  ▄▄▄▄█░█▄▄▄▄ ▐░█▄▄▄▄▄▄▄▄▄ ▐░█▄▄▄▄▄▄▄▄▄ ▐░▌     ▐░▐░▌▐░█▄▄▄▄▄▄▄▄▄  ▄▄▄▄█░█▄▄▄▄ ▐░▌       ▐░▌ ▄▄▄▄▄▄▄▄▄█░▌                                    ");
console.log( "▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░▌      ▐░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░▌       ▐░▌▐░░░░░░░░░░░▌                                    ");
console.log( " ▀▀▀▀▀▀▀▀▀▀▀  ▀▀▀▀▀▀▀▀▀▀▀  ▀▀▀▀▀▀▀▀▀▀▀  ▀▀▀▀▀▀▀▀▀▀▀  ▀        ▀▀  ▀▀▀▀▀▀▀▀▀▀▀  ▀▀▀▀▀▀▀▀▀▀▀  ▀         ▀  ▀▀▀▀▀▀▀▀▀▀▀                                     ");
console.log( "                                                                                                                                                         ");
console.log( " ▄         ▄  ▄       ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄       ▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄                                                       ");
console.log( "▐░▌       ▐░▌▐░▌     ▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░▌     ▐░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌                                                      ");
console.log( "▐░▌       ▐░▌▐░▌      ▀▀▀▀█░█▀▀▀▀  ▀▀▀▀█░█▀▀▀▀ ▐░▌░▌   ▐░▐░▌▐░█▀▀▀▀▀▀▀█░▌ ▀▀▀▀█░█▀▀▀▀ ▐░█▀▀▀▀▀▀▀▀▀                                                       ");
console.log( "▐░▌       ▐░▌▐░▌          ▐░▌          ▐░▌     ▐░▌▐░▌ ▐░▌▐░▌▐░▌       ▐░▌     ▐░▌     ▐░▌                                                                ");
console.log( "▐░▌       ▐░▌▐░▌          ▐░▌          ▐░▌     ▐░▌ ▐░▐░▌ ▐░▌▐░█▄▄▄▄▄▄▄█░▌     ▐░▌     ▐░█▄▄▄▄▄▄▄▄▄                                                       ");
console.log( "▐░▌       ▐░▌▐░▌          ▐░▌          ▐░▌     ▐░▌  ▐░▌  ▐░▌▐░░░░░░░░░░░▌     ▐░▌     ▐░░░░░░░░░░░▌                                                      ");
console.log( "▐░▌       ▐░▌▐░▌          ▐░▌          ▐░▌     ▐░▌   ▀   ▐░▌▐░█▀▀▀▀▀▀▀█░▌     ▐░▌     ▐░█▀▀▀▀▀▀▀▀▀                                                       ");
console.log( "▐░▌       ▐░▌▐░▌          ▐░▌          ▐░▌     ▐░▌       ▐░▌▐░▌       ▐░▌     ▐░▌     ▐░▌                                                                ");
console.log( "▐░█▄▄▄▄▄▄▄█░▌▐░█▄▄▄▄▄▄▄▄▄ ▐░▌      ▄▄▄▄█░█▄▄▄▄ ▐░▌       ▐░▌▐░▌       ▐░▌     ▐░▌     ▐░█▄▄▄▄▄▄▄▄▄                                                       ");
console.log( "▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░▌     ▐░░░░░░░░░░░▌▐░▌       ▐░▌▐░▌       ▐░▌     ▐░▌     ▐░░░░░░░░░░░▌                                                      ");
console.log( " ▀▀▀▀▀▀▀▀▀▀▀  ▀▀▀▀▀▀▀▀▀▀▀  ▀       ▀▀▀▀▀▀▀▀▀▀▀  ▀         ▀  ▀         ▀       ▀       ▀▀▀▀▀▀▀▀▀▀▀                                                       ");
console.log( "                                                                                                                                                         ");
console.log( " ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄        ▄                                                                ");
console.log( "▐░░░░░░░░░░░▌▐░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░▌      ▐░▌                                                               ");
console.log( "▐░█▀▀▀▀▀▀▀▀▀ ▐░█▀▀▀▀▀▀▀█░▌▀▀▀▀█░█▀▀▀▀  ▀▀▀▀█░█▀▀▀▀  ▀▀▀▀█░█▀▀▀▀ ▐░█▀▀▀▀▀▀▀█░▌▐░▌░▌     ▐░▌                                                               ");
console.log( "▐░▌          ▐░▌       ▐░▌    ▐░▌          ▐░▌          ▐░▌     ▐░▌       ▐░▌▐░▌▐░▌    ▐░▌                                                               ");
console.log( "▐░█▄▄▄▄▄▄▄▄▄ ▐░▌       ▐░▌    ▐░▌          ▐░▌          ▐░▌     ▐░▌       ▐░▌▐░▌ ▐░▌   ▐░▌                                                               ");
console.log( "▐░░░░░░░░░░░▌▐░▌       ▐░▌    ▐░▌          ▐░▌          ▐░▌     ▐░▌       ▐░▌▐░▌  ▐░▌  ▐░▌                                                               ");
console.log( "▐░█▀▀▀▀▀▀▀▀▀ ▐░▌       ▐░▌    ▐░▌          ▐░▌          ▐░▌     ▐░▌       ▐░▌▐░▌   ▐░▌ ▐░▌                                                               ");
console.log( "▐░▌          ▐░▌       ▐░▌    ▐░▌          ▐░▌          ▐░▌     ▐░▌       ▐░▌▐░▌    ▐░▌▐░▌                                                               ");
console.log( "▐░█▄▄▄▄▄▄▄▄▄ ▐░█▄▄▄▄▄▄▄█░▌▄▄▄▄█░█▄▄▄▄      ▐░▌      ▄▄▄▄█░█▄▄▄▄ ▐░█▄▄▄▄▄▄▄█░▌▐░▌     ▐░▐░▌                                                               ");
console.log( "▐░░░░░░░░░░░▌▐░░░░░░░░░░▌▐░░░░░░░░░░░▌     ▐░▌     ▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░▌      ▐░░▌                                                               ");
console.log( " ▀▀▀▀▀▀▀▀▀▀▀  ▀▀▀▀▀▀▀▀▀▀  ▀▀▀▀▀▀▀▀▀▀▀       ▀       ▀▀▀▀▀▀▀▀▀▀▀  ▀▀▀▀▀▀▀▀▀▀▀  ▀        ▀▀                                                                ");
console.log( " Hola L Y F ♥                                                                                                                                                        ");


});




/* ésto comprueba la localStorage si ya tiene la variable 
guardada */ 
function compruebaAceptaCookies() {
    if(localStorage.aceptaCookies == 'true'){
        cajacookies.style.display = 'none';
    }
}

/* aquí guardamos la variable de que se ha
aceptado el uso de cookies así no mostraremos
el mensaje de nuevo */
function aceptarCookies() {
    localStorage.aceptaCookies = 'true';
    cajacookies.style.display = 'none';
}

function asignarLicencia(tipoLicenciaEIdAlumno)
{   
  var ruta ='../../assert/php/ModeloAsociarLicencias.php';
  tipoEId = tipoLicenciaEIdAlumno.split(",");
    var parametros = {tipoLicencia:tipoEId[0],idAlumno:tipoEId[1]};    
    ajaxGeneral(parametros,ruta,function(request){
        location.reload();
    });
}

/*function contestar_mensaje(id){

}*/

function ajaxGeneral(parametros,ruta,funcion){
    $.ajax({
        data:  parametros,
        url:   ruta,
        method: "POST",
        success:  funcion,
        fail: function (response) {
            alert("Ha habido algún problema actualizando el estado");
        }
    });
}