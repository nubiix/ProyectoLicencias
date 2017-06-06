<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);

$accesoLogin = function($request, $response, $next) use($app){
    if(!isset($_SESSION['user'])){
        return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));  
    }else{
        return $next($request, $response);
    }
};

//Restriciones a rutas dependiendo del tipo de usuario

$accesoLoginprofesor = function($request, $response, $next) use($app){
    if(isset($_SESSION["user"]))
    {
        if($_SESSION["tipo_usuario"]!=2 && $_SESSION["tipo_usuario"]!=4){
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('prohibido'));  
        }else{
            return $next($request, $response);
        }
    }else{
        return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));  
    }
    
};

$accesoLoginalumno = function($request, $response, $next) use($app){
    if(isset($_SESSION["user"]))
    {
        if($_SESSION["tipo_usuario"]!=3){
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('prohibido'));  
        }else{
            return $next($request, $response);
        }
    }else{
        return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));  
    }
};

$accesoLoginadmin = function($request, $response, $next) use($app){
    if(isset($_SESSION["user"]))
    {
        if($_SESSION["tipo_usuario"]!=1){
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('prohibido'));  
        }else{
            return $next($request, $response);
        }
    }else{
        return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));  
    }
};

$accesoLogintutor = function($request, $response, $next) use($app){
    if(isset($_SESSION["user"]))
    {
        if($_SESSION["tipo_usuario"]!=4){
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('prohibido'));  
        }else{
            return $next($request, $response);
        }
    }else{
        return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));  
    }
};

//Variables globales para usarlas desde las vistas

$datosVistas=function($request, $response, $next){
    $user=null;
    $tipo_usuario=null;
    $tema="bootstrap";
    if(isset($_SESSION['user'])){
        $user=$_SESSION['user'];  
    }
    if(isset($_SESSION['tipo_usuario'])){
        $tipo_usuario=$_SESSION['tipo_usuario'];  
    }
    if(isset($_SESSION['tema'])){
        $tema=$_SESSION['tema'];  
    }
    $this->get('view')->getEnvironment()->addGlobal('user', $user);
    $this->get('view')->getEnvironment()->addGlobal('tipo_usuario', $tipo_usuario);
    $this->get('view')->getEnvironment()->addGlobal('tema', $tema);
    $response= $next($request, $response);
    return $response;
};

$app->add($datosVistas);