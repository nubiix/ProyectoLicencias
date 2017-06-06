<?php

/* licenciasvolumen.twig.php */
class __TwigTemplate_8062c3cf9f4ef4248aa960df065ec360eed0331f16a3092746b1b1e4dfcf7a95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php", "licenciasvolumen.twig.php", 1);
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
<div class=\"col-xs-10\">
<h1 class=\"text-left\">Licencias de volumen:</h1>
\t<div class=\"row\">
\t\t<div class=\"col-xs-6\">
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["nombre"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 13
            echo "\t\t\t\t<h3>Para el sistema: ";
            echo twig_escape_filter($this->env, $context["j"], "html", null, true);
            echo "</h3>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t</div>
\t\t<div class=\"col-xs-6\">
\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clave"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 18
            echo "\t\t\t\t<h3>Clave: ";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "</h3>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo " 
\t\t</div>
\t</div>
</div>
<div class=\"col-xs-1\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "licenciasvolumen.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  60 => 18,  56 => 17,  52 => 15,  43 => 13,  39 => 12,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantillabase.twig.php'%}



{% block body %}
<div style=\"margin-top: 30px; height: 1000px\">
<div class=\"col-xs-1\"></div>
<div class=\"col-xs-10\">
<h1 class=\"text-left\">Licencias de volumen:</h1>
\t<div class=\"row\">
\t\t<div class=\"col-xs-6\">
\t\t\t{% for j in nombre %}
\t\t\t\t<h3>Para el sistema: {{ j }}</h3>
\t\t\t{% endfor %}
\t\t</div>
\t\t<div class=\"col-xs-6\">
\t\t\t{% for k in clave %}
\t\t\t\t<h3>Clave: {{ k }}</h3>
\t\t\t{% endfor %} 
\t\t</div>
\t</div>
</div>
<div class=\"col-xs-1\"></div>
</div>
{% endblock %}", "licenciasvolumen.twig.php", "C:\\xampp\\htdocs\\Proyecto_Licencias\\templates\\licenciasvolumen.twig.php");
    }
}
