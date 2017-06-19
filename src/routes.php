<?php
// Routes
use League\Csv\Reader;
use Dompdf\Dompdf;

//ruta principal / (es el login tipo get)
$app->get('/', function ($request, $response, $args) use ($app){
     
    //variable qie inicializa el array usuario guardado en cookies
    $usuario_guardado = array();
    //comprueba si existen las cookies y las guarda en un array
    if(isset($_COOKIE["nombre_usuario"]) && isset($_COOKIE["password"])){
        $usuario_guardado = array("usuario" => $_COOKIE["nombre_usuario"], "pass" => $_COOKIE["password"]);
    }

    //comprueba si existe la variable session tipo de usuario y si es asi no te deja ir de nuevo al login
    //te redirige a la vista del tipo usuario logueado, si no estas logueado te redirige al login
    if(isset($_SESSION["tipo_usuario"])){
        if($_SESSION["tipo_usuario"]==1){
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('admin'));
        }
        if($_SESSION["tipo_usuario"]==2){
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('profesor'));
        }
        if($_SESSION["tipo_usuario"]==3){
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('alumno'));
        }
        if($_SESSION["tipo_usuario"]==4){
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('profesor'));
        }
    }else{
        return $this->view->fetch('login.twig.php', $usuario_guardado);
    }

})->setName('login');

//ruta principal / (es el login tipo post)
$app->post('/', function ($request, $response, $args) use ($app, $model){

    //variables que reciben el usuario y la password al loguearse
    $usuario = $request->getParam('usuario');
    $password = $request->getParam('password');

    //comprobación de usuario y contraseña correctos
    $user = $model->comprobar_login_contraseña($usuario, $password);
    //$user["ref_tipo_usuario"];
    
    //comprueba si el checkbox para recordar usuario esta activo si es asi crea las variables cookies
    if(isset($_REQUEST["guardar_clave"])){
        if($_REQUEST["guardar_clave"] == "1"){
            setcookie("nombre_usuario",$usuario, time()+(60*60*24*365));
            setcookie("password",$password, time()+(60*60*24*365));
        }
    }

    //inserta en la base de datos su conexion para llevar un registro de conexiones
    if(isset($user["id_usuario"]))
    {
        $model->insertar_conexion_usuario($user["id_usuario"]);
    }

    //cambiar la contraseña la primera vez que entras
    if($usuario==$password && isset($user["id_usuario"]))
    {
        $_SESSION['id']=$user["id_usuario"];
        $_SESSION['user']=$user["nombre"];
        $data=array("nif_nie"=>$user["nif_nie"]);
        return $this->view->fetch('cambioContra.php',$data);
        //return $response->withRedirect($app->getContainer()->get('router')->pathFor('cambioContra'));
    }
    
    //comprueba que tipo de usuario es el usuario a loguearse
    //y guarda en la variables session informacion de dicho usuario
    if($user["ref_tipo_usuario"]==1)
    {
        //$array_session=[$user["nombre"],$user["ref_tipo_usuario"]];
        $_SESSION['user']=$user["nombre"];
        $_SESSION['tipo_usuario']=$user["ref_tipo_usuario"];
        $_SESSION['id']=$user["id_usuario"];
        return $response->withRedirect($app->getContainer()->get('router')->pathFor('admin'));
    }
    if($user["ref_tipo_usuario"]==2)
    {
        $_SESSION['user']=$user["nombre"];
        $_SESSION['tipo_usuario']=$user["ref_tipo_usuario"];
        $_SESSION['id']=$user["id_usuario"];
        return $response->withRedirect($app->getContainer()->get('router')->pathFor('profesor'));
    }
    if($user["ref_tipo_usuario"]==3)
    {
        $_SESSION['user']=$user["nombre"];
        $_SESSION['tipo_usuario']=$user["ref_tipo_usuario"];
        $_SESSION['id']=$user["id_usuario"];
        return $response->withRedirect($app->getContainer()->get('router')->pathFor('alumno'));
    }
    if($user["ref_tipo_usuario"]==4)
    {
        $_SESSION['user']=$user["nombre"];
        $_SESSION['tipo_usuario']=$user["ref_tipo_usuario"];
        $_SESSION['id']=$user["id_usuario"];
        return $response->withRedirect($app->getContainer()->get('router')->pathFor('profesor'));
    }

    if(isset($_REQUEST["tema"])){
        if($_REQUEST["tema"] == "default"){
            $_SESSION['tema']= "bootstrap";
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));
        }
        if($_REQUEST["tema"] == "tema1"){
            $_SESSION['tema']= "bootstrap1";
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));
        }
        if($_REQUEST["tema"] == "tema2"){
            $_SESSION['tema']= "bootstrap2";
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));
        }
        if($_REQUEST["tema"] == "tema3"){
            $_SESSION['tema']= "bootstrap3";
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));
        }
    } 

    //si no entra en ningun if es que hay errores al intentar loguearse
    $error = array("error" => "1");

    return $this->view->fetch('login.twig.php', $error);
    
    //return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));
   /* if($usuario == 'admin' && $password=='entra'){
        $_SESSION['user']=$usuario;
        return $response->withRedirect($app->getContainer()->get('router')->pathFor('admin'));
    }else{
        $body=$this->view->fetch('login.twig.php');
        return $response->write($body);
    }*/

})->setName('login');

