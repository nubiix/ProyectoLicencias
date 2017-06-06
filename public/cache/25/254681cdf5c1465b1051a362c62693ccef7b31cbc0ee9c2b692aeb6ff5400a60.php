<?php

/* subirxml.twig.php */
class __TwigTemplate_12a68146a7818bc112857e09404f394af74ad27a571ef25bca2dc4daa1452aa6 extends Twig_Template
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
        echo "<div style=\"margin-top: 30px; height: 1000px\">
<div class=\"col-xs-1\"></div>
<div class=\"col-xs-5\">
\t<div class=\"row\">
\t\t<h1>Subir XML con licencias</h1>
\t</div>
\t<div class=\"row\">
\t\t<form method=\"POST\" action=\"";
        // line 13
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
        // line 25
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
</div>
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
        return array (  55 => 25,  40 => 13,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantillabase.twig.php'%}



{% block body %}
<div style=\"margin-top: 30px; height: 1000px\">
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
</div>
{% endblock %}



", "subirxml.twig.php", "C:\\xampp\\htdocs\\Proyecto_Licencias\\templates\\subirxml.twig.php");
    }
}
