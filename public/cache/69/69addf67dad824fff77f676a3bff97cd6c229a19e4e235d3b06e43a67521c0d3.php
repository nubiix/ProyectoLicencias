<?php

/* subirlicenciavolumen.twig.php */
class __TwigTemplate_914c93de08b8c4f1d2ad3d5cf1afe563844d3f67cee3f456d46f37ddb74c4a9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php", "subirlicenciavolumen.twig.php", 1);
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
        echo "<div class=\"col-xs-3\"></div>
<div class=\"col-xs-6\">
\t<h1>Subir licencia de volumen</h1>
\t<form method=\"POST\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("subirlicenciavolumenpost"), "html", null, true);
        echo "\">
\t<div class=\"form-group\">
\t\t<label for=\"nombre\">Nombre</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"nombre\" placeholder=\"nombre de la key\" name=\"nombre\">
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"key\">Clave</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"key\" placeholder=\"key\" name=\"key\">
\t</div>
\t<button type=\"submit\" class=\"btn btn-primary\">subir licencia</button>
</form>
</div>
<div class=\"col-xs-3\"></div>

";
    }

    public function getTemplateName()
    {
        return "subirlicenciavolumen.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantillabase.twig.php'%}



{% block body %}
<div class=\"col-xs-3\"></div>
<div class=\"col-xs-6\">
\t<h1>Subir licencia de volumen</h1>
\t<form method=\"POST\" action=\"{{path_for('subirlicenciavolumenpost')}}\">
\t<div class=\"form-group\">
\t\t<label for=\"nombre\">Nombre</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"nombre\" placeholder=\"nombre de la key\" name=\"nombre\">
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"key\">Clave</label>
\t\t<input type=\"text\" class=\"form-control\" id=\"key\" placeholder=\"key\" name=\"key\">
\t</div>
\t<button type=\"submit\" class=\"btn btn-primary\">subir licencia</button>
</form>
</div>
<div class=\"col-xs-3\"></div>

{% endblock %}", "subirlicenciavolumen.twig.php", "C:\\xampp1\\htdocs\\Proyecto_Licencias\\templates\\subirlicenciavolumen.twig.php");
    }
}
