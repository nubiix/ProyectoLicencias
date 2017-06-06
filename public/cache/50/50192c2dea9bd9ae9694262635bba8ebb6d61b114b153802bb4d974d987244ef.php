<?php

/* plantillabase.twig.php */
class __TwigTemplate_0f49aca14152e13644cc388cca68c7c7ff8c3c07dbe3751d2be3373c18817f24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ES\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Licencias Ultimate Edition</title>
\t<link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../img/favicon.png\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href='";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/bootstrap-3.3.7-dist/css/";
        echo twig_escape_filter($this->env, ($context["tema"] ?? null), "html", null, true);
        echo ".min.css'>
\t<link rel=\"stylesheet\" type=\"text/css\" href='";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/css/imagen.css'> 
\t<link rel=\"stylesheet\" type=\"text/css\" href='";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/font-awesome-4.7.0/css/font-awesome.min.css'>
\t<!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/assert/bootstrap-languages-master/languages.min.css\"> -->
\t<!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css\">
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Material Design Bootstrap -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/css/mdb.min.css\" rel=\"stylesheet\">
    <!-- Your custom styles (optional) -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/css/style.css\" rel=\"stylesheet\">
\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/js/myjs.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/js/administrarUsuarios.js\"></script>
</head>
<style type=\"text/css\">
\tbody {
  background: url('";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../img/licencias_background.jpg')no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-color: white;
}
</style>
<body><!-- ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo " -->
<nav class=\"navbar navbar-toggleable-md navbar-dark mdb-color darken-3\">
    <div class=\"container\">
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav1\" aria-controls=\"navbarNav1\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("login"), "html", null, true);
        echo "\">
            <strong>LICENCIAS ULTIMATE EDITION</strong>
        </a>
        ";
        // line 42
        if ((($context["user"] ?? null) == false)) {
            // line 43
            echo "        <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("login"), "html", null, true);
            echo "\">Login <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("acercade"), "html", null, true);
            echo "\">Acerca de</a>
                </li>
            </ul>
        </div>
        ";
        } else {
            // line 54
            echo "          ";
            if ((($context["tipo_usuario"] ?? null) == 1)) {
                // line 55
                echo "            <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
              <ul class=\"navbar-nav mr-auto\">
                  <li class=\"nav-item active li-admin\">
                      <a class=\"nav-link\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("admin"), "html", null, true);
                echo "\">Usuario: ";
                echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
                echo " <span class=\"sr-only\">(current)</span></a>
                  </li>
                  <li class=\"nav-item li-subirxml\">
                      <a class=\"nav-link\" href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("subirxmlget"), "html", null, true);
                echo "\">Subir xml <span class=\"sr-only\">(current)</span></a>
                  </li>
                  <li class=\"nav-item li-subirlicenciavolumen\">
                      <a class=\"nav-link\" href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("subirlicenciavolumen"), "html", null, true);
                echo "\">Subir licencia de volumen <span class=\"sr-only\">(current)</span></a>
                  </li>
                  <li class=\"nav-item li-subirusuarios\">
                      <a class=\"nav-link\" href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("subirusuariosget"), "html", null, true);
                echo "\">Subir usuario <span class=\"sr-only\">(current)</span></a>
                  </li>
                  <li class=\"nav-item li-asociarclaves\">
                      <a class=\"nav-link\" href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("asociarclavesget"), "html", null, true);
                echo "\">Asociar claves<span class=\"sr-only\">(current)</span></a>
                  </li>
                  <li class=\"nav-item li-administrarusuarios\">
                      <a class=\"nav-link\" href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("administrarusuariosget"), "html", null, true);
                echo "\">Administrar usuarios<span class=\"sr-only\">(current)</span></a>
                  </li>
                  <li class=\"nav-item li_acercade\">
                      <a class=\"nav-link\" href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("acercade"), "html", null, true);
                echo "\">Acerca de</a>
                  </li>
                  <li class=\"nav-item li-logout\">
                      <a class=\"nav-link\" href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("logout"), "html", null, true);
                echo "\">Logout<span class=\"sr-only\">(current)</span></a>
                  </li>
                  
                  
              </ul>
            </div>
        ";
            } else {
                // line 86
                echo "\t\t    ";
                if ((($context["tipo_usuario"] ?? null) == 2)) {
                    // line 87
                    echo "\t\t      <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                  <ul class=\"navbar-nav mr-auto\">
                      <li class=\"nav-item active li-profesor\">
                          <a class=\"nav-link\" href=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("profesor"), "html", null, true);
                    echo "\">Usuario: ";
                    echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
                    echo " <span class=\"sr-only\">(current)</span></a>
                      </li>
                      <li class=\"nav-item li-licenciasvolumen\">
                          <a class=\"nav-link\" href=\"";
                    // line 93
                    echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("licencias_volumen"), "html", null, true);
                    echo "\">Ver licencias volumen <span class=\"sr-only\">(current)</span></a>
                      </li>
                      <li class=\"nav-item li_acercade\">
                          <a class=\"nav-link\" href=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("acercade"), "html", null, true);
                    echo "\">Acerca de</a>
                      </li>
                      <li class=\"nav-item li-logout\">
                          <a class=\"nav-link\" href=\"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("logout"), "html", null, true);
                    echo "\">Logout<span class=\"sr-only\">(current)</span></a>
                      </li>
                      
                      
                  </ul>
              </div>
\t\t    ";
                } else {
                    // line 106
                    echo "\t\t\t    ";
                    if ((($context["tipo_usuario"] ?? null) == 3)) {
                        // line 107
                        echo "                    <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                              <ul class=\"navbar-nav mr-auto\">
                                  <li class=\"nav-item active li-profesor\">
                                      <a class=\"nav-link\" href=\"";
                        // line 110
                        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("profesor"), "html", null, true);
                        echo "\">Usuario: ";
                        echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
                        echo " <span class=\"sr-only\">(current)</span></a>
                                  </li>
                                  <li class=\"nav-item li_acercade\">
                                      <a class=\"nav-link\" href=\"";
                        // line 113
                        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("acercade"), "html", null, true);
                        echo "\">Acerca de</a>
                                  </li>
                                  <li class=\"nav-item li-logout\">
                                      <a class=\"nav-link\" href=\"";
                        // line 116
                        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("logout"), "html", null, true);
                        echo "\">Logout<span class=\"sr-only\">(current)</span></a>
                                  </li>
                                  
                                  
                              </ul>
                          </div>
    \t\t    ";
                    } else {
                        // line 123
                        echo "\t\t\t\t    ";
                        if ((($context["tipo_usuario"] ?? null) == 4)) {
                            // line 124
                            echo "\t\t\t\t        <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                              <ul class=\"navbar-nav mr-auto\">
                                  <li class=\"nav-item active li-profesor\">
                                      <a class=\"nav-link\" href=\"";
                            // line 127
                            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("profesor"), "html", null, true);
                            echo "\">Usuario: ";
                            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
                            echo " <span class=\"sr-only\">(current)</span></a>
                                  </li>
                                  <li class=\"nav-item li-licenciasvolumen\">
                                      <a class=\"nav-link\" href=\"";
                            // line 130
                            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("licencias_volumen"), "html", null, true);
                            echo "\">Ver licencias volumen <span class=\"sr-only\">(current)</span></a>
                                  </li>
                                  <li class=\"nav-item li-asociarclaves\">
                                      <a class=\"nav-link\" href=\"";
                            // line 133
                            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("asociarclavesprofpost"), "html", null, true);
                            echo "\">Asociar claves <span class=\"sr-only\">(current)</span></a>
                                  </li>
                                  <li class=\"nav-item li_acercade\">
                                      <a class=\"nav-link\" href=\"";
                            // line 136
                            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("acercade"), "html", null, true);
                            echo "\">Acerca de</a>
                                  </li>
                                  <li class=\"nav-item li-logout\">
                                      <a class=\"nav-link\" href=\"";
                            // line 139
                            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("logout"), "html", null, true);
                            echo "\">Logout<span class=\"sr-only\">(current)</span></a>
                                  </li>
                                  
                                  
                              </ul>
                          </div>
