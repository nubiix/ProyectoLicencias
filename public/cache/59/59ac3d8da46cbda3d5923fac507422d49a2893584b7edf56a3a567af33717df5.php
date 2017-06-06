<?php

/* principaladmin.twig.php */
class __TwigTemplate_86a91e8e50569d5c7b3a3ae64ad950eadd9a8342c60b25889aa705daf63565f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php", "principaladmin.twig.php", 1);
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
        echo "<div class=\"col-xs-12\" style=\"margin-top: 30px; height: 1000px\">
\t<div class=\"container\">
\t\t<div class=\"col-xs-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">Ultimos Usuarios Conectados</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ultimosConectados"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 15
            echo "\t\t\t\t\t<p><b>";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</b></p>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">Licencias Disponibles</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totalLicencias"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 25
            echo "\t\t\t\t\t<p><b>";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo ": <i class=\"text-primary\">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</i></b></p>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-xs-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">Mensajes no contestados <span class=\"badge\">
\t\t\t\t\t\t\t";
        // line 34
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["mensajes"] ?? null), 0, array(), "array") == "No tienes ningun mensaje pendiente")) {
            // line 35
            echo "\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mensajes"] ?? null), 0, array(), "array")), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t</span></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mensajes"] ?? null), 0, array(), "array")) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 43
            echo "\t\t\t\t\t<div class=\"row well\" style=\"margin: 5px;\">
\t\t\t\t\t\t    <div class=\"row\">
\t\t\t\t\t\t        <div class=\"col-xs-4\"><label>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["mensajes"] ?? null), 1, array(), "array"), $context["i"], array(), "array"), "html", null, true);
            echo "</label></div>
\t\t\t\t\t\t        <div class=\"col-xs-4\"><label>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["mensajes"] ?? null), 2, array(), "array"), $context["i"], array(), "array"), "html", null, true);
            echo "</label></div>
\t\t\t\t\t\t        <div class=\"col-xs-4\"><label>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["mensajes"] ?? null), 3, array(), "array"), $context["i"], array(), "array"), "html", null, true);
            echo "</label></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<form class=\"form-horizontal\" action=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("enviar_contestacion"), "html", null, true);
            echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"contestacion_id\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["mensajes"] ?? null), 0, array(), "array"), $context["i"], array(), "array"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"contestacion_email\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["mensajes"] ?? null), 1, array(), "array"), $context["i"], array(), "array"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<textarea id=\"";
            // line 54
            echo twig_escape_filter($this->env, ("contestacion," . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["mensajes"] ?? null), 0, array(), "array"), $context["i"], array(), "array")), "html", null, true);
            echo "\" name=\"contestacion\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" id=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["mensajes"] ?? null), 0, array(), "array"), $context["i"], array(), "array"), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["mensajes"] ?? null), 0, array(), "array"), $context["i"], array(), "array"), "html", null, true);
            echo "\">Enviar Contestacion</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "principaladmin.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 63,  145 => 57,  139 => 54,  135 => 53,  131 => 52,  126 => 50,  120 => 47,  116 => 46,  112 => 45,  108 => 43,  104 => 42,  99 => 39,  93 => 37,  89 => 35,  87 => 34,  78 => 27,  67 => 25,  63 => 24,  54 => 17,  45 => 15,  41 => 14,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantillabase.twig.php'%}



{% block body %}
<div class=\"col-xs-12\" style=\"margin-top: 30px; height: 1000px\">
\t<div class=\"container\">
\t\t<div class=\"col-xs-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">Ultimos Usuarios Conectados</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t{% for value in ultimosConectados %}
\t\t\t\t\t<p><b>{{ value }}</b></p>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">Licencias Disponibles</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t{% for key,value in totalLicencias %}
\t\t\t\t\t<p><b>{{ key }}: <i class=\"text-primary\">{{value}}</i></b></p>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-xs-6\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">Mensajes no contestados <span class=\"badge\">
\t\t\t\t\t\t\t{% if mensajes[0] == 'No tienes ningun mensaje pendiente' %}
\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{{ mensajes[0]|length }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</span></h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t{% for i in 0..(mensajes[0]|length-1) %}
\t\t\t\t\t<div class=\"row well\" style=\"margin: 5px;\">
\t\t\t\t\t\t    <div class=\"row\">
\t\t\t\t\t\t        <div class=\"col-xs-4\"><label>{{ mensajes[1][i] }}</label></div>
\t\t\t\t\t\t        <div class=\"col-xs-4\"><label>{{ mensajes[2][i] }}</label></div>
\t\t\t\t\t\t        <div class=\"col-xs-4\"><label>{{ mensajes[3][i] }}</label></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<form class=\"form-horizontal\" action=\"{{path_for('enviar_contestacion')}}\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"contestacion_id\" value=\"{{ mensajes[0][i] }}\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"contestacion_email\" value=\"{{ mensajes[1][i] }}\">
\t\t\t\t\t\t\t\t\t\t<textarea id=\"{{'contestacion,'~mensajes[0][i] }}\" name=\"contestacion\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" id=\"{{ mensajes[0][i] }}\" name=\"{{ mensajes[0][i] }}\">Enviar Contestacion</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}", "principaladmin.twig.php", "C:\\xampp\\htdocs\\Proyecto_Licencias\\templates\\principaladmin.twig.php");
    }
}
