<?php

/* plantillabase.twig.php */
class __TwigTemplate_0bbbffe4b082e9010c716aea1c2012e9d77ffe2177c8d0fd6f4fe8d0a0e6516a extends Twig_Template
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
html,
body,
.view {
    height: 100%;
}
/* Navigation*/

.navbar {
    background-color: #3c4f74;
}

.scrolling-navbar {
    -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
    -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
    transition: background .5s ease-in-out, padding .5s ease-in-out;
}

.top-nav-collapse {
    background-color: #3c4f74;
}

footer.page-footer {
    background-color: #3c4f74;
    margin-top: 2rem;
}

@media only screen and (max-width: 768px) {
    .navbar {
        background-color: #1C2331;
    }
}
/*Call to action*/


.view {
    background: url(\"http://localhost/Proyecto_Licencias/img/licencias_background.png\")no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
/*Contact section*/

#contact .fa {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: #1C2331;
} 
</style>
<body><!-- ";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo " -->
<nav class=\"navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar\">
    <div class=\"container\">
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav1\" aria-controls=\"navbarNav1\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("login"), "html", null, true);
        echo "\">
            <strong>LICENCIAS ULTIMATE EDITION</strong>
        </a>
        ";
        // line 82
        if ((($context["user"] ?? null) == false)) {
            // line 83
            echo "        <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\" id=\"li_login\">
                    <a class=\"nav-link\" href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("login"), "html", null, true);
            echo "\">Login</a>
                </li>
                <li class=\"nav-item\" id=\"li_acercade\">
                    <a class=\"nav-link\" href=\"#acercade\">Acerca de</a>
                </li>
            </ul>
        </div>
        ";
        } else {
            // line 94
            echo "          ";
            if ((($context["tipo_usuario"] ?? null) == 1)) {
                // line 95
                echo "            <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
              <ul class=\"navbar-nav mr-auto\">
                  <li class=\"nav-item li-admin\" id=\"li_admin\">
                      <a class=\"nav-link\" href=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("admin"), "html", null, true);
                echo "\">Usuario: ";
                echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
                echo "</a>
                  </li>
                  <li class=\"nav-item li-subirxml\" id=\"li_subirxml\">
                      <a class=\"nav-link\" href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("subirxmlget"), "html", null, true);
                echo "\">Subir xml</a>
                  </li>
                  <li class=\"nav-item li-subirlicenciavolumen\" id=\"li_subirlicenciavolumen\">
                      <a class=\"nav-link\" href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("subirlicenciavolumen"), "html", null, true);
                echo "\">Subir licencia de volumen</a>
                  </li>
                  <li class=\"nav-item li-subirusuarios\" id=\"li_subirusuarios\">
                      <a class=\"nav-link\" href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("subirusuariosget"), "html", null, true);
                echo "\">Subir usuario</a>
                  </li>
                  <li class=\"nav-item li-asociarclaves\" id=\"li_asociarclaves\">
                      <a class=\"nav-link\" href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("asociarclavesget"), "html", null, true);
                echo "\">Asociar claves</a>
                  </li>
                  <li class=\"nav-item li-administrarusuarios\" id=\"li_administrarusuarios\">
                      <a class=\"nav-link\" href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("administrarusuariosget"), "html", null, true);
                echo "\">Administrar usuarios</a>
                  </li>
                  <li class=\"nav-item li_acercade\" id=\"li_acercade\">
                      <a class=\"nav-link\" href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("acercade"), "html", null, true);
                echo "\">Acerca de</a>
                  </li>
                  <li class=\"nav-item li-logout\" id=\"li_logout\">
                      <a class=\"nav-link\" href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("logout"), "html", null, true);
                echo "\">Logout</a>
                  </li>
              </ul>
            </div>
        ";
            } else {
                // line 124
                echo "\t\t    ";
                if ((($context["tipo_usuario"] ?? null) == 2)) {
                    // line 125
                    echo "\t\t      <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                  <ul class=\"navbar-nav mr-auto\">
                      <li class=\"nav-item li-profesor\" id=\"li_profesor\">
                          <a class=\"nav-link\" href=\"";
                    // line 128
                    echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("profesor"), "html", null, true);
                    echo "\">Usuario: ";
                    echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
                    echo "</a>
                      </li>
                      <li class=\"nav-item li-licenciasvolumen\" id=\"li_licenciasvolumen\">
                          <a class=\"nav-link\" href=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("licencias_volumen"), "html", null, true);
                    echo "\">Ver licencias volumen</a>
                      </li>
                      <li class=\"nav-item li_acercade\" id=\"li_acercade\">
                          <a class=\"nav-link\" href=\"";
                    // line 134
                    echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("acercade"), "html", null, true);
                    echo "\">Acerca de</a>
                      </li>
                      <li class=\"nav-item li-logout\" id=\"li_logout\">
                          <a class=\"nav-link\" href=\"";
                    // line 137
                    echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("logout"), "html", null, true);
                    echo "\">Logout</a>
                      </li>
                  </ul>
              </div>
\t\t    ";
                } else {
                    // line 142
                    echo "\t\t\t    ";
                    if ((($context["tipo_usuario"] ?? null) == 3)) {
                        // line 143
                        echo "                    <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                              <ul class=\"navbar-nav mr-auto\">
                                  <li class=\"nav-item li-profesor\" id=\"li_alumno\">
                                      <a class=\"nav-link\" href=\"";
                        // line 146
                        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("profesor"), "html", null, true);
                        echo "\">Usuario: ";
                        echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
                        echo "</a>
                                  </li>
                                  <li class=\"nav-item li_acercade\" id=\"li_acercade\">
                                      <a class=\"nav-link\" href=\"";
                        // line 149
                        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("acercade"), "html", null, true);
                        echo "\">Acerca de</a>
                                  </li>
                                  <li class=\"nav-item li-logout\" id=\"li_logout\">
                                      <a class=\"nav-link\" href=\"";
                        // line 152
                        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("logout"), "html", null, true);
                        echo "\">Logout</a>
                                  </li>
                              </ul>
                          </div>
    \t\t    ";
                    } else {
                        // line 157
                        echo "\t\t\t\t    ";
                        if ((($context["tipo_usuario"] ?? null) == 4)) {
                            // line 158
                            echo "\t\t\t\t        <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                              <ul class=\"navbar-nav mr-auto\">
                                  <li class=\"nav-item li-profesor\" id=\"li_profesor\">
                                      <a class=\"nav-link\" href=\"";
                            // line 161
                            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("profesor"), "html", null, true);
                            echo "\">Usuario: ";
                            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
                            echo "</a>
                                  </li>
                                  <li class=\"nav-item li-licenciasvolumen\" id=\"li_licenciasvolumen\">
                                      <a class=\"nav-link\" href=\"";
                            // line 164
                            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("licencias_volumen"), "html", null, true);
                            echo "\">Ver licencias volumen</a>
                                  </li>
                                  <li class=\"nav-item li-asociarclaves\" id=\"li_asociarclaves\">
                                      <a class=\"nav-link\" href=\"";
                            // line 167
                            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("asociarclavesprofpost"), "html", null, true);
                            echo "\">Asociar claves</a>
                                  </li>
                                  <li class=\"nav-item li_acercade\" id=\"li_acercade\">
                                      <a class=\"nav-link\" href=\"";
                            // line 170
                            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("acercade"), "html", null, true);
                            echo "\">Acerca de</a>
                                  </li>
                                  <li class=\"nav-item li-logout\" id=\"li_logout\">
                                      <a class=\"nav-link\" href=\"";
                            // line 173
                            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("logout"), "html", null, true);
                            echo "\">Logout</a>
                                  </li>
                              </ul>
                          </div>
