<?php

/* subirxml.twig.php */
class __TwigTemplate_e1b1e53c6e1a13556c4bddf100d5c9b098eb47385d17e7e99acb11b7bc171108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php", "subirxml.twig.php", 1);
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
        echo "<style type=\"text/css\">
\t
</style>
<div class=\"col-xs-1\"></div>
<div class=\"col-xs-5\">
\t<div class=\"row\">
\t\t<h1>Subir XML con licencias</h1>
\t</div>
\t<div class=\"row\">
\t\t<form method=\"POST\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("subirxmlpost"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"subirxml\">Subir XML con licencias</label>
\t\t\t\t<input type=\"file\" id=\"subirxml\" name=\"subirxml\">\t
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Enviar</button>
\t\t</form>
\t</div>
</div>
<div class=\"col-xs-5\">
\t<div class=\"row\">
\t\t<h1>Drag and Drop(Arrastra y suelta)</h1>
\t\t<form method=\"POST\" action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("subirxmlpost"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"file\" id=\"subirxml\" name=\"subirxml\" style=\"\">\t
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Enviar</button>
\t\t</form>
\t</div>
\t<div class=\"row\">
\t</div>
</div>
<div class=\"col-xs-1\"></div>
";
    }

    public function getTemplateName()
    {
        return "subirxml.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 27,  42 => 15,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantillabase.twig.php'%}



{% block body %}
<style type=\"text/css\">
\t
</style>
<div class=\"col-xs-1\"></div>
<div class=\"col-xs-5\">
\t<div class=\"row\">
\t\t<h1>Subir XML con licencias</h1>
\t</div>
\t<div class=\"row\">
\t\t<form method=\"POST\" action=\"{{path_for('subirxmlpost')}}\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"subirxml\">Subir XML con licencias</label>
\t\t\t\t<input type=\"file\" id=\"subirxml\" name=\"subirxml\">\t
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Enviar</button>
\t\t</form>
\t</div>
</div>
<div class=\"col-xs-5\">
\t<div class=\"row\">
\t\t<h1>Drag and Drop(Arrastra y suelta)</h1>
\t\t<form method=\"POST\" action=\"{{path_for('subirxmlpost')}}\" enctype=\"multipart/form-data\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"file\" id=\"subirxml\" name=\"subirxml\" style=\"\">\t
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Enviar</button>
\t\t</form>
\t</div>
\t<div class=\"row\">
\t</div>
</div>
<div class=\"col-xs-1\"></div>
{% endblock %}



", "subirxml.twig.php", "/opt/lampp/htdocs/Proyecto_Licencias/templates/subirxml.twig.php");
    }
}