\t\t\t\t    ";
                        }
                        // line 146
                        echo "\t\t        ";
                    }
                    // line 147
                    echo "\t\t    ";
                }
                // line 148
                echo "\t    ";
            }
            // line 149
            echo "    ";
        }
        // line 150
        echo "    </div>
</nav>
<!-- style=\"background:rgba(255,255,255,0.8);  border: 2px solid white; border-radius: 25px; box-shadow: 2px 2px 5px 5px; margin-top: 30px\" en el container -->
<div class=\"container\">
\t<div class=\"row flex-center\" style=\"margin-top: 50px\">
\t\t";
        // line 155
        $this->displayBlock('body', $context, $blocks);
        // line 156
        echo "\t</div>
\t<div id=\"cajacookies\">
\t    <p><small>Utilizamos cookies para asegurar que damos la mejor experiencia al usuario en nuestro sitio web. 
\t    Si continúa utilizando este sitio asumiremos que está de acuerdo. 
\t    <button onclick=\"aceptarCookies()\" class=\"btn btn-default btn-sm\">Aceptar y cerrar éste mensaje</button></small></p> 
\t</div>
  ";
        // line 162
        if ((($context["user"] ?? null) == false)) {
            // line 163
            echo "\t<div class=\"divider-new\">
\t    <h2 class=\"h2-responsive wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;\">Acerca de</h2>
\t</div>
\t<section id=\"about\" class=\"text-center wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;\">
        <p>Saludos internauta. Estás en el apartado adecuado para saber un poco más de los creadores
\t\tde esta aplicación web. Te preguntarás quienes somos y como hicimos esta maravillosa y funcional
\t\taplicación. Para empezar, conócenos un poco mas:</p>
\t\t<div class=\"col\">
\t\t    <div class=\"media-left\">
\t\t\t\t\t<img class=\"zoomIt\" src=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/../img/halo.png\" alt=\"migue\" width=\"64\" height=\"64\">
\t\t\t</div>
\t\t\t<div class=\"media-body\">
\t\t\t\t<h4 class=\"media-heading\">Miguel Angel González Rodríguez</h4>
\t\t\t\tProgramador. Su sueño es crear una red social con la cual hacerse rico y viajar por todo el mundo. Juego favorito \"Halo\", r.a.p como forma de vida. Si quieres conocerlo
\t\t\t\tmejor pulse <a data-toggle=\"collapse\" href=\"#collapseMigue\" aria-expanded=\"false\"
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
\t\t    
\t\t</div>
\t\t<div class=\"col\">
\t\t    <div class=\"media-left\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<img class=\"zoomIt\" src=\"";
            // line 205
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
    </section>
    ";
        }
        // line 236
        echo "</div>