//ruta acerca de
$app->get('/acercade', function ($request, $response, $args) use ($app) {

    return $this->view->fetch('acercade.twig.php');

})->setName('acercade');

//ruta post de acerca de
$app->post('/acercade', function ($request, $response, $args) use ($app) {

    if(isset($_REQUEST["tema"])){
        if($_REQUEST["tema"] == "default"){
            $_SESSION['tema']= "bootstrap";
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));
        }
        if($_REQUEST["tema"] == "tema1"){
            $_SESSION['tema']= "bootstrap1";
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));
        }
        if($_REQUEST["tema"] == "tema2"){
            $_SESSION['tema']= "bootstrap2";
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));
        }
        if($_REQUEST["tema"] == "tema3"){
            $_SESSION['tema']= "bootstrap3";
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));
        }
    } 
    
    return $this->view->fetch('acercade.twig.php');

})->setName('acercade');


//ruta /admin donde se sube el xml (get)
$app->get('/admin/subirxml', function ($request, $response, $args) use ($app){

    return $this->view->fetch('subirxml.twig.php');

})->setName('subirxmlget')->add($accesoLoginadmin);

//ruta principal del adminnistrador
$app->get('/admin', function ($request, $response, $args) use ($app,$model){
 
    $arrayUltimosConectados = $model->obtener_ultimos_conectados();
    $mensajesNoContestados = $model->obtener_mensajes_no_contestados();
    $arrayTotalLicencias = $model->obtener_total_licencias();
    
    //var_dump($mensajesNoContestados);
    //die();
    $data=array("ultimosConectados"=>$arrayUltimosConectados, "mensajes"=>$mensajesNoContestados, "totalLicencias"=>$arrayTotalLicencias);
    
    return $this->view->fetch('principaladmin.twig.php',$data);

})->setName('admin')->add($accesoLoginadmin);

//ruta /admin donde se sube la licencia de volumen (get)
$app->get('/admin/subirlicenciavolumen', function ($request, $response, $args) use ($app){

    return $this->view->fetch('subirlicenciavolumen.twig.php');

})->setName('subirlicenciavolumen')->add($accesoLoginadmin);

//ruta /admin donde se sube la licencia de volumen (post)
$app->post('/admin/subirlicenciavolumen', function ($request, $response, $args) use ($app, $model){

    //recoge parametros por post para enviarlos al modelo
    $nombre=$_POST["nombre"];
    $key=array();
    array_push($key, $_POST["key"]);
    $volumen=1;

    //llamada al modelo
    $model->insertar_claves($nombre, $key, $volumen);
    
    return $this->view->fetch('subirlicenciavolumen.twig.php');

})->setName('subirlicenciavolumenpost')->add($accesoLoginadmin);