\t\t\t\t    ";
                        }
                        // line 178
                        echo "\t\t        ";
                    }
                    // line 179
                    echo "\t\t    ";
                }
                // line 180
                echo "\t    ";
            }
            // line 181
            echo "    ";
        }
        // line 182
        echo "    </div>
</nav>
<!-- style=\"background:rgba(255,255,255,0.8);  border: 2px solid white; border-radius: 25px; box-shadow: 2px 2px 5px 5px; margin-top: 30px\" en el container -->
";
        // line 185
        if ((($context["user"] ?? null) == false)) {
            // line 186
            echo "<div class=\"view hm-black-strong\">
    <div class=\"full-bg-img flex-center\">
";
        } else {
            // line 189
            echo "<div class=\"container\" style=\"margin-top: 100px\">
  <div>
";
        }
        // line 192
        echo "      ";
        $this->displayBlock('body', $context, $blocks);
        // line 193
        echo "    </div>
</div>

<div id=\"cajacookies\">
\t    <p><small>Utilizamos cookies para asegurar que damos la mejor experiencia al usuario en nuestro sitio web. 
\t    Si continúa utilizando este sitio asumiremos que está de acuerdo. 
\t    <button onclick=\"aceptarCookies()\" class=\"btn btn-default btn-sm\">Aceptar y cerrar éste mensaje</button></small></p> 
</div>