<footer class=\"page-footer bg-primary center-on-small-only\">
    <!--Copyright-->
    <div class=\"footer-copyright\">
        <div class=\"container-fluid\">
            © 2015 Copyright: <a href=\"https://www.MDBootstrap.com\">Miguel Angel & Romel </a>

        </div>
    </div>
    <!--/.Copyright-->
</footer>

\t<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type=\"text/javascript\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/js/jquery-3.1.1.min.js\"></script>
    <!-- Bootstrap tooltips -->
    <script type=\"text/javascript\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/js/tether.min.js\"></script>
    <!-- Bootstrap core JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/js/bootstrap.min.js\"></script>
    <!-- MDB core JavaScript -->
    <script type=\"text/javascript\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/js/mdb.min.js\"></script>
\t<!--<script type=\"text/javascript\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/bootstrap-3.3.7-dist/js/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/bootstrap-3.3.7-dist/js/bootstrap.min.js\"></script>-->
</body>
</html>";
    }

    // line 155
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "plantillabase.twig.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 155,  452 => 258,  448 => 257,  444 => 256,  439 => 254,  434 => 252,  429 => 250,  413 => 236,  379 => 205,  343 => 172,  332 => 163,  330 => 162,  322 => 156,  320 => 155,  313 => 150,  310 => 149,  307 => 148,  304 => 147,  301 => 146,  291 => 139,  285 => 136,  279 => 133,  273 => 130,  265 => 127,  260 => 124,  257 => 123,  247 => 116,  241 => 113,  233 => 110,  228 => 107,  225 => 106,  215 => 99,  209 => 96,  203 => 93,  195 => 90,  190 => 87,  187 => 86,  177 => 79,  171 => 76,  165 => 73,  159 => 70,  153 => 67,  147 => 64,  141 => 61,  133 => 58,  128 => 55,  125 => 54,  117 => 49,  111 => 46,  106 => 43,  104 => 42,  98 => 39,  89 => 33,  78 => 25,  71 => 21,  67 => 20,  62 => 18,  57 => 16,  52 => 14,  45 => 10,  41 => 9,  37 => 8,  31 => 7,  27 => 6,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"ES\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Licencias Ultimate Edition</title>
\t<link rel=\"shortcut icon\" href=\"{{base_url()}}/../img/favicon.png\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href='{{base_url()}}/../assert/bootstrap-3.3.7-dist/css/{{ tema }}.min.css'>
\t<link rel=\"stylesheet\" type=\"text/css\" href='{{base_url()}}/../assert/css/imagen.css'> 
\t<link rel=\"stylesheet\" type=\"text/css\" href='{{base_url()}}/../assert/font-awesome-4.7.0/css/font-awesome.min.css'>
\t<!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"{{base_url()}}/assert/bootstrap-languages-master/languages.min.css\"> -->
\t<!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css\">
    <!-- Bootstrap core CSS -->
    <link href=\"{{base_url()}}/../assert/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Material Design Bootstrap -->
    <link href=\"{{base_url()}}/../assert/css/mdb.min.css\" rel=\"stylesheet\">
    <!-- Your custom styles (optional) -->
    <link href=\"{{base_url()}}/../assert/css/style.css\" rel=\"stylesheet\">
