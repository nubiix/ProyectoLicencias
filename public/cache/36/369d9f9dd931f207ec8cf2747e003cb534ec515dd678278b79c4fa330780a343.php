<?php

/* subirusuarios.twig.php */
class __TwigTemplate_f5e23b2b17a69951a004c620c2c06812fba794814683e9d6c8eb669bb93d5fe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php", "subirusuarios.twig.php", 1);
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
        echo "<div class=\"col-xs-1\"></div>
<div class=\"col-xs-10\">
\t<h1>Usuarios subidos a la base de datos correctamente</h1>\t
</div>
<div class=\"col-xs-1\"></div>



";
    }

    public function getTemplateName()
    {
        return "subirusuarios.twig.php";
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
<div class=\"col-xs-1\"></div>
<div class=\"col-xs-10\">
\t<h1>Usuarios subidos a la base de datos correctamente</h1>\t
</div>
<div class=\"col-xs-1\"></div>



{% endblock %}", "subirusuarios.twig.php", "C:\\xampp1\\htdocs\\Proyecto_Licencias\\templates\\subirusuarios.twig.php");
    }
}