";
        // line 202
        if ((($context["user"] ?? null) == false)) {
            // line 203
            echo "<div class=\"container\">
\t<div class=\"divider-new\">
\t    <h2 class=\"h2-responsive wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;\">Acerca de</h2>
\t</div>
\t<section id=\"acercade\" class=\"text-left wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;\">
    <div class=\"row\">
      <p>Saludos internauta. Estás en el apartado adecuado para saber un poco más de los creadores
        de esta aplicación web. Te preguntarás quienes somos y como hicimos esta maravillosa y funcional
        aplicación. Para empezar, conócenos un poco mas:</p>
        <div class=\"well\">
          <div class=\"media-left\">
          <img class=\"zoomIt\" src=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/../img/migue.png\" alt=\"migue\" width=\"64\" height=\"64\">
          </div>
          <div class=\"media-body\">
            <h4 class=\"media-heading\">Miguel Angel González Rodríguez</h4>
            Programador. Su sueño es crear una red social con la cual hacerse rico y viajar por todo el mundo. Juego favorito \"Halo\", r.a.p como forma de vida. Si quieres conocerlo mejor pulse <a data-toggle=\"collapse\" href=\"#collapseMigue\" aria-expanded=\"false\"
            aria-controls=\"collapseMigue\">aqui</a>.
            <div class=\"collapse\" id=\"collapseMigue\">
              <div style=\"margin-top: 10px\">
                <p><b>Información adicional:</b><p>
                  <p>Ciertamente programar tiene sus cosas buenas y malas, siempre que seas alguien curioso al cual le gusta crear cosas, investigar, actualizarse, te verás recompensado cuando consigas tu proposito o tu aplicación deseada. Pero de mientras preparate para dolores de cabeza y horas de vida y sueño perdidas. Pero que aburrida sería la vida si no nos la complicaramos. Un saludo de tu amigo y vecino Spider-m... Migue!</p>
                  <p><b>Redes:</b><p>
                    <p>
                      <a href=\"https://www.facebook.com/profile.php?id=100012279423015\" target=\"_blank\">
                        <i class=\"fa fa-facebook fa-2x\" aria-hidden=\"true\"></i>
                      </a>
                      <a href=\"https://twitter.com/Miguewoolf\" target=\"_blank\">
                        <i class=\"fa fa-twitter fa-2x\" aria-hidden=\"true\"></i>
                      </a>
                      <a href=\"https://plus.google.com/104121579322674560082\" target=\"_blank\">
                        <i class=\"fa fa-google-plus fa-2x\" aria-hidden=\"true\"></i>
                      </a>
                    </p>
                    <p><b>Correo:</b></p>
                    <p>soulmigue@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"well\">
              <div class=\"media-left\">
                <a href=\"#\">
                  <img class=\"zoomIt\" src=\"";
            // line 245
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/../img/kratos.png\" alt=\"romel\" width=\"64\" height=\"64\">
                </a>
              </div>
              <div class=\"media-body\">
                <h4 class=\"media-heading\">Romel García Rodríguez</h4>
                Programador. Según su filosofia haber estudiado informática fue un gran error, pero los hombres de verdad son consecuentes con sus deciciones. Juego favorito \"Final Fantasy X\", r.a.p como forma de vida. Si quieres conocerlo mejor pulse <a data-toggle=\"collapse\" href=\"#collapseRomel\" aria-expanded=\"false\"
                aria-controls=\"collapseRomel\">aqui</a>.
                <div class=\"collapse\" id=\"collapseRomel\">
                  <div style=\"margin-top: 10px\">
                    <p><b>Información adicional:</b><p>
                      <p>Programar fue divertido, hasta que supe como se programaba, ahora, vago por estos lares pegandome con el codigo, haciendo cosas realmente guays, y enseñando a los jovenes lechones avidos de conocimiento porque es una mala idea estudiar el noble arte de pegarse con un ordenador... Suele ganar el... lokthar ogar! </p>
                      <p><b>Redes:</b><p>
                        <p>
                          <a href=\"https://www.facebook.com/romel.garciarodriguez\" target=\"_blank\">
                            <i class=\"fa fa-facebook fa-2x\" aria-hidden=\"true\"></i>
                          </a>
                          <a href=\"https://www.twitter.com/Kaosnubi\" target=\"_blank\">
                            <i class=\"fa fa-twitter fa-2x\" aria-hidden=\"true\"></i>
                          </a>
                          <a href=\"https://plus.google.com/100040519746345216465\" target=\"_blank\">
                            <i class=\"fa fa-google-plus fa-2x\" aria-hidden=\"true\"></i>
                          </a>
                        </p>
                        <p><b>Correo:</b></p>
                        <p>osowowi@gmail.com</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"container\">Aquí el -> <a data-toggle=\"collapse\" href=\"#collapseFAQ\" aria-expanded=\"false\" aria-controls=\"collapseFAQ\">FAQs</a>.
                  <div class=\"collapse\" id=\"collapseFAQ\">
                    <div class=\"well\">
                      <p><b>¿De que va esta Aplicación Web?</b></p>
                      <p>Esta aplicación está enfocada para los usuarios de un instituto en donde un Administrador o Profesor puede repartir Licencias de Sistemas Operativos
                        a Alumnos, y estos pueden ver las licencias que le han sido otorgadas.
                      </p>
                      <p><b>¿Qué tecnología usa?</b></p>
                      <p>La aplicación está construida con PHP(Framework Slim), Javascript, HTML, CSS, SQL.</p>
                    </div>
                  </div>
                </div>
                <div class=\"container\">Aquí el -> <a data-toggle=\"collapse\" href=\"#collapseContac\" aria-expanded=\"false\" aria-controls=\"collapseContac\">Contáctanos</a>.
                  <div class=\"collapse\" id=\"collapseContac\">
                    <div class=\"well\">
                      <div class=\"text-center\">
                        <h3><i class=\"fa fa-envelope\"></i>Contáctanos:</h3>
                        <hr class=\"mt-2 mb-2\">
                      </div>
                      <p><b>¡¡Aquí podrás enviarnos un mensaje, recuerda poner tus datos!! (email)<br>(1000 caracteres como maximo)</b></p>
                      <div class=\"col-xs-12\"><p id=\"mensajeResultado\"></p></div>
                      <div class=\"form-group\" id=\"divEmail\">
                        <label for=\"email\">Email</label>
                        <input type=\"text\" class=\"form-control\" rows=\"5\" id=\"email\">
                      </div>
                      <div class=\"form-group\" id=\"divComentario\">
                        <label for=\"comment\">Comentario:</label>
                        <textarea class=\"form-control\" rows=\"5\" id=\"comment\"></textarea>
                      </div>
                      <button type=\"button\" id=\"enviarComentario\" class=\"btn btn-primary\">Enviar!</button>
                      <div id=\"falta\"></div>
                    </div>
                  </div>
                </div>
                <div class=\"container\" style=\"margin-top: 10px\">Tras conocer a los mejores programadores que encontrarás en tu vida, seguramente quieras saber el codigo fuente de nuestra aplicación. Como somos tan magnánimos y benevolentes te ofrecemos el enlace a nuestro github donde encontraras todo el código de nuestra aplicación: <a href=\"https://github.com/nubiix/ProyectoLicencias\" target=\"_blank\"><i class=\"fa fa-github fa-2x\" aria-hidden=\"true\"></i></a></div>
              </div>
    </section>
</div>
";
        }
        // line 313
        echo "