\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"{{base_url()}}/../assert/js/myjs.js\"></script>
\t<script type=\"text/javascript\" src=\"{{base_url()}}/../assert/js/administrarUsuarios.js\"></script>
</head>
<style type=\"text/css\">
\tbody {
  background: url('{{base_url()}}/../img/licencias_background.jpg')no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-color: white;
}
</style>
<body><!-- {{ base_url() }} -->
<nav class=\"navbar navbar-toggleable-md navbar-dark mdb-color darken-3\">
    <div class=\"container\">
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav1\" aria-controls=\"navbarNav1\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"{{path_for('login')}}\">
            <strong>LICENCIAS ULTIMATE EDITION</strong>
        </a>
        {% if user == false %}
        <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{path_for('login')}}\">Login <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{path_for('acercade')}}\">Acerca de</a>
                </li>
            </ul>
        </div>
        {% else %}
          {% if tipo_usuario == 1 %}
            <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
              <ul class=\"navbar-nav mr-auto\">
                  <li class=\"nav-item active li-admin\">
                      <a class=\"nav-link\" href=\"{{path_for('admin')}}\">Usuario: {{ user }} <span class=\"sr-only\">(current)</span></a>
                  </li>
                  <li class=\"nav-item li-subirxml\">
                      <a class=\"nav-link\" href=\"{{path_for('subirxmlget')}}\">Subir xml <span class=\"sr-only\">(current)</span></a>
                  </li>
                  <li class=\"nav-item li-subirlicenciavolumen\">
                      <a class=\"nav-link\" href=\"{{path_for('subirlicenciavolumen')}}\">Subir licencia de volumen <span class=\"sr-only\">(current)</span></a>
                  </li>
                  <li class=\"nav-item li-subirusuarios\">
                      <a class=\"nav-link\" href=\"{{path_for('subirusuariosget')}}\">Subir usuario <span class=\"sr-only\">(current)</span></a>
                  </li>
                  <li class=\"nav-item li-asociarclaves\">
                      <a class=\"nav-link\" href=\"{{path_for('asociarclavesget')}}\">Asociar claves<span class=\"sr-only\">(current)</span></a>
                  </li>
                  <li class=\"nav-item li-administrarusuarios\">
                      <a class=\"nav-link\" href=\"{{path_for('administrarusuariosget')}}\">Administrar usuarios<span class=\"sr-only\">(current)</span></a>
                  </li>
                  <li class=\"nav-item li_acercade\">
                      <a class=\"nav-link\" href=\"{{path_for('acercade')}}\">Acerca de</a>
                  </li>
                  <li class=\"nav-item li-logout\">
                      <a class=\"nav-link\" href=\"{{path_for('logout')}}\">Logout<span class=\"sr-only\">(current)</span></a>
                  </li>
                  
                  
              </ul>
            </div>
        {% else %}