//ruta /admin donde se asocian las claves con los alumnos o profesores
$app->get('/admin/asociarclaves', function ($request, $response, $args) use ($app, $model){

    //llamar al modelo para obtener los cursos
    $cursos = $model->obtener_curso_2();
    //print_r($cursos);

    return $this->view->fetch('asociarclaves.twig.php', $cursos);

})->setName('asociarclavesget')->add($accesoLoginadmin);

//ruta /admin donde se asocian las claves con los alumnos o profesores (post)
$app->post('/admin/asociarclaves', function ($request, $response, $args) use ($app, $model){

    //recoger el id del curso
    $curso = $_REQUEST["curso"];
    $arrayAlumnos = array();
    $arrayLicencias = array();
    $arrayId = array();
    if($_REQUEST["curso"]=="Profesores")
    {
        $alumnos = $model->obtener_profesores();
    }else{
        //llamar al modelo para obtener los alumnos de ese curso
        $alumnos = $model->obtener_alumnos($curso);
        //print_r($model->obtener_licencias_asociadas($alumnos));
      
    }
    
    foreach ($alumnos as $key) {
        array_push($arrayId, $key['id_usuario']);
        array_push($arrayAlumnos, $key['nombre']." ".$key['primer_apellido']." ".$key['segundo_apellido']);
    }
    //print_r($alumnos);
    $arrayLicencias = $model->obtener_licencias_asociadas($alumnos);

    $data = array('alumnos' => $arrayAlumnos, 'licencias' => $arrayLicencias, 'idAlumnos' => $arrayId, 'curso' => $curso);
    //print_r($data);
    return $this->view->fetch('asociarclavespost.twig.php', $data);

})->setName('asociarclavespost')->add($accesoLoginadmin);

//ruta /admin donde se administran los usuarios
$app->get('/admin/administrarusuarios', function ($request, $response, $args) use ($app, $model){

    return $this->view->fetch('administrarusuarios.twig.php');

})->setName('administrarusuariosget')->add($accesoLoginadmin);

//ruta /admin donde se sube el xml (post)
$app->post('/admin/subirxml', function ($request, $response, $args) use ($service, $model){

    //cargamos el fichero xml y lo procesamos 
    move_uploaded_file($_FILES['subirxml']['tmp_name'],"../assert/ficherosxml/temp.xml");
    $xml=simplexml_load_file("../assert/ficherosxml/temp.xml") or die("Error: Cannot create object");
    
    //array de claves
    $nombreLote = $xml->Product_Key["Name"];
    $arrayKeys=array();
    foreach ($xml->Product_Key->Key as $keys) {
        $texto=(string)$keys;
        array_push($arrayKeys, $texto);
    }

    //llamada modelo para insertar claves
    //$model->insertar_claves($nombreLote, $arrayKeys);

    //guardando en data las claves para pasarlas a la vista
    print_r($model->insertar_claves($nombreLote, $arrayKeys));
    $data=array('nombre'=>$nombreLote,'keys'=>$arrayKeys);

    return $this->view->fetch('xmlsubido.twig.php',$data);

})->setName('subirxmlpost')->add($accesoLoginadmin);

//ruta /admin donde se sube los usuarios (se elige que tipo de usuario subir, alumno o profesor) (get)
$app->get('/admin/subirusuarios', function ($request, $response, $args) use ($app) {

    return $this->view->fetch('elegirprofoalum.twig.php');

})->setName('subirusuariosget')->add($accesoLoginadmin);

//ruta /admin donde se sube los usuarios(alumnos) (get)
$app->get('/admin/subirusuarios/alum', function ($request, $response, $args) use ($app) {

    return $this->view->fetch('subirusuariosalumnos.twig.php');

})->setName('subirusuariosalumnos')->add($accesoLoginadmin);

