<?php

/* subirusuariosprofesores.twig.php */
class __TwigTemplate_d0472d6698681fbcae91d97d17f1e7df4d96cba4679c375a0ec5d81575e8bee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php", "subirusuariosprofesores.twig.php", 1);
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
\t<form class=\"form-horizontal\">
\t\t
\t\t
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
\t\t\t<label for=\"nif_nie\" class=\"col-xs-3 control-label\">NIF o NIE</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"nif_nie\" placeholder=\"nif o nie\">
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
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"direccion\" class=\"col-xs-3 control-label\">direccion</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"direccion\" placeholder=\"direccion\">
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"numero_afiliacion\" class=\"col-xs-3 control-label\">numero de afiliacion</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"numero_afiliacion\" placeholder=\"numero de afiliacion\">
\t\t\t</div>
\t\t</div>

\t\t<!-- aqui pensaba que saliese un desplegable con todos los cursos posibles, para que el admin cuanado lo metiese, especificase de que curso es tutor, pero no  podria seleccionar mas de uno, cosa que la base de datos si permite, por lo que  como solucion he pensado en una opcion extra que pregutnase si es tutor de mas de un curso, y en caso de ser asi, crease x inputs igual al numero introducido para luego subirlo a la base de datos. Si se te ocurre algo mejor implementalo, si no, esto me parece una buena solucion -->

\t\t<!--
\t\t<div class=\"form-group\">
\t\t\t<label for=\"direccion\" class=\"col-xs-3 control-label\">direccion</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"direccion\" placeholder=\"direccion\">
\t\t\t</div>
\t\t</div>
\t\t-->
\t\t
\t\t<!-- aqui no se si ocultar este elemento y cuando se importe a la base de datos poner en el campo password el mismo que el nif_nie para que la contra se la misma que el usuario, como solo quiero una vista general lo he puesto pero es ocultable -->
\t\t<div class=\"form-group\">
\t\t\t<label for=\"password\" class=\"col-xs-3 control-label\">Contraseña</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"password\" placeholder=\"contraseña\">
\t\t\t</div>
\t\t</div>

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
        return "subirusuariosprofesores.twig.php";
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
\t<form class=\"form-horizontal\">
\t\t
\t\t
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
\t\t\t<label for=\"nif_nie\" class=\"col-xs-3 control-label\">NIF o NIE</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"nif_nie\" placeholder=\"nif o nie\">
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
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"direccion\" class=\"col-xs-3 control-label\">direccion</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"direccion\" placeholder=\"direccion\">
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"numero_afiliacion\" class=\"col-xs-3 control-label\">numero de afiliacion</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"numero_afiliacion\" placeholder=\"numero de afiliacion\">
\t\t\t</div>
\t\t</div>

\t\t<!-- aqui pensaba que saliese un desplegable con todos los cursos posibles, para que el admin cuanado lo metiese, especificase de que curso es tutor, pero no  podria seleccionar mas de uno, cosa que la base de datos si permite, por lo que  como solucion he pensado en una opcion extra que pregutnase si es tutor de mas de un curso, y en caso de ser asi, crease x inputs igual al numero introducido para luego subirlo a la base de datos. Si se te ocurre algo mejor implementalo, si no, esto me parece una buena solucion -->

\t\t<!--
\t\t<div class=\"form-group\">
\t\t\t<label for=\"direccion\" class=\"col-xs-3 control-label\">direccion</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"direccion\" placeholder=\"direccion\">
\t\t\t</div>
\t\t</div>
\t\t-->
\t\t
\t\t<!-- aqui no se si ocultar este elemento y cuando se importe a la base de datos poner en el campo password el mismo que el nif_nie para que la contra se la misma que el usuario, como solo quiero una vista general lo he puesto pero es ocultable -->
\t\t<div class=\"form-group\">
\t\t\t<label for=\"password\" class=\"col-xs-3 control-label\">Contraseña</label>
\t\t\t<div class=\"col-xs-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"password\" placeholder=\"contraseña\">
\t\t\t</div>
\t\t</div>

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

{% endblock %}", "subirusuariosprofesores.twig.php", "/opt/lampp/htdocs/Proyecto_Licencias/templates/subirusuariosprofesores.twig.php");
    }
}