<footer class=\"page-footer center-on-small-only\">
    <!--Copyright-->
    <div class=\"footer-copyright\">
        <div class=\"container-fluid\">
            © 2017 Copyright: <a href=\"http://www.apruebanosfabiola.com\">Miguel Angel & Romel </a>

        </div>
    </div>
    <!--/.Copyright-->
</footer>

<!-- SCRIPTS -->
<!-- JQuery -->
<script type=\"text/javascript\" src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/js/jquery-3.1.1.min.js\"></script>
<!-- Bootstrap tooltips -->
<script type=\"text/javascript\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/js/tether.min.js\"></script>
<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/js/bootstrap.min.js\"></script>
<!-- MDB core JavaScript -->
<script type=\"text/javascript\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/js/mdb.min.js\"></script>
<!--<script type=\"text/javascript\" src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/bootstrap-3.3.7-dist/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/../assert/bootstrap-3.3.7-dist/js/bootstrap.min.js\"></script>-->
</body>
</html>";
    }

    // line 192
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
        return array (  536 => 192,  529 => 335,  525 => 334,  521 => 333,  516 => 331,  511 => 329,  506 => 327,  490 => 313,  419 => 245,  385 => 214,  372 => 203,  370 => 202,  359 => 193,  356 => 192,  351 => 189,  346 => 186,  344 => 185,  339 => 182,  336 => 181,  333 => 180,  330 => 179,  327 => 178,  319 => 173,  313 => 170,  307 => 167,  301 => 164,  293 => 161,  288 => 158,  285 => 157,  277 => 152,  271 => 149,  263 => 146,  258 => 143,  255 => 142,  247 => 137,  241 => 134,  235 => 131,  227 => 128,  222 => 125,  219 => 124,  211 => 119,  205 => 116,  199 => 113,  193 => 110,  187 => 107,  181 => 104,  175 => 101,  167 => 98,  162 => 95,  159 => 94,  148 => 86,  143 => 83,  141 => 82,  135 => 79,  126 => 73,  71 => 21,  67 => 20,  62 => 18,  57 => 16,  52 => 14,  45 => 10,  41 => 9,  37 => 8,  31 => 7,  27 => 6,  20 => 1,);
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
html,
body,
.view {
    height: 100%;
}
/* Navigation*/