//ruta /admin donde se sube los usuarios(alumnos) (post)
$app->post('/admin/subirusuarios/alum', function ($request, $response, $args) use($app, $model){

    move_uploaded_file($_FILES['subirusuariosalumnos']['tmp_name'],"../assert/ficheroscsv/temp.csv");
    $csv = Reader::createFromPath('../assert/ficheroscsv/temp.csv');
    $headers = $csv->fetchOne();
    $res = $csv->fetchAll();
    unlink('../assert/ficheroscsv/temp.csv');
    unset($res[0]);
    /*var_dump($res);
    die();*/
    $model->subir_alumnos($res);
    return $this->view->fetch('subirusuarios.twig.php');

})->setName('subirusuariosalumnospost')->add($accesoLoginadmin);

//ruta que sube los profesores desde un formulario manual
$app->post('/admin/subirusuarios/profmanual', function ($request, $response, $args) use($app, $model){

    $fila=$_POST["direccion"].";".$_POST["nif_nie"].";".$_POST["nombre"].";".$_POST["primer_apellido"].";".$_POST["segundo_apellido"].";".$_POST["telefono_sms"].";".$_POST["direccion"].";".$_POST["email"].";".$_POST["numero_afiliacion"].";".$_POST["curso_tutor"];
    $res=array($fila);
    $model->subir_profesores($res);
    return $this->view->fetch('subirusuarios.twig.php');

})->setName('subirusuariosprofesoresmanual')->add($accesoLoginadmin);

//ruta que sube los alumnos desde un formulario manual
$app->post('/admin/subirusuarios/alummanual', function ($request, $response, $args) use($app, $model){

    $fila=$_POST["nombre_curso"].";".$_POST["nombre_curso_largo"].";".$_POST["numero_lista"].";".$_POST["nombre"].";".$_POST["primer_apellido"].";".$_POST["segundo_apellido"].";".$_POST["cial"].";".$_POST["expediente"].";".$_POST["nif_nie"].";".$_POST["telefono"].";".$_POST["telefono_sms"].";".$_POST["email"];
    $res=array($fila);
    //var_dump($res);
    $resultado = $model->subir_alumnos($res);
    return $this->view->fetch('subirusuarios.twig.php');

})->setName('subirusuariosalumnosmanual')->add($accesoLoginadmin);


//ruta /admin donde se sube los usuarios(profesores) (get)
$app->get('/admin/subirusuarios/prof', function ($request, $response, $args) use ($app, $model) {

    return $this->view->fetch('subirusuariosprofesores.twig.php');

})->setName('subirusuariosprofesores')->add($accesoLoginadmin);

//ruta /admin donde se sube los usuarios(profesores) (post)
$app->post('/admin/subirusuarios/prof', function ($request, $response, $args) use($app, $model){
   
    move_uploaded_file($_FILES['subirusuariosprofesores']['tmp_name'],"../assert/ficheroscsv/temp.csv");
    $csv = Reader::createFromPath('../assert/ficheroscsv/temp.csv');
    $csv->setDelimiter(';');
    $csv->setInputEncoding('iso-8859-1');
    $headers = $csv->fetchOne();
    $res = $csv->fetchAll();
    /*foreach ($res as $k) {
        var_dump($k);
    }*/
    unlink('../assert/ficheroscsv/temp.csv');
    unset($res[0]);
    //llamada al modelo
    //var_dump($res);
    //die();
    $model->subir_profesores($res);

    return $this->view->fetch('subirusuarios.twig.php');

})->setName('subirusuariosprofesorespost')->add($accesoLoginadmin);

