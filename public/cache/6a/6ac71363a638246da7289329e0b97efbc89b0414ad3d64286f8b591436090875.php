<?php

/* cambioContra.php */
class __TwigTemplate_6337e437ed59f1260119d03800433a5cffaa86bec32dac22833bbe9bccb03a87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php", "cambioContra.php", 1);
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
        echo "    <?php //user 58643616S contra pasa ?><?php //user 96732682H contra (nif_nie)?><?php //user 43352551W contra (nada)?><?php //user 58576699D contra pasa ?>
        <div class=\"col-xs-2\"></div>
        <div class=\"col-xs-8 text-center\">
            <input type=\"hidden\" id=\"nifNieNuevaContra\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["nif_nie"] ?? null), "html", null, true);
        echo "\">
            <div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">Cambio de contraseña</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("cambioContra"), "html", null, true);
        echo "\" id=\"form\" method=\"POST\">
                        <div class=\"form-group\">
                            <label for=\"nuevaContrasena\">Nueva contraseña:</label>
                            <input type=\"password\" id=\"nuevaContra\" name=\"nuevaContra\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"nuevaContrasena\">Introduce de nuevo la contraseña:</label>
                            <input type=\"password\" id=\"nuevaContraRepetida\" name=\"nuevaContraRepetida\">
                        </div>
                        <input type=\"button\" id=\"btnNuevaContra\" name=\"btnNuevaContra\" value=\"cambiar!\" class=\"btn btn-primary\">
                    </form> 
\t\t\t\t</div>
\t\t\t</div>
        </div>
        <div class=\"col-xs-2\"></div>
    ";
    }

    public function getTemplateName()
    {
        return "cambioContra.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  36 => 9,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("  {% extends 'plantillabase.twig.php'%}



    {% block body %}
    <?php //user 58643616S contra pasa ?><?php //user 96732682H contra (nif_nie)?><?php //user 43352551W contra (nada)?><?php //user 58576699D contra pasa ?>
        <div class=\"col-xs-2\"></div>
        <div class=\"col-xs-8 text-center\">
            <input type=\"hidden\" id=\"nifNieNuevaContra\" value=\"{{ nif_nie }}\">
            <div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">Cambio de contraseña</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form action=\"{{ path_for('cambioContra') }}\" id=\"form\" method=\"POST\">
                        <div class=\"form-group\">
                            <label for=\"nuevaContrasena\">Nueva contraseña:</label>
                            <input type=\"password\" id=\"nuevaContra\" name=\"nuevaContra\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"nuevaContrasena\">Introduce de nuevo la contraseña:</label>
                            <input type=\"password\" id=\"nuevaContraRepetida\" name=\"nuevaContraRepetida\">
                        </div>
                        <input type=\"button\" id=\"btnNuevaContra\" name=\"btnNuevaContra\" value=\"cambiar!\" class=\"btn btn-primary\">
                    </form> 
\t\t\t\t</div>
\t\t\t</div>
        </div>
        <div class=\"col-xs-2\"></div>
    {% endblock %}
    ", "cambioContra.php", "C:\\xampp1\\htdocs\\ProyectoLicencias\\templates\\cambioContra.php");
    }
}
