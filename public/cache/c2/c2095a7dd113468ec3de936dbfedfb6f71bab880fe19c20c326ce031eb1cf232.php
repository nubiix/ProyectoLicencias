<?php

/* acercade.twig.php */
class __TwigTemplate_5d0f7aaf4b05a3ebe335d48c8393cc66615b0e440400a122e918fa64f24be3f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("plantillabase.twig.php", "acercade.twig.php", 1);
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
        echo "<div class=\"col-xs-2\"></div>
<div class=\"col-xs-8\">
\t<div class=\"row\">
\t\t<h1>Acerca de</h1>
\t</div>
\t<div class=\"row\">
\t\t<p>Saludos internauta. Estás en el apartado adecuado para saber un poco más de los creadores
\t\tde esta aplicación web. Te preguntarás quienes somos y como hicimos esta maravillosa y funcional
\t\taplicación. Para empezar, conócenos un poco mas:</p>
\t\t<div class=\"well\">
\t\t\t<div class=\"media-left\">
\t\t\t\t\t<img class=\"zoomIt\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../img/halo.png\" alt=\"migue\" width=\"64\" height=\"64\">
\t\t\t</div>
\t\t\t<div class=\"media-body\">
\t\t\t\t<h4 class=\"media-heading\">Miguel Angel González Rodríguez</h4>
\t\t\t\tProgramador. Su sueño es crear una red social con la cual hacerse rico y viajar por todo el mundo. Juego favorito \"Halo\", r.a.p como forma de vida. Si quieres conocerlo mejor pulse <a data-toggle=\"collapse\" href=\"#collapseMigue\" aria-expanded=\"false\"
\t\t\t\taria-controls=\"collapseMigue\">aqui</a>.
\t\t\t\t<div class=\"collapse\" id=\"collapseMigue\">
 \t\t\t\t\t<div style=\"margin-top: 10px\">
 \t\t\t\t\t\t<p><b>Información adicional:</b><p>
    \t\t\t\t\t<p>Ciertamente programar tiene sus cosas buenas y malas, siempre que seas alguien curioso al cual le gusta crear cosas, investigar, actualizarse, te verás recompensado cuando consigas tu proposito o tu aplicación deseada. Pero de mientras preparate para dolores de cabeza y horas de vida y sueño perdidas. Pero que aburrida sería la vida si no nos la complicaramos. Un saludo de tu amigo y vecino Spider-m... Migue!</p>
    \t\t\t\t\t<p><b>Redes:</b><p>
    \t\t\t\t\t<p>
\t    \t\t\t\t\t<a href=\"http://www.facebook.com/\" target=\"_blank\">
\t    \t\t\t\t\t\t<i class=\"fa fa-facebook fa-2x\" aria-hidden=\"true\"></i>
\t    \t\t\t\t\t</a>
\t    \t\t\t\t\t<a href=\"http://www.twitter.com/\" target=\"_blank\">
\t    \t\t\t\t\t\t<i class=\"fa fa-twitter fa-2x\" aria-hidden=\"true\"></i>
\t    \t\t\t\t\t</a>
\t    \t\t\t\t\t<a href=\"http://www.googleplus.com/\" target=\"_blank\">
\t    \t\t\t\t\t\t<i class=\"fa fa-google-plus fa-2x\" aria-hidden=\"true\"></i>
\t    \t\t\t\t\t</a>
    \t\t\t\t\t</p>
    \t\t\t\t\t<p><b>Correo:</b></p>
    \t\t\t\t\t<p>soulmigue@gmail.com</p>
  \t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"well\">
\t\t\t<div class=\"media-left\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<img class=\"zoomIt\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../img/kratos.png\" alt=\"romel\" width=\"64\" height=\"64\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"media-body\">
\t\t\t\t<h4 class=\"media-heading\">Romel García Rodríguez</h4>
\t\t\t\tProgramador. Según su filosofia haber estudiado informática fue un gran error, pero los hombres de verdad son consecuentes con sus deciciones. Juego favorito \"Final Fantasy X\", r.a.p como forma de vida. Si quieres conocerlo mejor pulse <a data-toggle=\"collapse\" href=\"#collapseRomel\" aria-expanded=\"false\"
\t\t\t\taria-controls=\"collapseRomel\">aqui</a>.
\t\t\t\t<div class=\"collapse\" id=\"collapseRomel\">
 \t\t\t\t\t<div style=\"margin-top: 10px\">
 \t\t\t\t\t\t<p><b>Información adicional:</b><p>
    \t\t\t\t\t<p>Programar fue divertido, hasta que supe como se programaba, ahora, vago por estos lares pegandome con el codigo, haciendo cosas realmente guays, y enseñando a los jovenes lechones avidos de conocimiento porque es una mala idea estudiar el noble arte de pegarse con un ordenador... Suele ganar el... lokthar ogar! </p>
    \t\t\t\t\t<p><b>Redes:</b><p>
    \t\t\t\t\t<p>
