<?php
  $email = isset($_POST["correo"])?$_POST["correo"]:"";
  $comentario = isset($_POST["mensaje"])?$_POST["mensaje"]:"";
  try{
    $pdo = new PDO('mysql:host=localhost;dbname=proyecto_final', 'root', '');
  	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	$pdo->exec("SET NAMES 'utf8'");
  	if ($email != "" && $comentario != ""){
  		$consulta= $pdo->prepare("INSERT INTO mensajes(autor, mensaje) VALUES(?,?)");
  		if($consulta->execute(array($email,$comentario)))
  		{
  		  echo "ok";
  		}else{
  		  echo "ko";
  		}
  	}else{
  	  echo "ko";
  	}
	  
  }catch(Exception $e){
    die($e->getMessage());
  }
  
?>