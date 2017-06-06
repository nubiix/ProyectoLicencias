<?php

/* principalalumno.twig.php */
class __TwigTemplate_db18cc785cd6a46a78fee23502b3856282213b85c43a4f2c228fa857fa031c1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php", "principalalumno.twig.php", 1);
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
<div class=\"col-xs-3 well\">
\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../img/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["datos_user"] ?? null), 8, array()), "html", null, true);
        echo ".jpg\" class=\"img-rounded\" alt=\"Responsive image\" width=\"120\" height=\"150\" onerror=\"this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../img/default.png'\">
\t\t<p><b>Nombre:</b> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["datos_user"] ?? null), 4, array()), "html", null, true);
        echo "</p>
\t\t<p><b>Apellidos:</b> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["datos_user"] ?? null), 5, array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["datos_user"] ?? null), 6, array()), "html", null, true);
        echo "</p>
\t\t<p><b>DNI:</b> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["datos_user"] ?? null), 9, array()), "html", null, true);
        echo "</p>
\t\t<p><b>Cial:</b> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["datos_user"] ?? null), 7, array()), "html", null, true);
        echo "</p>
\t\t<p><b>Curso:</b> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["datos_user"] ?? null), 1, array()), "html", null, true);
        echo "</p>
\t\t<p><b>Numero de lista:</b> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["datos_user"] ?? null), 3, array()), "html", null, true);
        echo "</p>
\t\t<p><b>Email:</b> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["datos_user"] ?? null), 12, array()), "html", null, true);
        echo "</p>
</div>
<div class=\"col-xs-8\">
\t<div class=\"row\" style=\"margin-left: 150px\">
\t\t<h1>Claves Otorgadas</h1>
\t</div>
\t";
        // line 21
        if ((($context["nombre"] ?? null) == null)) {
            // line 22
            echo "\t\t<div class=\"row\">
\t\t\t<h3>Me temo que no tienes licencias ¡¡RECLAMA POR TUS DERECHOS!!</h3>
\t\t\t<img src=\"https://media.giphy.com/media/3oriff4xQ7Oq2TIgTu/giphy.gif\" alt=\"esta vacio compay!\" style=\"margin-left: 100px\">
\t\t</div>
\t";
        } else {
            // line 27
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["nombre"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 28
                echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t<p class=\"lead\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["nombre"] ?? null), $context["i"], array(), "array"), "html", null, true);
                echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-7\">
\t\t\t\t\t<p class=\"lead\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["licencia"] ?? null), $context["i"], array(), "array"), "html", null, true);
                echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-2\">
\t\t\t\t\t<form method=\"POST\" action=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("generar_pdf"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<input type=\"hidden\" id=\"id\" name=\"id\" value=\"";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["id"] ?? null), $context["i"], array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<input type=\"hidden\" id=\"nombre\" name=\"nombre\" value=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["nombre"] ?? null), $context["i"], array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<input type=\"hidden\" id=\"licencia\" name=\"licencia\" value=\"";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["licencia"] ?? null), $context["i"], array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("generar_pdf"), "html", null, true);
                echo "\">Generar PDF</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t";
        }
        // line 46
        echo "\t";
        if ((($context["nombre"] ?? null) != null)) {
            // line 47
            echo "\t\t<div class=\"row\">
\t\t\t<form method=\"POST\" action=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("generar_todos_pdf"), "html", null, true);
            echo "\">
\t\t\t\t<input type=\"hidden\" id=\"id\" name=\"id\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, ($context["total_id"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" style=\"margin-left: 200px\">generar PDF con todas sus claves</button>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 54
        echo "\t
</div>
<div class=\"col-xs-1\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "principalalumno.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 54,  148 => 49,  144 => 48,  141 => 47,  138 => 46,  135 => 45,  124 => 40,  120 => 39,  116 => 38,  112 => 37,  108 => 36,  102 => 33,  96 => 30,  92 => 28,  87 => 27,  80 => 22,  78 => 21,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  47 => 10,  43 => 9,  35 => 8,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantillabase.twig.php'%}



{% block body %}
<div style=\"margin-top: 30px; height: 1000px\">
<div class=\"col-xs-3 well\">
\t<img src=\"{{base_url()}}/../img/{{ datos_user.8 }}.jpg\" class=\"img-rounded\" alt=\"Responsive image\" width=\"120\" height=\"150\" onerror=\"this.src='{{base_url()}}/../img/default.png'\">
\t\t<p><b>Nombre:</b> {{ datos_user.4 }}</p>
\t\t<p><b>Apellidos:</b> {{ datos_user.5 }} {{ datos_user.6 }}</p>
\t\t<p><b>DNI:</b> {{ datos_user.9 }}</p>
\t\t<p><b>Cial:</b> {{ datos_user.7 }}</p>
\t\t<p><b>Curso:</b> {{ datos_user.1 }}</p>
\t\t<p><b>Numero de lista:</b> {{ datos_user.3 }}</p>
\t\t<p><b>Email:</b> {{ datos_user.12 }}</p>
</div>
<div class=\"col-xs-8\">
\t<div class=\"row\" style=\"margin-left: 150px\">
\t\t<h1>Claves Otorgadas</h1>
\t</div>
\t{% if nombre == null %}
\t\t<div class=\"row\">
\t\t\t<h3>Me temo que no tienes licencias ¡¡RECLAMA POR TUS DERECHOS!!</h3>
\t\t\t<img src=\"https://media.giphy.com/media/3oriff4xQ7Oq2TIgTu/giphy.gif\" alt=\"esta vacio compay!\" style=\"margin-left: 100px\">
\t\t</div>
\t{% else %}
\t\t{% for i in 0..(nombre|length-1) %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t<p class=\"lead\">{{ nombre[i] }}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-7\">
\t\t\t\t\t<p class=\"lead\">{{ licencia[i] }}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-2\">
\t\t\t\t\t<form method=\"POST\" action=\"{{path_for('generar_pdf')}}\">
\t\t\t\t\t\t<input type=\"hidden\" id=\"id\" name=\"id\" value=\"{{ id[i] }}\">
\t\t\t\t\t\t<input type=\"hidden\" id=\"nombre\" name=\"nombre\" value=\"{{ nombre[i] }}\">
\t\t\t\t\t\t<input type=\"hidden\" id=\"licencia\" name=\"licencia\" value=\"{{ licencia[i] }}\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" href=\"{{path_for('generar_pdf')}}\">Generar PDF</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t{% endif %}
\t{% if nombre != null %}
\t\t<div class=\"row\">
\t\t\t<form method=\"POST\" action=\"{{path_for('generar_todos_pdf')}}\">
\t\t\t\t<input type=\"hidden\" id=\"id\" name=\"id\" value=\"{{total_id}}\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" style=\"margin-left: 200px\">generar PDF con todas sus claves</button>
\t\t\t</form>
\t\t</div>
\t{% endif %}
\t
</div>
<div class=\"col-xs-1\"></div>
</div>
{% endblock %}", "principalalumno.twig.php", "C:\\xampp\\htdocs\\Proyecto_Licencias\\templates\\principalalumno.twig.php");
    }
}
