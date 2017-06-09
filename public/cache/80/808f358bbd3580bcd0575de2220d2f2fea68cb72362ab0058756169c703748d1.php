<?php

/* subirusuariosprofesores.twig.php */
class __TwigTemplate_ef140bdbe225a824b6a646e7e8f026be796c1d0be244e2f071118c062104ccf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php ", "subirusuariosprofesores.twig.php", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "plantillabase.twig.php ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "








<div class=\"col-xs-6\">
\t<div class=\"row\">
\t\t<h1>Subir profesores desde archivo CSV</h1>
\t</div>
\t<div class=\"row\">
\t\t<form method=\"POST\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("subirusuariosprofesorespost"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"subirxml\">Subir profesores</label>
\t\t\t\t<input type=\"file\" id=\"subirusuariosprofesores\" name=\"subirusuariosprofesores\">\t
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Enviar</button>
\t\t</form>
\t</div>
</div>
<div class=\"col-xs-6\">
\t<form class=\"form-horizontal\" method=\"POST\" action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("subirusuariosalumnosmanual"), "html", null, true);
        echo "\">
\t\t
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"nombre\" class=\"col-xs-3 control-label\">Nombre del alumno</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" name=\"nombre\" class=\"form-control\" id=\"nombre\" placeholder=\"nombre del alumno\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"primer_apellido\" class=\"col-xs-3 control-label\">Primer apellido</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"primer_apellido\" id=\"primer_apellido\" placeholder=\"primer apellido\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"segundo_apellido\" class=\"col-xs-3 control-label\">Segundo apellido</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" name=\"segundo_apellido\" class=\"form-control\" id=\"segundo_apellido\" placeholder=\"segundo apellido\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"nif_nie\" class=\"col-xs-3 control-label\">NIF o NIE</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"nif_nie\" id=\"nif_nie\" placeholder=\"nif o nie\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"telefono_sms\" class=\"col-xs-3 control-label\">Telefono sms</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"telefono_sms\" id=\"telefono_sms\" placeholder=\"telefono sms\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\" class=\"col-xs-3 control-label\">Email</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"email\">
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"direccion\" class=\"col-xs-3 control-label\">direccion</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" name=\"direccion\" class=\"form-control\" id=\"direccion\" placeholder=\"direccion\">
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"numero_afiliacion\" class=\"col-xs-3 control-label\">numero de afiliacion</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"numero_afiliacion\" name=\"numero_afiliacion\" placeholder=\"numero de afiliacion\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"curso_tutor\" class=\"col-xs-3 control-label\">tutor (poner nombre del curso del que es tutor)</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"curso_tutor\" name=\"curso_tutor\" placeholder=\"curso del que es tutor...\">
\t\t\t</div>
\t\t</div>

\t\t<!-- aqui pensaba que saliese un desplegable con todos los cursos posibles, para que el admin cuanado lo metiese, especificase de que curso es tutor, pero no  podria seleccionar mas de uno, cosa que la base de datos si permite, por lo que  como solucion he pensado en una opcion extra que pregutnase si es tutor de mas de un curso, y en caso de ser asi, crease x inputs igual al numero introducido para luego subirlo a la base de datos. Si se te ocurre algo mejor implementalo, si no, esto me parece una buena solucion -->

\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"direccion\" class=\"col-xs-3 control-label\">direccion</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"direccion\" name=\"direccion\" placeholder=\"direccion\">
\t\t\t</div>
\t\t</div>
\t\t
\t\t<!-- aqui no se si ocultar este elemento y cuando se importe a la base de datos poner en el campo password el mismo que el nif_nie para que la contra se la misma que el usuario, como solo quiero una vista general lo he puesto pero es ocultable -->
\t\t<!--<div class=\"form-group\">
\t\t\t<label for=\"password\" class=\"col-xs-3 control-label\">Contraseña</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"password\" placeholder=\"contraseña\">
\t\t\t</div>
\t\t</div>
\t\t-->
\t\t<!-- este div es para subir foto, pero me da pereza hacerlo ahora, asi que mas tarde hay que gestionar que suba una foto, se copie en el directorio del proyecto y en la base de datos se guarde la direccion que mas tarde se incluira en el src de la imagen -->
\t\t
\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-xs-offset-2 col-xs-10\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Agregar!</button>
\t\t\t</div>
\t\t</div>
\t</form>