\t    \t\t\t\t\t<a href=\"http://www.facebook.com/\" target=\"_blank\">
\t    \t\t\t\t\t\t<i class=\"fa fa-facebook fa-2x\" aria-hidden=\"true\"></i>
\t    \t\t\t\t\t</a>
\t    \t\t\t\t\t<a href=\"http://www.twitter.com/\" target=\"_blank\">
\t    \t\t\t\t\t\t<i class=\"fa fa-twitter fa-2x\" aria-hidden=\"true\"></i>
\t    \t\t\t\t\t</a>
\t    \t\t\t\t\t<a href=\"http://www.googleplus.com/\" target=\"_blank\">
\t    \t\t\t\t\t\t<i class=\"fa fa-google-plus fa-2x\" aria-hidden=\"true\"></i>
\t    \t\t\t\t\t</a>
    \t\t\t\t\t</p>
    \t\t\t\t\t<p><b>Correo:</b></p>
    \t\t\t\t\t<p>osowowi@gmail.com</p>
  \t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<p>Aquí el -> <a data-toggle=\"collapse\" href=\"#collapseFAQ\" aria-expanded=\"false\" aria-controls=\"collapseFAQ\">FAQs</a>.
\t\t\t<div class=\"collapse\" id=\"collapseFAQ\">
\t\t\t\t<div class=\"well\">
\t\t\t\t\t<p><b>¿De que va esta Aplicación Web?</b></p>
\t\t\t\t\t<p>Esta aplicación está enfocada para los usuarios de un instituto en donde un Administrador o Profesor puede repartir Licencias de Sistemas Operativos
\t\t\t\t\ta Alumnos, y estos pueden ver las licencias que le han sido otorgadas.
\t\t\t\t\t</p>
\t\t\t\t\t<p><b>¿Qué tecnología usa?</b></p>
\t\t\t\t\t<p>La aplicación está construida con PHP(Framework Slim), Javascript, HTML, CSS, SQL.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</p>
\t\t<p>Aquí el -> <a data-toggle=\"collapse\" href=\"#collapseContac\" aria-expanded=\"false\" aria-controls=\"collapseContac\">Contáctanos</a>.
\t\t\t<div class=\"collapse\" id=\"collapseContac\">
\t\t\t\t<div class=\"well\">
\t\t\t\t\t<p><b>¡¡Aquí podrás enviarnos un mensaje, recuerda poner tus datos!! (email)<br>(1000 caracteres como maximo)</b></p>
\t\t\t\t\t  <div class=\"col-xs-12\"><p id=\"mensajeResultado\"></p></div>
\t\t\t\t\t\t<div class=\"form-group\" id=\"divEmail\">
\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" rows=\"5\" id=\"email\"></input>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" id=\"divComentario\">
\t\t\t\t\t\t\t<label for=\"comment\">Comentario:</label>
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"5\" id=\"comment\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"button\" id=\"enviarComentario\" class=\"btn btn-primary\">Enviar!</button>
\t\t\t\t\t\t<div id=\"falta\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</p>
\t\t<p>Tras conocer a los mejores programadores que encontrarás en tu vida, seguramente quieras saber el codigo fuente de nuestra aplicación. Como somos tan magnánimos y benevolentes te ofrecemos el enlace a nuestro github donde encontraras todo el código de nuestra aplicación: <a href=\"https://github.com/ShiroiOkami/Proyecto_Licencias\" target=\"_blank\"><i class=\"fa fa-github fa-2x\" aria-hidden=\"true\"></i></a></p>
\t</div>
</div>
<div class=\"col-xs-2\"></div>
";
    }

    public function getTemplateName()
    {
        return "acercade.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 48,  44 => 17,  31 => 6,  28 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'plantillabase.twig.php'%}



{% block body %}
<div class=\"col-xs-2\"></div>
<div class=\"col-xs-8\">
\t<div class=\"row\">
\t\t<h1>Acerca de</h1>
\t</div>
\t<div class=\"row\">
\t\t<p>Saludos internauta. Estás en el apartado adecuado para saber un poco más de los creadores
\t\tde esta aplicación web. Te preguntarás quienes somos y como hicimos esta maravillosa y funcional
\t\taplicación. Para empezar, conócenos un poco mas:</p>
\t\t<div class=\"well\">
\t\t\t<div class=\"media-left\">
\t\t\t\t\t<img class=\"zoomIt\" src=\"{{base_url()}}/../img/halo.png\" alt=\"migue\" width=\"64\" height=\"64\">
\t\t\t</div>
\t\t\t<div class=\"media-body\">
\t\t\t\t<h4 class=\"media-heading\">Miguel Angel González Rodríguez</h4>
\t\t\t\tProgramador. Su sueño es crear una red social con la cual hacerse rico y viajar por todo el mundo. Juego favorito \"Halo\", r.a.p como forma de vida. Si quieres conocerlo mejor pulse <a data-toggle=\"collapse\" href=\"#collapseMigue\" aria-expanded=\"false\"
\t\t\t\taria-controls=\"collapseMigue\">aqui</a>.
\t\t\t\t<div class=\"collapse\" id=\"collapseMigue\">
 \t\t\t\t\t<div style=\"margin-top: 10px\">
 \t\t\t\t\t\t<p><b>Información adicional:</b><p>
    \t\t\t\t\t<p>Ciertamente programar tiene sus cosas buenas y malas, siempre que seas alguien curioso al cual le gusta crear cosas, investigar, actualizarse, te verás recompensado cuando consigas tu proposito o tu aplicación deseada. Pero de mientras preparate para dolores de cabeza y horas de vida y sueño perdidas. Pero que aburrida sería la vida si no nos la complicaramos. Un saludo de tu amigo y vecino Spider-m... Migue!</p>
    \t\t\t\t\t<p><b>Redes:</b><p>
    \t\t\t\t\t<p>
\t    \t\t\t\t\t<a href=\"http://www.facebook.com/\" target=\"_blank\">
\t    \t\t\t\t\t\t<i class=\"fa fa-facebook fa-2x\" aria-hidden=\"true\"></i>
\t    \t\t\t\t\t</a>
\t    \t\t\t\t\t<a href=\"http://www.twitter.com/\" target=\"_blank\">
\t    \t\t\t\t\t\t<i class=\"fa fa-twitter fa-2x\" aria-hidden=\"true\"></i>
\t    \t\t\t\t\t</a>
\t    \t\t\t\t\t<a href=\"http://www.googleplus.com/\" target=\"_blank\">
\t    \t\t\t\t\t\t<i class=\"fa fa-google-plus fa-2x\" aria-hidden=\"true\"></i>
\t    \t\t\t\t\t</a>
    \t\t\t\t\t</p>
    \t\t\t\t\t<p><b>Correo:</b></p>
    \t\t\t\t\t<p>soulmigue@gmail.com</p>
  \t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"well\">
\t\t\t<div class=\"media-left\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<img class=\"zoomIt\" src=\"{{base_url()}}/../img/kratos.png\" alt=\"romel\" width=\"64\" height=\"64\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"media-body\">
\t\t\t\t<h4 class=\"media-heading\">Romel García Rodríguez</h4>
\t\t\t\tProgramador. Según su filosofia haber estudiado informática fue un gran error, pero los hombres de verdad son consecuentes con sus deciciones. Juego favorito \"Final Fantasy X\", r.a.p como forma de vida. Si quieres conocerlo mejor pulse <a data-toggle=\"collapse\" href=\"#collapseRomel\" aria-expanded=\"false\"
\t\t\t\taria-controls=\"collapseRomel\">aqui</a>.
\t\t\t\t<div class=\"collapse\" id=\"collapseRomel\">
 \t\t\t\t\t<div style=\"margin-top: 10px\">
 \t\t\t\t\t\t<p><b>Información adicional:</b><p>
    \t\t\t\t\t<p>Programar fue divertido, hasta que supe como se programaba, ahora, vago por estos lares pegandome con el codigo, haciendo cosas realmente guays, y enseñando a los jovenes lechones avidos de conocimiento porque es una mala idea estudiar el noble arte de pegarse con un ordenador... Suele ganar el... lokthar ogar! </p>
    \t\t\t\t\t<p><b>Redes:</b><p>
    \t\t\t\t\t<p>
\t    \t\t\t\t\t<a href=\"http://www.facebook.com/\" target=\"_blank\">
\t    \t\t\t\t\t\t<i class=\"fa fa-facebook fa-2x\" aria-hidden=\"true\"></i>
\t    \t\t\t\t\t</a>
\t    \t\t\t\t\t<a href=\"http://www.twitter.com/\" target=\"_blank\">
\t    \t\t\t\t\t\t<i class=\"fa fa-twitter fa-2x\" aria-hidden=\"true\"></i>
\t    \t\t\t\t\t</a>
\t    \t\t\t\t\t<a href=\"http://www.googleplus.com/\" target=\"_blank\">
\t    \t\t\t\t\t\t<i class=\"fa fa-google-plus fa-2x\" aria-hidden=\"true\"></i>
\t    \t\t\t\t\t</a>
    \t\t\t\t\t</p>
    \t\t\t\t\t<p><b>Correo:</b></p>
    \t\t\t\t\t<p>osowowi@gmail.com</p>
  \t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<p>Aquí el -> <a data-toggle=\"collapse\" href=\"#collapseFAQ\" aria-expanded=\"false\" aria-controls=\"collapseFAQ\">FAQs</a>.
\t\t\t<div class=\"collapse\" id=\"collapseFAQ\">
\t\t\t\t<div class=\"well\">
\t\t\t\t\t<p><b>¿De que va esta Aplicación Web?</b></p>
\t\t\t\t\t<p>Esta aplicación está enfocada para los usuarios de un instituto en donde un Administrador o Profesor puede repartir Licencias de Sistemas Operativos
\t\t\t\t\ta Alumnos, y estos pueden ver las licencias que le han sido otorgadas.
\t\t\t\t\t</p>
\t\t\t\t\t<p><b>¿Qué tecnología usa?</b></p>
\t\t\t\t\t<p>La aplicación está construida con PHP(Framework Slim), Javascript, HTML, CSS, SQL.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</p>
\t\t<p>Aquí el -> <a data-toggle=\"collapse\" href=\"#collapseContac\" aria-expanded=\"false\" aria-controls=\"collapseContac\">Contáctanos</a>.
\t\t\t<div class=\"collapse\" id=\"collapseContac\">
\t\t\t\t<div class=\"well\">
\t\t\t\t\t<p><b>¡¡Aquí podrás enviarnos un mensaje, recuerda poner tus datos!! (email)<br>(1000 caracteres como maximo)</b></p>
\t\t\t\t\t  <div class=\"col-xs-12\"><p id=\"mensajeResultado\"></p></div>
\t\t\t\t\t\t<div class=\"form-group\" id=\"divEmail\">
\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" rows=\"5\" id=\"email\"></input>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" id=\"divComentario\">
\t\t\t\t\t\t\t<label for=\"comment\">Comentario:</label>
\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"5\" id=\"comment\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"button\" id=\"enviarComentario\" class=\"btn btn-primary\">Enviar!</button>
\t\t\t\t\t\t<div id=\"falta\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</p>
\t\t<p>Tras conocer a los mejores programadores que encontrarás en tu vida, seguramente quieras saber el codigo fuente de nuestra aplicación. Como somos tan magnánimos y benevolentes te ofrecemos el enlace a nuestro github donde encontraras todo el código de nuestra aplicación: <a href=\"https://github.com/ShiroiOkami/Proyecto_Licencias\" target=\"_blank\"><i class=\"fa fa-github fa-2x\" aria-hidden=\"true\"></i></a></p>
\t</div>
</div>
<div class=\"col-xs-2\"></div>
{% endblock %}", "acercade.twig.php", "/opt/lampp/htdocs/Proyecto_Licencias/templates/acercade.twig.php");
    }
}
