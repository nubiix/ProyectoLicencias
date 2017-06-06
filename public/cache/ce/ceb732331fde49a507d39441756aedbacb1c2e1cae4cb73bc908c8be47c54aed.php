<?php

/* asociarclaves.twig.php */
class __TwigTemplate_1dab8416b600a8912bbdc9b4ea36e7a03c21f9271832fe8e1bfb130647c93cf0 extends Twig_Template
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
        echo "<div style=\"margin-top: 30px; height: 1000px\">
    <div class=\"row\">
        <div class=\"text-center\"><h1>Elige el Curso</h1></div>
    </div>  
    <div class=\"row\" style=\"margin-top: 30px\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["curso"] ?? null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo "            <div class=\"col-xs-2\"></div>
            <div class=\"col-xs-1\">
                <form method=\"POST\" action=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("asociarclavespost"), "html", null, true);
            echo "\">
\t\t\t\t\t<input type=\"hidden\" id=\"curso\" name=\"curso\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["curso"] ?? null), $context["i"], array(), "array"), "html", null, true);
            echo "\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
            // line 16
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
        // line 21
        echo "    </div>      
</div>
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
        return array (  65 => 21,  54 => 16,  50 => 15,  46 => 14,  42 => 12,  38 => 11,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantillabase.twig.php'%}



{% block body %}
<div style=\"margin-top: 30px; height: 1000px\">
    <div class=\"row\">
        <div class=\"text-center\"><h1>Elige el Curso</h1></div>
    </div>  
    <div class=\"row\" style=\"margin-top: 30px\">
        {% for i in 0..(curso|length-1) %}
            <div class=\"col-xs-2\"></div>
            <div class=\"col-xs-1\">
                <form method=\"POST\" action=\"{{path_for('asociarclavespost')}}\">
\t\t\t\t\t<input type=\"hidden\" id=\"curso\" name=\"curso\" value=\"{{ curso[i] }}\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">{{ curso[i] }}</button>
\t\t\t\t</form>    
            </div>
            <div class=\"col-xs-1\"></div>
        {% endfor %}
    </div>      
</div>
{% endblock %}

", "asociarclaves.twig.php", "C:\\xampp\\htdocs\\Proyecto_Licencias\\templates\\asociarclaves.twig.php");
    }
}