//ruta asociar claves de los profesores tutores a su curso
$app->get('/prof/asociarclaves', function ($request, $response, $args) use ($app, $model){

    $curso = $model->devolver_curso_tutor($_SESSION['id']);
    //recoger el id del curso
    $arrayAlumnos = array();
    $arrayLicencias = array();
    $arrayId = array();
    //llamar al modelo para obtener los alumnos de ese curso
    $alumnos = $model->obtener_alumnos($curso);
    //print_r($model->obtener_licencias_asociadas($alumnos));
    
    foreach ($alumnos as $key) {
        array_push($arrayId, $key['id_usuario']);
        array_push($arrayAlumnos, $key['nombre']." ".$key['primer_apellido']." ".$key['segundo_apellido']);
    }
    //print_r($alumnos);
    $arrayLicencias = $model->obtener_licencias_asociadas($alumnos);

    $data = array('alumnos' => $arrayAlumnos, 'licencias' => $arrayLicencias, 'idAlumnos' => $arrayId);
    //print_r($data);
    return $this->view->fetch('asociarclavespost.twig.php', $data);

})->setName('asociarclavesprofpost')->add($accesoLogintutor);

//ruta /logout (eliminar la sesion)
$app->get('/logout', function($request,$response,$args) use ($app, $model){

    //vacia las variables session
    unset($_SESSION['user']);
    unset($_SESSION['tipo_usuario']);
    unset($_SESSION['id_usuario']);

    //vacia variables globales
    $this->get('view')->getEnvironment()->addGlobal('user', null);
    $this->get('view')->getEnvironment()->addGlobal('tipo_usuario', null);

    return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));

})->setName('logout')->add($accesoLogin);

//ruta de cambio de contraseña
$app->post('/cambioContra', function ($request, $response, $args) use ($app, $model){
    
    $contra = $request->getParam('nuevaContra');
    $hashContra = password_hash($contra, PASSWORD_DEFAULT);
    $model->actualizar_contra($_SESSION['id'],$hashContra);
    return $response->withRedirect($app->getContainer()->get('router')->pathFor('logout'));
    
})->setName('cambioContra')->add($accesoLogin);

//ruta principal de los profesores y tutores 
$app->get('/profesor', function ($request, $response, $args) use ($app, $model){

    //llamada al modelo para obtener las licencias del usuario logeado
    $licencias=$model->mostrar_licencias($_SESSION['id']);

    //variables
    //var_dump($licencias);
    $contador=0;
    $arraynombre=array();
    $arraykey=array();
    $arrayid=array();
    $stringid=null;

    while ($contador<count($licencias)) {
        //echo $contador;
        array_push($arraynombre, $licencias[$contador]);
        $contador++;
        array_push($arraykey, $licencias[$contador]);
        $contador++;
        array_push($arrayid, $licencias[$contador]);
        $stringid.=$licencias[$contador].";";
        $contador++;
    }
    //print_r($stringid);
    $datos_user = $model->obtener_usuario($_SESSION['id']);
    //var_dump($datos_user);

    $data=array('nombre'=>$arraynombre, 'licencia'=>$arraykey, 'id'=>$arrayid, 'total_id'=>$stringid, 'datos_user'=>$datos_user);
    //var_dump($data);

    return $this->view->fetch('principalprofesor.twig.php',$data);

})->setName('profesor')->add($accesoLoginprofesor);

//ruta principal de los alumnos
$app->get('/alumno', function ($request, $response, $args) use ($app, $model){

    //llamada al modelo para obtener las licencias del usuario logeado
    //var_dump($_SESSION['id']);
    $licencias=$model->mostrar_licencias($_SESSION['id']);

    //var_dump($licencias);
    $contador=0;
    $arraynombre=array();
    $arraykey=array();
    $arrayid=array();
    $stringid=null;

    while ($contador<count($licencias)) {
        //echo $contador;
        array_push($arraynombre, $licencias[$contador]);
        $contador++;
        array_push($arraykey, $licencias[$contador]);
        $contador++;
        array_push($arrayid, $licencias[$contador]);
        $stringid.=$licencias[$contador].";";
        $contador++;
    }

    //print_r($stringid);
    $datos_user = $model->obtener_usuario($_SESSION['id']);
    //var_dump($datos_user);

    $data=array('nombre'=>$arraynombre, 'licencia'=>$arraykey, 'id'=>$arrayid, 'total_id'=>$stringid, 'datos_user'=>$datos_user);

    return $this->view->fetch('principalalumno.twig.php',$data);

})->setName('alumno')->add($accesoLoginalumno);