</div>

";
    }

    public function getTemplateName()
    {
        return "subirusuariosprofesores.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 30,  47 => 20,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantillabase.twig.php '%}



{% block body %}









<div class=\"col-xs-6\">
\t<div class=\"row\">
\t\t<h1>Subir profesores desde archivo CSV</h1>
\t</div>
\t<div class=\"row\">
\t\t<form method=\"POST\" action=\"{{path_for('subirusuariosprofesorespost')}}\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"subirxml\">Subir profesores</label>
\t\t\t\t<input type=\"file\" id=\"subirusuariosprofesores\" name=\"subirusuariosprofesores\">\t
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Enviar</button>
\t\t</form>
\t</div>
</div>
<div class=\"col-xs-6\">
\t<form class=\"form-horizontal\" method=\"POST\" action=\"{{path_for('subirusuariosalumnosmanual')}}\">
\t\t
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"nombre\" class=\"col-xs-3 control-label\">Nombre del alumno</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" name=\"nombre\" class=\"form-control\" id=\"nombre\" placeholder=\"nombre del alumno\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"primer_apellido\" class=\"col-xs-3 control-label\">Primer apellido</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"primer_apellido\" id=\"primer_apellido\" placeholder=\"primer apellido\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"segundo_apellido\" class=\"col-xs-3 control-label\">Segundo apellido</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" name=\"segundo_apellido\" class=\"form-control\" id=\"segundo_apellido\" placeholder=\"segundo apellido\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"nif_nie\" class=\"col-xs-3 control-label\">NIF o NIE</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"nif_nie\" id=\"nif_nie\" placeholder=\"nif o nie\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"telefono_sms\" class=\"col-xs-3 control-label\">Telefono sms</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"telefono_sms\" id=\"telefono_sms\" placeholder=\"telefono sms\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\" class=\"col-xs-3 control-label\">Email</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"email\">
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"direccion\" class=\"col-xs-3 control-label\">direccion</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" name=\"direccion\" class=\"form-control\" id=\"direccion\" placeholder=\"direccion\">
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"numero_afiliacion\" class=\"col-xs-3 control-label\">numero de afiliacion</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"numero_afiliacion\" name=\"numero_afiliacion\" placeholder=\"numero de afiliacion\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"curso_tutor\" class=\"col-xs-3 control-label\">tutor (poner nombre del curso del que es tutor)</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"curso_tutor\" name=\"curso_tutor\" placeholder=\"curso del que es tutor...\">
\t\t\t</div>
\t\t</div>

\t\t<!-- aqui pensaba que saliese un desplegable con todos los cursos posibles, para que el admin cuanado lo metiese, especificase de que curso es tutor, pero no  podria seleccionar mas de uno, cosa que la base de datos si permite, por lo que  como solucion he pensado en una opcion extra que pregutnase si es tutor de mas de un curso, y en caso de ser asi, crease x inputs igual al numero introducido para luego subirlo a la base de datos. Si se te ocurre algo mejor implementalo, si no, esto me parece una buena solucion -->

\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"direccion\" class=\"col-xs-3 control-label\">direccion</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"direccion\" name=\"direccion\" placeholder=\"direccion\">
\t\t\t</div>
\t\t</div>
\t\t
\t\t<!-- aqui no se si ocultar este elemento y cuando se importe a la base de datos poner en el campo password el mismo que el nif_nie para que la contra se la misma que el usuario, como solo quiero una vista general lo he puesto pero es ocultable -->
\t\t<!--<div class=\"form-group\">
\t\t\t<label for=\"password\" class=\"col-xs-3 control-label\">Contraseña</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"password\" placeholder=\"contraseña\">
\t\t\t</div>
\t\t</div>
\t\t-->
\t\t<!-- este div es para subir foto, pero me da pereza hacerlo ahora, asi que mas tarde hay que gestionar que suba una foto, se copie en el directorio del proyecto y en la base de datos se guarde la direccion que mas tarde se incluira en el src de la imagen -->
\t\t
\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-xs-offset-2 col-xs-10\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Agregar!</button>
\t\t\t</div>
\t\t</div>
\t</form>


</div>

{% endblock %}", "subirusuariosprofesores.twig.php", "C:\\xampp1\\htdocs\\ProyectoLicencias\\templates\\subirusuariosprofesores.twig.php");
    }
}