.navbar {
    background-color: #3c4f74;
}

.scrolling-navbar {
    -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
    -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
    transition: background .5s ease-in-out, padding .5s ease-in-out;
}

.top-nav-collapse {
    background-color: #3c4f74;
}

footer.page-footer {
    background-color: #3c4f74;
    margin-top: 2rem;
}

@media only screen and (max-width: 768px) {
    .navbar {
        background-color: #1C2331;
    }
}
/*Call to action*/


.view {
    background: url(\"http://localhost/Proyecto_Licencias/img/licencias_background.png\")no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
/*Contact section*/

#contact .fa {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: #1C2331;
} 
</style>
<body><!-- {{ base_url() }} -->
<nav class=\"navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar\">
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
                <li class=\"nav-item\" id=\"li_login\">
                    <a class=\"nav-link\" href=\"{{path_for('login')}}\">Login</a>
                </li>
                <li class=\"nav-item\" id=\"li_acercade\">
                    <a class=\"nav-link\" href=\"#acercade\">Acerca de</a>
                </li>
            </ul>
        </div>
        {% else %}
          {% if tipo_usuario == 1 %}
            <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
              <ul class=\"navbar-nav mr-auto\">
                  <li class=\"nav-item li-admin\" id=\"li_admin\">
                      <a class=\"nav-link\" href=\"{{path_for('admin')}}\">Usuario: {{ user }}</a>
                  </li>
                  <li class=\"nav-item li-subirxml\" id=\"li_subirxml\">
                      <a class=\"nav-link\" href=\"{{path_for('subirxmlget')}}\">Subir xml</a>
                  </li>
                  <li class=\"nav-item li-subirlicenciavolumen\" id=\"li_subirlicenciavolumen\">
                      <a class=\"nav-link\" href=\"{{path_for('subirlicenciavolumen')}}\">Subir licencia de volumen</a>
                  </li>
                  <li class=\"nav-item li-subirusuarios\" id=\"li_subirusuarios\">
                      <a class=\"nav-link\" href=\"{{path_for('subirusuariosget')}}\">Subir usuario</a>
                  </li>
                  <li class=\"nav-item li-asociarclaves\" id=\"li_asociarclaves\">
                      <a class=\"nav-link\" href=\"{{path_for('asociarclavesget')}}\">Asociar claves</a>
                  </li>
                  <li class=\"nav-item li-administrarusuarios\" id=\"li_administrarusuarios\">
                      <a class=\"nav-link\" href=\"{{path_for('administrarusuariosget')}}\">Administrar usuarios</a>
                  </li>
                  <li class=\"nav-item li_acercade\" id=\"li_acercade\">
                      <a class=\"nav-link\" href=\"{{path_for('acercade')}}\">Acerca de</a>
                  </li>
                  <li class=\"nav-item li-logout\" id=\"li_logout\">
                      <a class=\"nav-link\" href=\"{{path_for('logout')}}\">Logout</a>
                  </li>
              </ul>
            </div>
        {% else %}
\t\t    {% if tipo_usuario == 2 %}
\t\t      <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                  <ul class=\"navbar-nav mr-auto\">
                      <li class=\"nav-item li-profesor\" id=\"li_profesor\">
                          <a class=\"nav-link\" href=\"{{path_for('profesor')}}\">Usuario: {{ user }}</a>
                      </li>
                      <li class=\"nav-item li-licenciasvolumen\" id=\"li_licenciasvolumen\">
                          <a class=\"nav-link\" href=\"{{path_for('licencias_volumen')}}\">Ver licencias volumen</a>
                      </li>
                      <li class=\"nav-item li_acercade\" id=\"li_acercade\">
                          <a class=\"nav-link\" href=\"{{path_for('acercade')}}\">Acerca de</a>
                      </li>
                      <li class=\"nav-item li-logout\" id=\"li_logout\">
                          <a class=\"nav-link\" href=\"{{path_for('logout')}}\">Logout</a>
                      </li>
                  </ul>
              </div>
\t\t    {% else %}
\t\t\t    {% if tipo_usuario == 3 %}
                    <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                              <ul class=\"navbar-nav mr-auto\">
                                  <li class=\"nav-item li-profesor\" id=\"li_alumno\">
                                      <a class=\"nav-link\" href=\"{{path_for('profesor')}}\">Usuario: {{ user }}</a>
                                  </li>
                                  <li class=\"nav-item li_acercade\" id=\"li_acercade\">
                                      <a class=\"nav-link\" href=\"{{path_for('acercade')}}\">Acerca de</a>
                                  </li>
                                  <li class=\"nav-item li-logout\" id=\"li_logout\">
                                      <a class=\"nav-link\" href=\"{{path_for('logout')}}\">Logout</a>
                                  </li>
                              </ul>
                          </div>
    \t\t    {% else %}
\t\t\t\t    {% if tipo_usuario == 4 %}
\t\t\t\t        <div class=\"collapse navbar-collapse\" id=\"navbarNav1\">
                              <ul class=\"navbar-nav mr-auto\">
                                  <li class=\"nav-item li-profesor\" id=\"li_profesor\">
                                      <a class=\"nav-link\" href=\"{{path_for('profesor')}}\">Usuario: {{ user }}</a>
                                  </li>
                                  <li class=\"nav-item li-licenciasvolumen\" id=\"li_licenciasvolumen\">
                                      <a class=\"nav-link\" href=\"{{path_for('licencias_volumen')}}\">Ver licencias volumen</a>
                                  </li>
                                  <li class=\"nav-item li-asociarclaves\" id=\"li_asociarclaves\">
                                      <a class=\"nav-link\" href=\"{{path_for('asociarclavesprofpost')}}\">Asociar claves</a>
                                  </li>
                                  <li class=\"nav-item li_acercade\" id=\"li_acercade\">
                                      <a class=\"nav-link\" href=\"{{path_for('acercade')}}\">Acerca de</a>
                                  </li>
                                  <li class=\"nav-item li-logout\" id=\"li_logout\">
                                      <a class=\"nav-link\" href=\"{{path_for('logout')}}\">Logout</a>
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
{% if user == false %}
<div class=\"view hm-black-strong\">
    <div class=\"full-bg-img flex-center\">
{% else %}
<div class=\"container\" style=\"margin-top: 100px\">
  <div>
{% endif %}
      {% block body %}{% endblock %}
    </div>
</div>

<div id=\"cajacookies\">
\t    <p><small>Utilizamos cookies para asegurar que damos la mejor experiencia al usuario en nuestro sitio web. 
\t    Si continúa utilizando este sitio asumiremos que está de acuerdo. 
\t    <button onclick=\"aceptarCookies()\" class=\"btn btn-default btn-sm\">Aceptar y cerrar éste mensaje</button></small></p> 
</div>

{% if user == false %}
<div class=\"container\">
\t<div class=\"divider-new\">
\t    <h2 class=\"h2-responsive wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;\">Acerca de</h2>
\t</div>
\t<section id=\"acercade\" class=\"text-left wow fadeIn\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;\">
    <div class=\"row\">
      <p>Saludos internauta. Estás en el apartado adecuado para saber un poco más de los creadores
        de esta aplicación web. Te preguntarás quienes somos y como hicimos esta maravillosa y funcional
        aplicación. Para empezar, conócenos un poco mas:</p>
        <div class=\"well\">
          <div class=\"media-left\">
          <img class=\"zoomIt\" src=\"{{base_url()}}/../img/migue.png\" alt=\"migue\" width=\"64\" height=\"64\">
          </div>
          <div class=\"media-body\">
            <h4 class=\"media-heading\">Miguel Angel González Rodríguez</h4>
            Programador. Su sueño es crear una red social con la cual hacerse rico y viajar por todo el mundo. Juego favorito \"Halo\", r.a.p como forma de vida. Si quieres conocerlo mejor pulse <a data-toggle=\"collapse\" href=\"#collapseMigue\" aria-expanded=\"false\"
            aria-controls=\"collapseMigue\">aqui</a>.
            <div class=\"collapse\" id=\"collapseMigue\">
              <div style=\"margin-top: 10px\">
                <p><b>Información adicional:</b><p>
                  <p>Ciertamente programar tiene sus cosas buenas y malas, siempre que seas alguien curioso al cual le gusta crear cosas, investigar, actualizarse, te verás recompensado cuando consigas tu proposito o tu aplicación deseada. Pero de mientras preparate para dolores de cabeza y horas de vida y sueño perdidas. Pero que aburrida sería la vida si no nos la complicaramos. Un saludo de tu amigo y vecino Spider-m... Migue!</p>
                  <p><b>Redes:</b><p>
                    <p>
                      <a href=\"https://www.facebook.com/profile.php?id=100012279423015\" target=\"_blank\">
                        <i class=\"fa fa-facebook fa-2x\" aria-hidden=\"true\"></i>
                      </a>
                      <a href=\"https://twitter.com/Miguewoolf\" target=\"_blank\">
                        <i class=\"fa fa-twitter fa-2x\" aria-hidden=\"true\"></i>
                      </a>
                      <a href=\"https://plus.google.com/104121579322674560082\" target=\"_blank\">
                        <i class=\"fa fa-google-plus fa-2x\" aria-hidden=\"true\"></i>
                      </a>
                    </p>
                    <p><b>Correo:</b></p>
                    <p>soulmigue@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"well\">
              <div class=\"media-left\">
                <a href=\"#\">
                  <img class=\"zoomIt\" src=\"{{base_url()}}/../img/kratos.png\" alt=\"romel\" width=\"64\" height=\"64\">
                </a>
              </div>
              <div class=\"media-body\">
                <h4 class=\"media-heading\">Romel García Rodríguez</h4>
                Programador. Según su filosofia haber estudiado informática fue un gran error, pero los hombres de verdad son consecuentes con sus deciciones. Juego favorito \"Final Fantasy X\", r.a.p como forma de vida. Si quieres conocerlo mejor pulse <a data-toggle=\"collapse\" href=\"#collapseRomel\" aria-expanded=\"false\"
                aria-controls=\"collapseRomel\">aqui</a>.
                <div class=\"collapse\" id=\"collapseRomel\">
                  <div style=\"margin-top: 10px\">
                    <p><b>Información adicional:</b><p>
                      <p>Programar fue divertido, hasta que supe como se programaba, ahora, vago por estos lares pegandome con el codigo, haciendo cosas realmente guays, y enseñando a los jovenes lechones avidos de conocimiento porque es una mala idea estudiar el noble arte de pegarse con un ordenador... Suele ganar el... lokthar ogar! </p>
                      <p><b>Redes:</b><p>
                        <p>
                          <a href=\"https://www.facebook.com/romel.garciarodriguez\" target=\"_blank\">
                            <i class=\"fa fa-facebook fa-2x\" aria-hidden=\"true\"></i>
                          </a>
                          <a href=\"https://www.twitter.com/Kaosnubi\" target=\"_blank\">
                            <i class=\"fa fa-twitter fa-2x\" aria-hidden=\"true\"></i>
                          </a>
                          <a href=\"https://plus.google.com/100040519746345216465\" target=\"_blank\">
                            <i class=\"fa fa-google-plus fa-2x\" aria-hidden=\"true\"></i>
                          </a>
                        </p>
                        <p><b>Correo:</b></p>
                        <p>osowowi@gmail.com</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"container\">Aquí el -> <a data-toggle=\"collapse\" href=\"#collapseFAQ\" aria-expanded=\"false\" aria-controls=\"collapseFAQ\">FAQs</a>.
                  <div class=\"collapse\" id=\"collapseFAQ\">
                    <div class=\"well\">
                      <p><b>¿De que va esta Aplicación Web?</b></p>
                      <p>Esta aplicación está enfocada para los usuarios de un instituto en donde un Administrador o Profesor puede repartir Licencias de Sistemas Operativos
                        a Alumnos, y estos pueden ver las licencias que le han sido otorgadas.
                      </p>
                      <p><b>¿Qué tecnología usa?</b></p>
                      <p>La aplicación está construida con PHP(Framework Slim), Javascript, HTML, CSS, SQL.</p>
                    </div>
                  </div>
                </div>
                <div class=\"container\">Aquí el -> <a data-toggle=\"collapse\" href=\"#collapseContac\" aria-expanded=\"false\" aria-controls=\"collapseContac\">Contáctanos</a>.
                  <div class=\"collapse\" id=\"collapseContac\">
                    <div class=\"well\">
                      <div class=\"text-center\">
                        <h3><i class=\"fa fa-envelope\"></i>Contáctanos:</h3>
                        <hr class=\"mt-2 mb-2\">
                      </div>
                      <p><b>¡¡Aquí podrás enviarnos un mensaje, recuerda poner tus datos!! (email)<br>(1000 caracteres como maximo)</b></p>
                      <div class=\"col-xs-12\"><p id=\"mensajeResultado\"></p></div>
                      <div class=\"form-group\" id=\"divEmail\">
                        <label for=\"email\">Email</label>
                        <input type=\"text\" class=\"form-control\" rows=\"5\" id=\"email\">
                      </div>
                      <div class=\"form-group\" id=\"divComentario\">
                        <label for=\"comment\">Comentario:</label>
                        <textarea class=\"form-control\" rows=\"5\" id=\"comment\"></textarea>
                      </div>
                      <button type=\"button\" id=\"enviarComentario\" class=\"btn btn-primary\">Enviar!</button>
                      <div id=\"falta\"></div>
                    </div>
                  </div>
                </div>
                <div class=\"container\" style=\"margin-top: 10px\">Tras conocer a los mejores programadores que encontrarás en tu vida, seguramente quieras saber el codigo fuente de nuestra aplicación. Como somos tan magnánimos y benevolentes te ofrecemos el enlace a nuestro github donde encontraras todo el código de nuestra aplicación: <a href=\"https://github.com/nubiix/ProyectoLicencias\" target=\"_blank\"><i class=\"fa fa-github fa-2x\" aria-hidden=\"true\"></i></a></div>
              </div>
    </section>
</div>
{% endif %}

<footer class=\"page-footer center-on-small-only\">
    <!--Copyright-->
    <div class=\"footer-copyright\">
        <div class=\"container-fluid\">
            © 2017 Copyright: <a href=\"http://www.apruebanosfabiola.com\">Miguel Angel & Romel </a>

        </div>
    </div>
    <!--/.Copyright-->
</footer>

<!-- SCRIPTS -->
<!-- JQuery -->
<script type=\"text/javascript\" src=\"{{base_url()}}/../assert/js/jquery-3.1.1.min.js\"></script>
<!-- Bootstrap tooltips -->
<script type=\"text/javascript\" src=\"{{base_url()}}/../assert/js/tether.min.js\"></script>
<!-- Bootstrap core JavaScript -->
<script type=\"text/javascript\" src=\"{{base_url()}}/../assert/js/bootstrap.min.js\"></script>
<!-- MDB core JavaScript -->
<script type=\"text/javascript\" src=\"{{base_url()}}/../assert/js/mdb.min.js\"></script>
<!--<script type=\"text/javascript\" src=\"{{base_url()}}/../assert/bootstrap-3.3.7-dist/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"{{base_url()}}/../assert/bootstrap-3.3.7-dist/js/bootstrap.min.js\"></script>-->
</body>
</html>", "plantillabase.twig.php", "C:\\xampp\\htdocs\\Proyecto_Licencias\\templates\\plantillabase.twig.php");
    }
}