//ruta /profesor donde ve las licencias de volumen
$app->get('/profesor/licenciasvolumen', function ($request, $response, $args) use ($app, $model){

    $licencias_volumen = $model->obtener_licencias_volumen();
    //print_r($licencias_volumen);
    $contador = 0;
    $arraynombre = array();
    $arraykey = array();

    while ($contador < count($licencias_volumen)) { 
        array_push($arraynombre, $licencias_volumen[$contador]);
        $contador++;
        array_push($arraykey, $licencias_volumen[$contador]);
        $contador++;
    }

    $data = array('nombre' => $arraynombre, 'clave' => $arraykey);

    return $this->view->fetch('licenciasvolumen.twig.php',$data);

})->setName('licencias_volumen')->add($accesoLoginprofesor);

//ruta donde se genera el pdf (post)
$app->post('/generar_pdf', function ($request, $response, $args) use ($app, $model){

    $datos_user = $model->obtener_usuario($_SESSION['id']);    
     //var_dump($datos_user);
    $data=array('datos_user'=>$datos_user, 'nombre' => $_REQUEST['nombre'], 'licencia' => $_REQUEST['licencia']);
    $dompdf = new Dompdf();

    $content = $this->view->fetch('generarpdf.twig.php', $data);
    $dompdf->loadHtml($content);
    $dompdf->render();
    $dompdf->stream('Prueba');

})->setName('generar_pdf');

//ruta para generar todos los pdf
$app->post('/generar_todos_pdf', function ($request, $response, $args) use ($app, $model){

    $datos_user = $model->obtener_usuario($_SESSION['id']);
    $licencias = $model->mostrar_licencias($_SESSION['id']);
     //var_dump($datos_user);
    $dompdf = new DOMPDF();
    $filename = "claves.pdf";
    $content ="";
    for($i=0;$i<sizeof($licencias);$i++)
    {
        $data=array('datos_user'=>$datos_user, 'nombre' => $licencias[$i], 'licencia' => $licencias[$i+1]);
        $i++;
        $i++;
        $content .= $this->view->fetch('generarpdf.twig.php', $data);        
           
    }
    $dompdf->load_html($content);
    $dompdf->render();
    $dompdf->stream($filename);

})->setName('generar_todos_pdf');

//ruta get para actualizar los datos de los usuarios
$app->get('/admin/actualizaruser', function ($request, $response, $args) use ($app){

    return $response->withRedirect($app->getContainer()->get('router')->pathFor('administrarusuariosget'));

})->setName('actualizarUserget')->add($accesoLoginadmin);

//ruta post para actualizar los datos de los usuarios
$app->post('/admin/actualizaruser', function ($request, $response, $args) use($app, $model){
    
    $array_de_envio = array();
    if(isset($_POST["numero_afiliacion"]))
    {
        $array_de_envio["profesor"]=array($_POST["departamento"],$_POST["nif_nie"],$_POST["nombre"],$_POST["primer_apellido"],$_POST["segundo_apellido"],
        $_POST["numero_afiliacion"],$_POST["telefono_sms"],$_POST["email"],$_POST["direccion"],$_POST["id"]);
    }else if(isset($_POST["nombre_curso"])){
        $array_de_envio["alumno"]=array($_POST["nombre_curso"],$_POST["numero_lista"],$_POST["nombre"],$_POST["primer_apellido"],$_POST["segundo_apellido"],
        $_POST["cial"],$_POST["expediente"],$_POST["nif_nie"],$_POST["telefono"],$_POST["telefono_sms"],$_POST["email"],$_POST["id"]);
    }
    //var_dump($array_de_envio);
    $model->actualizar_integrante($array_de_envio);
    
    return $response->withRedirect($app->getContainer()->get('router')->pathFor('administrarusuariosget'));

})->setName('actualizarUser')->add($accesoLoginadmin);

