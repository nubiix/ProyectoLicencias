<?php

/* administrarusuarios.twig.php */
class __TwigTemplate_b9cdfc8155e926309abfdde674d3f48e4408f3c0f9829a891b5276606c9b8506 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php", "administrarusuarios.twig.php", 1);
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
<div class=\"col-xs-12\">
\t<div class=\"container\">
\t\t<nav class=\"navbar\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<form class=\"navbar-form navbar-right\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<b>Buscador: </b> 
\t\t\t\t\t\t<input type=\"text\" id=\"BuscarUsuarios\" class=\"form-control\" placeholder=\"Buscar\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</nav>
\t\t<div id=\"div_datos\">
 \t\t</div>
 \t\t<div id=\"div_usuario_seleccionado\">
 \t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "administrarusuarios.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantillabase.twig.php'%}



{% block body %}

<div class=\"col-xs-12\">
\t<div class=\"container\">
\t\t<nav class=\"navbar\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<form class=\"navbar-form navbar-right\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<b>Buscador: </b> 
\t\t\t\t\t\t<input type=\"text\" id=\"BuscarUsuarios\" class=\"form-control\" placeholder=\"Buscar\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</nav>
\t\t<div id=\"div_datos\">
 \t\t</div>
 \t\t<div id=\"div_usuario_seleccionado\">
 \t\t</div>
\t</div>
</div>
{% endblock %}", "administrarusuarios.twig.php", "/opt/lampp/htdocs/Proyecto_Licencias/templates/administrarusuarios.twig.php");
    }
}
