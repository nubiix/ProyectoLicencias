<?php

/* asociarclavespost.twig.php */
class __TwigTemplate_c788f357ab9c852bd0f6f0e32a2883cfd0ed492be4cd7c50cc6751c95ddff5b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php", "asociarclavespost.twig.php", 1);
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
        echo "    <div class=\"row\">
        <div class=\"col-xs-8\">
            <div class=\"text-center\"><h3>";
        // line 8
        echo twig_escape_filter($this->env, ($context["curso"] ?? null), "html", null, true);
        echo "</h3></div>
        </div>
        <div class=\"col-xs-4\">
        </div>
    </div> 
    <div>
 
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["alumnos"] ?? null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "\t\t<div class=\"row\">
    \t<div class=\"col-xs-1\"></div>
        <div class=\"well col-xs-10\">
            <div class=\"col-xs-4\">
                <h3>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["alumnos"] ?? null), $context["i"], array(), "array"), "html", null, true);
            echo "</h3>    
            </div>
            <div class=\"col-xs-8\">
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["licencias"] ?? null), $context["i"], array(), "array"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 24
                echo "                    ";
                if (($context["value"] == 0)) {
                    // line 25
                    echo "\t                    <div class=\"row\" style=\"margin-bottom: 20px\">
\t                        <div class=\"col-xs-3\">
\t                            <input type=\"button\" id='";
                    // line 27
                    echo twig_escape_filter($this->env, (($context["key"] . ",") . twig_get_attribute($this->env, $this->getSourceContext(), ($context["idAlumnos"] ?? null), $context["i"], array(), "array")), "html", null, true);
                    echo "' class=\"btn btn-primary\" onclick=\"asignarLicencia(this.id)\" value=\"asociar\" >
\t                        </div>
\t                        <div class=\"col-xs-1\"></div>
\t                        <div class=\"col-xs-8\">
\t                            <p class=\"bg-success\">";
                    // line 31
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</p>
\t                        </div>
\t                    </div>
                    ";
                } else {
                    // line 35
                    echo "                    \t<div class=\"row\" style=\"margin-bottom: 20px\">
\t                        <div class=\"col-xs-3\">
\t                            <p class=\"text-danger\">Asignada :D</p>
\t                        </div>
\t                        <div class=\"col-xs-1\"></div>
\t                        <div class=\"col-xs-8\">
\t                            <p class=\"bg-danger\">";
                    // line 41
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</p>
\t                        </div>
\t                    </div>    
                    ";
                }
                // line 45
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </div>
        </div>
        <div class=\"col-xs-1\"></div>
\t\t</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "asociarclavespost.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 51,  107 => 46,  101 => 45,  94 => 41,  86 => 35,  79 => 31,  72 => 27,  68 => 25,  65 => 24,  61 => 23,  55 => 20,  49 => 16,  45 => 15,  35 => 8,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantillabase.twig.php'%}



{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-8\">
            <div class=\"text-center\"><h3>{{ curso }}</h3></div>
        </div>
        <div class=\"col-xs-4\">
        </div>
    </div> 
    <div>
 
    {% for i in 0..(alumnos|length-1) %}
\t\t<div class=\"row\">
    \t<div class=\"col-xs-1\"></div>
        <div class=\"well col-xs-10\">
            <div class=\"col-xs-4\">
                <h3>{{ alumnos[i] }}</h3>    
            </div>
            <div class=\"col-xs-8\">
                {% for key,value in licencias[i] %}
                    {% if value == 0 %}
\t                    <div class=\"row\" style=\"margin-bottom: 20px\">
\t                        <div class=\"col-xs-3\">
\t                            <input type=\"button\" id='{{ key ~ \",\" ~ idAlumnos[i] }}' class=\"btn btn-primary\" onclick=\"asignarLicencia(this.id)\" value=\"asociar\" >
\t                        </div>
\t                        <div class=\"col-xs-1\"></div>
\t                        <div class=\"col-xs-8\">
\t                            <p class=\"bg-success\">{{ key }}</p>
\t                        </div>
\t                    </div>
                    {% else %}
                    \t<div class=\"row\" style=\"margin-bottom: 20px\">
\t                        <div class=\"col-xs-3\">
\t                            <p class=\"text-danger\">Asignada :D</p>
\t                        </div>
\t                        <div class=\"col-xs-1\"></div>
\t                        <div class=\"col-xs-8\">
\t                            <p class=\"bg-danger\">{{ key }}</p>
\t                        </div>
\t                    </div>    
                    {% endif %}
                {% endfor %}
            </div>
        </div>
        <div class=\"col-xs-1\"></div>
\t\t</div>
    {% endfor %}
    </div>
{% endblock %}", "asociarclavespost.twig.php", "/opt/lampp/htdocs/Proyecto_Licencias/templates/asociarclavespost.twig.php");
    }
}
