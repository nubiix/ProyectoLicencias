<?php

/* subirusuariosalumnos.twig.php */
class __TwigTemplate_452f3c6cd82f798d3d142f8c3e275bfcf0ce53948b7c5db3a843b2b4f1ebb5a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php", "subirusuariosalumnos.twig.php", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "plantillabase.twig.php";
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
\t\t<h1>Subir alumnos desde archivo CSV</h1>
\t</div>
\t<div class=\"row\">
\t\t<form method=\"POST\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("subirusuariosalumnospost"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"subirxml\">Subir alumnos</label>
\t\t\t\t<input type=\"file\" id=\"subirusuariosalumnos\" name=\"subirusuariosalumnos\">\t
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Enviar</button>
\t\t</form>
\t</div>
</div>
<div class=\"col-xs-6\">
\t<form class=\"form-horizontal\">
\t\t<div class=\"form-group\">
\t\t<label for=\"nombre_curso\" class=\"col-xs-3 control-label\">Nombre del curso</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"nombre_curso\" placeholder=\"nombre del curso\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"numero_lista\" class=\"col-xs-3 control-label\">Numero de lista</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"numero_lista\" placeholder=\"numero de lista\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"nombre\" class=\"col-xs-3 control-label\">Nombre del alumno</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"nombre\" placeholder=\"nombre del alumno\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"primer_apellido\" class=\"col-xs-3 control-label\">Primer apellido</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"primer_apellido\" placeholder=\"primer apellido\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"segundo_apellido\" class=\"col-xs-3 control-label\">Segundo apellido</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"segundo_apellido\" placeholder=\"segundo apellido\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"cial\" class=\"col-xs-5 control-label\">CIAL</label>
\t\t\t<div class=\"col-xs-7\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"cial\" placeholder=\"cial\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"expediente\" class=\"col-xs-5 control-label\">Expediente</label>
\t\t\t<div class=\"col-xs-7\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"primer_apellido\" placeholder=\"primer apellido\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"nif_nie\" class=\"col-xs-3 control-label\">NIF o NIE</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"nif_nie\" placeholder=\"nif o nie\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"telefono\" class=\"col-xs-3 control-label\">Telefono</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"telefono\" placeholder=\"telefono\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"telefono_sms\" class=\"col-xs-3 control-label\">Telefono sms</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"telefono_sms\" placeholder=\"telefono sms\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\" class=\"col-xs-3 control-label\">Email</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"email\" placeholder=\"email\">
\t\t\t</div>
\t\t</div>


\t\t<!-- aqui no se si ocultar este elemento y cuando se importe a la base de datos poner en el campo password el mismo que el nif_nie para que la contra se la misma que el usuario, como solo quiero una vista general lo he puesto pero es ocultable -->
\t\t<!-- <div class=\"form-group\">
\t\t\t<label for=\"password\" class=\"col-xs-3 control-label\">Contraseña</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"password\" placeholder=\"contraseña\">
\t\t\t</div>
\t\t</div> -->

\t\t<!-- este div es para subir foto, pero me da pereza hacerlo ahora, asi que mas tarde hay que gestionar que suba una foto, se copie en el directorio del proyecto y en la base de datos se guarde la direccion que mas tarde se incluira en el src de la imagen -->
\t\t<!--
\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\" class=\"col-xs-3 control-label\">Email</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"email\" placeholder=\"email\">
\t\t\t</div>
\t\t</div>
\t\t-->

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
        return "subirusuariosalumnos.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 20,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantillabase.twig.php'%}



{% block body %}









<div class=\"col-xs-6\">
\t<div class=\"row\">
\t\t<h1>Subir alumnos desde archivo CSV</h1>
\t</div>
\t<div class=\"row\">
\t\t<form method=\"POST\" action=\"{{path_for('subirusuariosalumnospost')}}\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"subirxml\">Subir alumnos</label>
\t\t\t\t<input type=\"file\" id=\"subirusuariosalumnos\" name=\"subirusuariosalumnos\">\t
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Enviar</button>
\t\t</form>
\t</div>
</div>
<div class=\"col-xs-6\">
\t<form class=\"form-horizontal\">
\t\t<div class=\"form-group\">
\t\t<label for=\"nombre_curso\" class=\"col-xs-3 control-label\">Nombre del curso</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"nombre_curso\" placeholder=\"nombre del curso\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"numero_lista\" class=\"col-xs-3 control-label\">Numero de lista</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"numero_lista\" placeholder=\"numero de lista\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"nombre\" class=\"col-xs-3 control-label\">Nombre del alumno</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"nombre\" placeholder=\"nombre del alumno\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"primer_apellido\" class=\"col-xs-3 control-label\">Primer apellido</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"primer_apellido\" placeholder=\"primer apellido\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"segundo_apellido\" class=\"col-xs-3 control-label\">Segundo apellido</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"segundo_apellido\" placeholder=\"segundo apellido\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"cial\" class=\"col-xs-5 control-label\">CIAL</label>
\t\t\t<div class=\"col-xs-7\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"cial\" placeholder=\"cial\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"expediente\" class=\"col-xs-5 control-label\">Expediente</label>
\t\t\t<div class=\"col-xs-7\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"primer_apellido\" placeholder=\"primer apellido\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"nif_nie\" class=\"col-xs-3 control-label\">NIF o NIE</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"nif_nie\" placeholder=\"nif o nie\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"telefono\" class=\"col-xs-3 control-label\">Telefono</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"telefono\" placeholder=\"telefono\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"telefono_sms\" class=\"col-xs-3 control-label\">Telefono sms</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"telefono_sms\" placeholder=\"telefono sms\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\" class=\"col-xs-3 control-label\">Email</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"email\" placeholder=\"email\">
\t\t\t</div>
\t\t</div>


\t\t<!-- aqui no se si ocultar este elemento y cuando se importe a la base de datos poner en el campo password el mismo que el nif_nie para que la contra se la misma que el usuario, como solo quiero una vista general lo he puesto pero es ocultable -->
\t\t<!-- <div class=\"form-group\">
\t\t\t<label for=\"password\" class=\"col-xs-3 control-label\">Contraseña</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"password\" placeholder=\"contraseña\">
\t\t\t</div>
\t\t</div> -->

\t\t<!-- este div es para subir foto, pero me da pereza hacerlo ahora, asi que mas tarde hay que gestionar que suba una foto, se copie en el directorio del proyecto y en la base de datos se guarde la direccion que mas tarde se incluira en el src de la imagen -->
\t\t<!--
\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\" class=\"col-xs-3 control-label\">Email</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"email\" placeholder=\"email\">
\t\t\t</div>
\t\t</div>
\t\t-->

\t\t
\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-xs-offset-2 col-xs-10\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Agregar!</button>
\t\t\t</div>
\t\t</div>
\t</form>


</div>

{% endblock %}", "subirusuariosalumnos.twig.php", "/opt/lampp/htdocs/Proyecto_Licencias/templates/subirusuariosalumnos.twig.php");
    }
}
