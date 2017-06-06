<?php

/* subirusuarioerror.twig.php */
class __TwigTemplate_a88ae650a02423a1a972ecd4f25a18d224a8fdc0dc9a0a23046ba1feaa81622a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php ", "subirusuarioerror.twig.php", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "plantillabase.twig.php ";
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
<h1>Alguno/s de los alumnos/profesores que has intentado subir ya existe en nuestra base de datos o ha dado un error. Por favor, revisalo.</h1>




";
    }

    public function getTemplateName()
    {
        return "subirusuarioerror.twig.php";
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
        return new Twig_Source("{% extends 'plantillabase.twig.php '%}



{% block body %}

<h1>Alguno/s de los alumnos/profesores que has intentado subir ya existe en nuestra base de datos o ha dado un error. Por favor, revisalo.</h1>




{% endblock %}", "subirusuarioerror.twig.php", "C:\\xampp1\\htdocs\\Proyecto_Licencias\\templates\\subirusuarioerror.twig.php");
    }
}
