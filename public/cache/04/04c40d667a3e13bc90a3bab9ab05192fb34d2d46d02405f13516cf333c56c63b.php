<?php

/* subirusuarios.twig.php */
class __TwigTemplate_7f0c10d11b3ab60f539602bb65d6d6b28177582a19c072b570a80403fcc9f2f7 extends Twig_Template
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
        echo "
<h1>usuarios subidos a la base de datos correctamente</h1>




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

<h1>usuarios subidos a la base de datos correctamente</h1>




{% endblock %}", "subirusuarios.twig.php", "/opt/lampp/htdocs/Proyecto_Licencias/templates/subirusuarios.twig.php");
    }
}
