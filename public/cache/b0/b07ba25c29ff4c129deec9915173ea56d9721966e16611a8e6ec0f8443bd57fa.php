<?php

/* generarpdf.twig.php */
class __TwigTemplate_c2fc9c4a7c6a40efba8e8bf65eb5a8879e61eba7b8f7f1aa4bdb62cbc32ecc6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>
\t<img src=\"../img/Cabecera24.png\" height=\"150\" width=\"700\">
\t<img src=\"../img/msdnaa.gif\" height=\"150\" width=\"300\">
\t<div style=\"margin-left: 80px; margin-right: 80px\">
\t\t<p>
\t\t\t<img src=\"../img/";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["datos_user"] ?? null), 8, array()), "html", null, true);
        echo ".jpg\" onerror=\"this.src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../img/default.png'\" height=\"120\" width=\"100\">
\t\t</p>
\t\t<p>
\t\t\tEl/la alumno/a ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["datos_user"] ?? null), 5, array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["datos_user"] ?? null), 6, array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["datos_user"] ?? null), 4, array()), "html", null, true);
        echo ", con DNI ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["datos_user"] ?? null), 9, array()), "html", null, true);
        echo " <b>del I.E.S. Puerto
\t\t\tde la Cruz-Telesforo Bravo</b>, matriculado/a en el curso académico <b>2015-2016</b>, en el Ciclo de F.P. ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["datos_user"] ?? null), 2, array()), "html", null, true);
        echo "
\t\t\trecibe el sofware ";
        // line 11
        echo twig_escape_filter($this->env, ($context["nombre"] ?? null), "html", null, true);
        echo ", con licencia ";
        echo twig_escape_filter($this->env, ($context["licencia"] ?? null), "html", null, true);
        echo " para su uso personal y exclusivo. Según convenio MSDN Microsoft
\t\t\tAlliance establecido entre el departamento de Informática y Microsoft se da las licencias personales del software arriba indicado, 
\t\t\tpara <b>uso exclusivo del alumnado</b>.Aceptando el/la alumno/a todas las condiciones establecidas por Microsoft en su software.
\t\t</p>
\t\t<p></p>
\t\tEn el I.E.S Puerto de la Cruz, a
\t\t<p></p>
\t\tEl/la alumno/a:
\t\t<p></p>
\t\tFirma:
\t</div>
</div>
 <div style=\"page-break-after:always;\"></div>


";
    }

    public function getTemplateName()
    {
        return "generarpdf.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  44 => 10,  34 => 9,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
\t<img src=\"../img/Cabecera24.png\" height=\"150\" width=\"700\">
\t<img src=\"../img/msdnaa.gif\" height=\"150\" width=\"300\">
\t<div style=\"margin-left: 80px; margin-right: 80px\">
\t\t<p>
\t\t\t<img src=\"../img/{{ datos_user.8 }}.jpg\" onerror=\"this.src='{{base_url()}}/../img/default.png'\" height=\"120\" width=\"100\">
\t\t</p>
\t\t<p>
\t\t\tEl/la alumno/a {{ datos_user.5 }} {{ datos_user.6 }}, {{ datos_user.4 }}, con DNI {{ datos_user.9 }} <b>del I.E.S. Puerto
\t\t\tde la Cruz-Telesforo Bravo</b>, matriculado/a en el curso académico <b>2015-2016</b>, en el Ciclo de F.P. {{ datos_user.2 }}
\t\t\trecibe el sofware {{ nombre }}, con licencia {{ licencia }} para su uso personal y exclusivo. Según convenio MSDN Microsoft
\t\t\tAlliance establecido entre el departamento de Informática y Microsoft se da las licencias personales del software arriba indicado, 
\t\t\tpara <b>uso exclusivo del alumnado</b>.Aceptando el/la alumno/a todas las condiciones establecidas por Microsoft en su software.
\t\t</p>
\t\t<p></p>
\t\tEn el I.E.S Puerto de la Cruz, a
\t\t<p></p>
\t\tEl/la alumno/a:
\t\t<p></p>
\t\tFirma:
\t</div>
</div>
 <div style=\"page-break-after:always;\"></div>


", "generarpdf.twig.php", "C:\\xampp\\htdocs\\Proyecto_Licencias\\templates\\generarpdf.twig.php");
    }
}
