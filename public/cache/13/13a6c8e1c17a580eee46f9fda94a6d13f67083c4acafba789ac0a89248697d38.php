<?php

/* login.twig.php */
class __TwigTemplate_37c74e5aca74de096c2149183340544ff3f74dc17158dadbdf2ab1cb99ffef68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php", "login.twig.php", 1);
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

<!--Form with header-->
    <form class=\"form-horizontal\" action=\"\" method=\"POST\">
        <div class=\"card\">
            <div class=\"card-block\">
            
                <!--Header-->
                <div class=\"form-header blue-gradient\">
                  <h3><i class=\"fa fa-user\"></i> LOGIN:</h3>
                </div>
                
                <!--Body-->
                <div class=\"md-form\">
                  <i class=\"fa fa-user prefix\"></i>
                  <input type=\"text\" id=\"usuario\" name=\"usuario\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["usuario"] ?? null), "html", null, true);
        echo "\" class=\"form-control\">
                  <label for=\"form3\">Usuario</label>
                </div>
                <div class=\"md-form\">
                  <i class=\"fa fa-lock prefix\"></i>
                  <input type=\"password\" id=\"password\" name=\"password\"  value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["pass"] ?? null), "html", null, true);
        echo "\"  class=\"form-control\">
                  <label for=\"form4\">Contraseña</label>
                </div>
                ";
        // line 29
        if ((($context["error"] ?? null) == 1)) {
            // line 30
            echo "    \t\t\t\t<div class=\"col-xs-2\"></div>
    \t\t\t\t<div class=\"col-xs-10 alert alert-danger\" role=\"alert\">
    \t\t\t\t\t<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<span class=\"sr-only\">Error:</span>
    \t\t\t\t\tUsuario o Contraseña incorrectos
    \t\t\t\t</div>
    \t\t\t";
        }
        // line 37
        echo "                            
                            
                <div class=\"text-center\">
                  <button type=\"submit\" class=\"btn btn-primary\">Entrar!</button>
\t\t\t\t  <button type=\"reset\" class=\"btn btn-danger\">Cancelar</button>                  
                    <div class=\"modal-footer\">
                    \t<p>
                        \t<input type=\"checkbox\" name=\"guardar_clave\" value=\"1\"> Recordar mis datos · ¿Olvidaste tu  <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("restaurar_password"), "html", null, true);
        echo "\">contraseña</a>?
                        </p>
                    </div>
                </div>
            
            </div>
        </div>
    </form>

<!--/Form with header-->


";
    }

    public function getTemplateName()
    {
        return "login.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 44,  73 => 37,  64 => 30,  62 => 29,  56 => 26,  48 => 21,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantillabase.twig.php'%}



{% block body %}


<!--Form with header-->
    <form class=\"form-horizontal\" action=\"\" method=\"POST\">
        <div class=\"card\">
            <div class=\"card-block\">
            
                <!--Header-->
                <div class=\"form-header blue-gradient\">
                  <h3><i class=\"fa fa-user\"></i> LOGIN:</h3>
                </div>
                
                <!--Body-->
                <div class=\"md-form\">
                  <i class=\"fa fa-user prefix\"></i>
                  <input type=\"text\" id=\"usuario\" name=\"usuario\" value=\"{{ usuario }}\" class=\"form-control\">
                  <label for=\"form3\">Usuario</label>
                </div>
                <div class=\"md-form\">
                  <i class=\"fa fa-lock prefix\"></i>
                  <input type=\"password\" id=\"password\" name=\"password\"  value=\"{{ pass }}\"  class=\"form-control\">
                  <label for=\"form4\">Contraseña</label>
                </div>
                {% if (error == 1) %}
    \t\t\t\t<div class=\"col-xs-2\"></div>
    \t\t\t\t<div class=\"col-xs-10 alert alert-danger\" role=\"alert\">
    \t\t\t\t\t<span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
    \t\t\t\t\t<span class=\"sr-only\">Error:</span>
    \t\t\t\t\tUsuario o Contraseña incorrectos
    \t\t\t\t</div>
    \t\t\t{% endif %}
                            
                            
                <div class=\"text-center\">
                  <button type=\"submit\" class=\"btn btn-primary\">Entrar!</button>
\t\t\t\t  <button type=\"reset\" class=\"btn btn-danger\">Cancelar</button>                  
                    <div class=\"modal-footer\">
                    \t<p>
                        \t<input type=\"checkbox\" name=\"guardar_clave\" value=\"1\"> Recordar mis datos · ¿Olvidaste tu  <a href=\"{{path_for('restaurar_password')}}\">contraseña</a>?
                        </p>
                    </div>
                </div>
            
            </div>
        </div>
    </form>

<!--/Form with header-->


{% endblock %}", "login.twig.php", "/opt/lampp/htdocs/Proyecto_Licencias/templates/login.twig.php");
    }
}