\t\t    {% if tipo_usuario == 2 %}
\t\t      <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                  <ul class=\"navbar-nav mr-auto\">
                      <li class=\"nav-item active li-profesor\">
                          <a class=\"nav-link\" href=\"{{path_for('profesor')}}\">Usuario: {{ user }} <span class=\"sr-only\">(current)</span></a>
                      </li>
                      <li class=\"nav-item li-licenciasvolumen\">
                          <a class=\"nav-link\" href=\"{{path_for('licencias_volumen')}}\">Ver licencias volumen <span class=\"sr-only\">(current)</span></a>
                      </li>
                      <li class=\"nav-item li_acercade\">
                          <a class=\"nav-link\" href=\"{{path_for('acercade')}}\">Acerca de</a>
                      </li>
                      <li class=\"nav-item li-logout\">
                          <a class=\"nav-link\" href=\"{{path_for('logout')}}\">Logout<span class=\"sr-only\">(current)</span></a>
                      </li>
                      
                      
                  </ul>
              </div>
\t\t    {% else %}
\t\t\t    {% if tipo_usuario == 3 %}
                    <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                              <ul class=\"navbar-nav mr-auto\">
                                  <li class=\"nav-item active li-profesor\">
                                      <a class=\"nav-link\" href=\"{{path_for('profesor')}}\">Usuario: {{ user }} <span class=\"sr-only\">(current)</span></a>
                                  </li>
                                  <li class=\"nav-item li_acercade\">
                                      <a class=\"nav-link\" href=\"{{path_for('acercade')}}\">Acerca de</a>
                                  </li>
                                  <li class=\"nav-item li-logout\">
                                      <a class=\"nav-link\" href=\"{{path_for('logout')}}\">Logout<span class=\"sr-only\">(current)</span></a>
                                  </li>
                                  
                                  
                              </ul>
                          </div>
    \t\t    {% else %}
\t\t\t\t    {% if tipo_usuario == 4 %}
\t\t\t\t        <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                              <ul class=\"navbar-nav mr-auto\">
                                  <li class=\"nav-item active li-profesor\">
                                      <a class=\"nav-link\" href=\"{{path_for('profesor')}}\">Usuario: {{ user }} <span class=\"sr-only\">(current)</span></a>
                                  </li>
                                  <li class=\"nav-item li-licenciasvolumen\">
                                      <a class=\"nav-link\" href=\"{{path_for('licencias_volumen')}}\">Ver licencias volumen <span class=\"sr-only\">(current)</span></a>
                                  </li>
                                  <li class=\"nav-item li-asociarclaves\">
                                      <a class=\"nav-link\" href=\"{{path_for('asociarclavesprofpost')}}\">Asociar claves <span class=\"sr-only\">(current)</span></a>
                                  </li>
                                  <li class=\"nav-item li_acercade\">
                                      <a class=\"nav-link\" href=\"{{path_for('acercade')}}\">Acerca de</a>
                                  </li>
                                  <li class=\"nav-item li-logout\">
                                      <a class=\"nav-link\" href=\"{{path_for('logout')}}\">Logout<span class=\"sr-only\">(current)</span></a>
                                  </li>
                                  
                                  
                              </ul>
                          </div>
