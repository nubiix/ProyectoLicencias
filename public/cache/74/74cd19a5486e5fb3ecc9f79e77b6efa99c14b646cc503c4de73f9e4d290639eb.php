<?php

/* elegirprofoalum.twig.php */
class __TwigTemplate_26695162882bb5725b823b874a2d5accdafb1cedb49d6daabf820751c0a63b35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php", "elegirprofoalum.twig.php", 1);
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
\t
<div class=\"col-xs-6\" style=\"margin-top: 100px\">
\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("subirusuariosalumnos"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg btn-block\" role=\"button\">Subir Alumnos</a>
</div>
<div class=\"col-xs-6\" style=\"margin-top: 100px\">
\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("subirusuariosprofesores"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg btn-block\" role=\"button\">Subir Profesores</a>
</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "elegirprofoalum.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  36 => 9,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantillabase.twig.php'%}



{% block body %}
<div style=\"margin-top: 30px; height: 1000px\">
\t
<div class=\"col-xs-6\" style=\"margin-top: 100px\">
\t<a href=\"{{path_for('subirusuariosalumnos')}}\" class=\"btn btn-primary btn-lg btn-block\" role=\"button\">Subir Alumnos</a>
</div>
<div class=\"col-xs-6\" style=\"margin-top: 100px\">
\t<a href=\"{{path_for('subirusuariosprofesores')}}\" class=\"btn btn-primary btn-lg btn-block\" role=\"button\">Subir Profesores</a>
</div>

</div>
{% endblock %}", "elegirprofoalum.twig.php", "C:\\xampp1\\htdocs\\ProyectoLicencias\\templates\\elegirprofoalum.twig.php");
    }
}