//ruta para restaurar password
$app->post('/restaurar_password', function ($request, $response, $args) use ($app,$model){
 
    $nif = $_POST["usuario"];
    $array = $model->obtener_usuario_contra($nif);
    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $nifCodificado = "";
 
    for ($i=0; $i < strlen($nif) ; $i++) { 
        $nifCodificado .= substr($caracteres,rand(0,strlen($caracteres)),1);
        $nifCodificado .= $nif[$i];        
    }
    // Esta codificacion de id, la hacemos para conocer el resultado que debe dar sin que el usuario o golfillos puedan saber de que se trata
    // podiamos haber implementado un sistema con una salt manual que nos sirviese para enviar y traducir aqui, pero era mucho rollo, asi que esto valdria
    // dado que es un ejemplo "educativo"
    $id = $array["id"]*640*10000*3990*760;    
    $cadena = "http://apruebanosfabiola.com/renovarContra?i=$id&n=$nifCodificado";
    $contestacion = "Has solicitado un cambio de contraseña, por lo que haz click <a href=$cadena>aqui</a> para cambiarla :D <br> Un saludo<br> Administracion de apruebanosfabiola.com";
 
    $para      = $array["email"];  
    $titulo    = 'Cambio de contraseña';
    $mensaje   = $contestacion;
    $cabeceras = 'From: admin@apruebanosfabiola.com';
 
    mail($para, $titulo, $mensaje, $cabeceras);
 
    return $this->view->fetch('login.twig.php');
 
})->setName('restaurar_password');

//ruta para cambiar la contraseña
$app->get('/renovarContra', function ($request, $response, $args) use ($app){
 
    $_GET["id"]=$_GET["i"]/760/3990/10000/640;
    $_SESSION["id"]=$_GET["i"];
    $nifDecodificado = "";
    for ($i=0; $i < strlen($_GET["n"]); $i++) { 
        $i++;
        $nifDecodificado .= $_GET["n"][$i];
    }
    $data=array("nif_nie"=>$nifDecodificado);
    return $this->view->fetch('cambioContra.php',$data);
    
 
})->setName('renovarContra');

//ruta para enviar la contestacion (post)
$app->post('/admin/enviar_contestacion', function ($request, $response, $args) use($app, $model){

    $contestacion = $_REQUEST['contestacion'];
    $email = $_REQUEST['contestacion_email'];
    $id = $_REQUEST['contestacion_id']; 

    $para = $email;  
    $titulo = 'Respuesta a tu mensaje';
    $mensaje = $contestacion;
    $cabeceras = 'From: admin@apruebanosfabiola.com';

    mail($para, $titulo, $mensaje, $cabeceras);

    $model->correo_enviado($id);

    return $response->withRedirect($app->getContainer()->get('router')->pathFor('admin')); 

})->setName('enviar_contestacion')->add($accesoLoginadmin);

//ruta para cuando intentas acceder a un sitio sin permiso
$app->get('/you_shall_not_pass', function ($request, $response, $args) use ($app){

    return $this->view->fetch('nopermiso.twig.php');

})->setName('prohibido');

//ruta para la recuperación de contraseña
$app->get('/restaurar_password', function ($request, $response, $args) use ($app){

    return $this->view->fetch('changepass.twig.php');

})->setName('restaurar_password');

//ruta de easter egg de juego snake
$app->get('/welcome_to_snake', function ($request, $response, $args) use ($app){

    return $this->view->fetch('snake.twig.php');
    
})->setName('snake');