\t\t\t\t    {% endif %}
\t\t        {% endif %}
\t\t    {% endif %}
\t    {% endif %}
    {% endif %}
    </div>
</nav>
<!-- style=\"background:rgba(255,255,255,0.8);  border: 2px solid white; border-radius: 25px; box-shadow: 2px 2px 5px 5px; margin-top: 30px\" en el container -->
<div class=\"container\">
\t<div class=\"row flex-center\" style=\"margin-top: 50px\">
\t\t{% block body %}{% endblock %}
\t</div>
\t<div id=\"cajacookies\">
\t    <p><small>Utilizamos cookies para asegurar que damos la mejor experiencia al usuario en nuestro sitio web. 
\t    Si continúa utilizando este sitio asumiremos que está de acuerdo. 
\t    <button onclick=\"aceptarCookies()\" class=\"btn btn-default btn-sm\">Aceptar y cerrar éste mensaje</button></small></p> 
\t</div>
  {% if user == false %}
\t<div class=\"divider-new\">
\t    <h2 class=\"h2-responsive wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;\">Acerca de</h2>
\t</div>
\t<section id=\"about\" class=\"text-center wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;\">
        <p>Saludos internauta. Estás en el apartado adecuado para saber un poco más de los creadores
\t\tde esta aplicación web. Te preguntarás quienes somos y como hicimos esta maravillosa y funcional
\t\taplicación. Para empezar, conócenos un poco mas:</p>
\t\t<div class=\"col\">
\t\t    <div class=\"media-left\">
\t\t\t\t\t<img class=\"zoomIt\" src=\"{{base_url()}}/../img/halo.png\" alt=\"migue\" width=\"64\" height=\"64\">
\t\t\t</div>
\t\t\t<div class=\"media-body\">
\t\t\t\t<h4 class=\"media-heading\">Miguel Angel González Rodríguez</h4>
\t\t\t\tProgramador. Su sueño es crear una red social con la cual hacerse rico y viajar por todo el mundo. Juego favorito \"Halo\", r.a.p como forma de vida. Si quieres conocerlo
\t\t\t\tmejor pulse <a data-toggle=\"collapse\" href=\"#collapseMigue\" aria-expanded=\"false\"
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
\t\t    
\t\t</div>
\t\t<div class=\"col\">
\t\t    <div class=\"media-left\">
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
    </section>
    {% endif %}
</div>
<footer class=\"page-footer bg-primary center-on-small-only\">
    <!--Copyright-->
    <div class=\"footer-copyright\">
        <div class=\"container-fluid\">
            © 2015 Copyright: <a href=\"https://www.MDBootstrap.com\">Miguel Angel & Romel </a>

        </div>
    </div>
    <!--/.Copyright-->
</footer>

\t<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type=\"text/javascript\" src=\"{{base_url()}}/../assert/js/jquery-3.1.1.min.js\"></script>
    <!-- Bootstrap tooltips -->
    <script type=\"text/javascript\" src=\"{{base_url()}}/../assert/js/tether.min.js\"></script>
    <!-- Bootstrap core JavaScript -->
    <script type=\"text/javascript\" src=\"{{base_url()}}/../assert/js/bootstrap.min.js\"></script>
    <!-- MDB core JavaScript -->
    <script type=\"text/javascript\" src=\"{{base_url()}}/../assert/js/mdb.min.js\"></script>
\t<!--<script type=\"text/javascript\" src=\"{{base_url()}}/../assert/bootstrap-3.3.7-dist/js/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"{{base_url()}}/../assert/bootstrap-3.3.7-dist/js/bootstrap.min.js\"></script>-->
</body>
</html>", "plantillabase.twig.php", "C:\\xampp1\\htdocs\\Proyecto_Licencias\\templates\\plantillabase.twig.php");
    }
}
