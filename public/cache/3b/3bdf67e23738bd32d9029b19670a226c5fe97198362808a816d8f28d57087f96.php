<?php

/* changepass.twig.php */
class __TwigTemplate_a61bc7aa06c97694aec13ca7737e3c0556ce6ce499890a9d6d457b822563194e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php", "changepass.twig.php", 1);
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
\t<div class=\"jumbotron\">
\t\t<h1>Te has olvidado de la contraseña y ahora acudes a tu Dios en busca de ayuda!</h1>
\t\t<p>Pues estás de suerte, tras el sencillo paso de poner tu nombre de usuario en la siguiente casilla, te enviaremos un e-mail a tu correo</p>
\t\t<p> 
\t\t\t<form>
\t\t\t \t<input type=\"text\" name=\"usuario\"> <a class=\"btn btn-primary btn-lg\" type=\"submit\" 
\t\t\t \tonclick=\"porfavor()\">Enviar</a>
\t\t\t</form>
\t\t</p>
\t</div>
</div>
<script type=\"text/javascript\">
\tfunction porfavor() {
\t\t//Ingresamos un mensaje a mostrar
\t\tvar palabra = prompt(\"Pídelo por favor(Escribe POR FAVOR):\", \"\");
\t\t//Detectamos si el usuario ingreso un valor
\t\tif (palabra == \"POR FAVOR\"){
\t\talert(\"Muy bien, correo enviado!\");
\t\t} else {
\t\t\talert(\"Uhhh, no has escrito POR FAVOR, no saldrás de aqui.\");
\t\t\tporfavor();
\t\t}
\t}
</script>
<div class=\"col-xs-1\"></div>

";
    }

    public function getTemplateName()
    {
        return "changepass.twig.php";
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
\t<div class=\"jumbotron\">
\t\t<h1>Te has olvidado de la contraseña y ahora acudes a tu Dios en busca de ayuda!</h1>
\t\t<p>Pues estás de suerte, tras el sencillo paso de poner tu nombre de usuario en la siguiente casilla, te enviaremos un e-mail a tu correo</p>
\t\t<p> 
\t\t\t<form>
\t\t\t \t<input type=\"text\" name=\"usuario\"> <a class=\"btn btn-primary btn-lg\" type=\"submit\" 
\t\t\t \tonclick=\"porfavor()\">Enviar</a>
\t\t\t</form>
\t\t</p>
\t</div>
</div>
<script type=\"text/javascript\">
\tfunction porfavor() {
\t\t//Ingresamos un mensaje a mostrar
\t\tvar palabra = prompt(\"Pídelo por favor(Escribe POR FAVOR):\", \"\");
\t\t//Detectamos si el usuario ingreso un valor
\t\tif (palabra == \"POR FAVOR\"){
\t\talert(\"Muy bien, correo enviado!\");
\t\t} else {
\t\t\talert(\"Uhhh, no has escrito POR FAVOR, no saldrás de aqui.\");
\t\t\tporfavor();
\t\t}
\t}
</script>
<div class=\"col-xs-1\"></div>

{% endblock %}", "changepass.twig.php", "C:\\xampp1\\htdocs\\ProyectoLicencias\\templates\\changepass.twig.php");
    }
}
