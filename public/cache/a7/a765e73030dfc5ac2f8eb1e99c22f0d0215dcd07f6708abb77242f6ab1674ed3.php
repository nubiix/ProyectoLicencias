<?php

/* asociarclaves.twig.php */
class __TwigTemplate_64ccfcc063e6eb63d42825860609b995b077a1b764f49f0153ce096a4c52f851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php", "asociarclaves.twig.php", 1);
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
        <div class=\"text-center\"><h1>Elige el Curso</h1></div>
    </div>  
    <div class=\"row\" style=\"margin-top: 30px\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["curso"] ?? null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "            <div class=\"col-xs-2\"></div>
            <div class=\"col-xs-1\">
                <form method=\"POST\" action=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("asociarclavespost"), "html", null, true);
            echo "\">
\t\t\t\t\t<input type=\"hidden\" id=\"curso\" name=\"curso\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["curso"] ?? null), $context["i"], array(), "array"), "html", null, true);
            echo "\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-link\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["curso"] ?? null), $context["i"], array(), "array"), "html", null, true);
            echo "</button>
\t\t\t\t</form>    
            </div>
            <div class=\"col-xs-1\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>      

";
    }

    public function getTemplateName()
    {
        return "asociarclaves.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  53 => 15,  49 => 14,  45 => 13,  41 => 11,  37 => 10,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantillabase.twig.php'%}



{% block body %}
    <div class=\"row\">
        <div class=\"text-center\"><h1>Elige el Curso</h1></div>
    </div>  
    <div class=\"row\" style=\"margin-top: 30px\">
        {% for i in 0..(curso|length-1) %}
            <div class=\"col-xs-2\"></div>
            <div class=\"col-xs-1\">
                <form method=\"POST\" action=\"{{path_for('asociarclavespost')}}\">
\t\t\t\t\t<input type=\"hidden\" id=\"curso\" name=\"curso\" value=\"{{ curso[i] }}\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-link\">{{ curso[i] }}</button>
\t\t\t\t</form>    
            </div>
            <div class=\"col-xs-1\"></div>
        {% endfor %}
    </div>      

{% endblock %}

", "asociarclaves.twig.php", "/opt/lampp/htdocs/Proyecto_Licencias/templates/asociarclaves.twig.php");
    }
}
