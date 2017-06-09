<?php
/**/
class Claves_Model
{
	//Variables
	private $pdo;
	private $orm;

	function __construct()
	{
		try
		{	
			$this->pdo = new PDO('mysql:host=localhost;dbname=proyecto_final', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo->query("set names 'utf8'");
			$this->orm = new NotORM($this->pdo);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}



/*	public function listar()
	{		
		try
		{
			$result = array();
			// $stm = $this->pdo->prepare('SELECT * FROM alumnos');
			// $stm->execute();
			// foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
			// 	$alm = new Alumno();

			// 	$alm->__SET('id', $r->id);
			// 	$alm->__SET('nombre', $r->nombre);
			// 	$alm->__SET('apellidos', $r->apellidos);
			// 	$alm->__SET('telefono', $r->telefono);

			// 	$result[] = $alm;
			// }
			// return $result;

			$listar = $this->orm->alumnos();
			foreach ($listar as $r) {
				$alm = new Alumno();

				$alm->__SET('id', $r['id']);
				$alm->__SET('nombre', $r['nombre']);
				$alm->__SET('apellidos', $r['apellidos']);
				$alm->__SET('telefono', $r['telefono']);

				$result[] = $alm;
			}
			return $result;

		} 
		catch(PDOException $e) 
		{
			die($e->getMessage());
		}
	}


	public function Eliminar($id)
	{
		try{
			$eliminar = $this->orm->alumnos[$id];
			$eliminar->delete();
			//$stm = $this->pdo->prepare('DELETE FROM alumnos WHERE id = ?');
			//$stm->execute(array($id));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}*/


	public function listar()
	{
		try
		{
			$result = array();

			$listar = $this->orm->usuarios();
			foreach ($listar as $r) {
				array_push($result, $r);
			}
			return $result;
		}
		catch(PDOException $e) 
		{
			die($e->getMessage());
		}
	}


	public function insertar_claves($lote, $keys, $volumen=null)
	{
		try{
		    $contador=0;
		    $numArray=0;
		    $fallos = array();
			$insertar = $this->orm->claves();
			if($volumen==1){
				$tipo=2;
			}else{
				$tipo=1;
			}
		    foreach ($keys as $k) { 
		        if(!$this->saber_si_existe($lote,$k,$tipo))
		        {
		            $insertar->insert(array("nombre" => $lote, "clave" => $k, "ref_tipo_clave" => $tipo));
			        $contador++;
		        }else{
		            array_push($fallos,$numArray);
		        }
		        $numArray++;
			} 
			return $fallos;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function saber_si_existe($lote,$key,$tipo)
	{
	    try{
	        //$licencias = $this->orm->claves(array("nombre" => $lote, "clave" => $k, "ref_tipo_clave" => $tipo));
	        $licencias = $this->orm->claves(array("nombre" => $lote, "clave" => $key, "ref_tipo_clave" => $tipo))->count("id_clave");
	        if($licencias==0)
	        {
	            return false;
	        }else{
	            return true;
	        }
	    
	    }catch(Exception $e)
	    {
	        die($e->getMessage());
	    }
	}

	public function subir_alumnos($arraydefilas)
	{
	    $numArray=0;
		$fallos = array();
		try{
			
			foreach ($arraydefilas as $fila) {
				$resultado=explode(";", $fila);
				$grupo_clase=$resultado[0];
				$estudio_den_larga=$resultado[1];
				$nlista=$resultado[2];
				$nombre=mb_convert_case(mb_convert_case($resultado[3], MB_CASE_LOWER), MB_CASE_TITLE);
				$primer_apellido=mb_convert_case(mb_convert_case($resultado[4], MB_CASE_LOWER), MB_CASE_TITLE);
				$segundo_apellido=mb_convert_case(mb_convert_case($resultado[5], MB_CASE_LOWER), MB_CASE_TITLE);
				$cial=$resultado[6];
				$expediente=$resultado[7];
				$nif_nie=$resultado[8];
				$telefono=$resultado[9];
				$tlf_sms=$resultado[10];
				$email=$resultado[11];
				$password=password_hash($nif_nie, PASSWORD_DEFAULT);
				$ruta_foto="../img/".$expediente.".jpg";

                if(!$this->saber_si_existe_usuario($nif_nie))
                {
                    $insertar = $this->orm->usuarios();
					$insertar->insert(array("nombre_curso" => $grupo_clase, 'nombre_curso_largo'=>$estudio_den_larga, "numero_lista" => $nlista, "nombre" => $nombre,"primer_apellido" => $primer_apellido, "segundo_apellido" => $segundo_apellido, "cial" => $cial, "expediente" => $expediente, "nif_nie" => $nif_nie, "telefono" => $telefono, "telefono_sms" => $tlf_sms, "email" => $email, "password" => $password, "url_foto" => $ruta_foto, "ref_tipo_usuario" => 3));    
                }else{
                	$update = $this->orm->usuarios();
					$update->update(array("nombre_curso" => $grupo_clase, 'nombre_curso_largo'=>$estudio_den_larga, "numero_lista" => $nlista, "nombre" => $nombre,"primer_apellido" => $primer_apellido, "segundo_apellido" => $segundo_apellido, "cial" => $cial, "expediente" => $expediente, "telefono" => $telefono, "telefono_sms" => $tlf_sms, "email" => $email));
                    array_push($fallos,$numArray);
                }
                $numArray++;
			}
		}catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function saber_si_existe_usuario($nif_nie)
    {
        try{
            $select = $this->orm->usuarios(array("nif_nie" => $nif_nie))->count("nif_nie");
    		if($select==0)
    		{
    		    return false;
    		}else{
    		    return true;
    		}
        }catch(Exception $e)
        {
            die($e->getMessage());
        }
    }



	public function obtener_curso($curso_valido)
	{
		$select = $this->orm->curso();
		//echo $curso_valido;
		$id_curso=null;
		foreach ($select as $k) {
			//print_r($k['grupo_curso']."<br/>");

			if((strcmp ($k['grupo_curso'] , $curso_valido ) == 0)){
				$id_curso=$k['id_curso'];
			}
		}
		//echo $id_curso."<br/>";
		return $id_curso;
	}

	public function obtener_curso_2()
	{
		$select = $this->orm->curso();
		//echo $curso_valido;
		$curso= array();
		$id = array();
		foreach ($select as $k) {
			//print_r($k['grupo_curso']."<br/>");
			array_push($id, $k['id_curso']);
			array_push($curso, $k['grupo_curso']);
		}
		array_push($id, -1);
		array_push($curso, "Profesores");
		$data = array('curso' => $curso, 'id' =>$id);

		return $data;
	}

	public function obtener_profesores()
	{
	    try{
			$usuario = $this->orm->usuarios("ref_tipo_usuario = ?", 2)->or("ref_tipo_usuario = ?", 4);
			$data=array();
			$data=array();
			foreach ($usuario as $k) {
				array_push($data, $k);
			}
			return $data;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function subir_profesores($arraydefilas)
	{
	    $numArray=0;
		$fallos = array();
		try{
			foreach ($arraydefilas as $fila) {
				$resultado=$fila;
				//var_dump($resultado);
				$departamento=$resultado[0];
				$nif_nie=$resultado[1];
				$nombre=mb_convert_case(mb_convert_case($resultado[2], MB_CASE_LOWER), MB_CASE_TITLE);
				$primer_apellido=mb_convert_case(mb_convert_case($resultado[3], MB_CASE_LOWER), MB_CASE_TITLE);
				$segundo_apellido=mb_convert_case(mb_convert_case($resultado[4], MB_CASE_LOWER), MB_CASE_TITLE);
				$tlf_sms=$resultado[5];
				$direccion=$resultado[6];
				$email=$resultado[7];
				$afiliacion=$resultado[8];
				//echo "hola";
				$id_curso = $this->obtener_curso($resultado[9]);
				if(!empty($id_curso))
				{
					$tipo_prof=4;
				}else{
					$tipo_prof=2;
				}
				$tutor=$id_curso;
				$password=password_hash($nif_nie, PASSWORD_DEFAULT);

				//aqui hay que cambiar la entrada a tutor porque tiene que ser un entero que apunte a un curso que se corresponda con el dado en el csv, hemos de compararlo (el dado por el csv y el existente en la base de datos) y cuando encontremos el que sea igual, extraer el id, para colocarlo ahi
                if(!$this->saber_si_existe_usuario($nif_nie))
                {
                    $insertar = $this->orm->usuarios();
				    $insertar->insert(array("departamento" => $departamento, "nif_nie" => $nif_nie, "nombre" => $nombre,"primer_apellido" => $primer_apellido, "segundo_apellido" => $segundo_apellido, "telefono_sms" => $tlf_sms, "direccion" => $direccion, "email" => $email, "numero_afiliacion" => $afiliacion, "ref_curso_tutor" => $tutor, "password" => $password, "ref_tipo_usuario" => $tipo_prof));
                }else{
                	$insertar->insert(array("departamento" => $departamento, "nombre" => $nombre,"primer_apellido" => $primer_apellido, "segundo_apellido" => $segundo_apellido, "telefono_sms" => $tlf_sms, "direccion" => $direccion, "email" => $email, "numero_afiliacion" => $afiliacion, "ref_curso_tutor" => $tutor, "password" => $password, "ref_tipo_usuario" => $tipo_prof));
                    array_push($fallos,$numArray);
                }
                $numArray++;
			}
		}catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function insertar_conexion_usuario($id)
    {
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=proyecto_final', 'root', '');
          	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          	$pdo->exec("SET NAMES 'utf8'");
          	$query = "INSERT INTO ultimos_usuarios (ref_id_usuario) VALUES (?)";
          	$consulta= $pdo->prepare($query);
          	$consulta->execute(array($id));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    
    
    public function actualizar_contra($idUser,$pass)
    {
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=proyecto_final', 'root', '');
          	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          	$pdo->exec("SET NAMES 'utf8'");
          	$query = "UPDATE usuarios SET password=? WHERE id_usuario=?";
          	$consulta= $pdo->prepare($query);
          	$consulta->execute(array($pass,$idUser));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

	public function comprobar_login_contraseña($login, $contraseña)
	{
		try{
			$select = $this->orm->usuarios();
			foreach ($select as $k) {
				
				$user=$k["nif_nie"];
				if($login==$user)
				{
					$pass=$k["password"];
					if(password_verify($contraseña,$pass))
					{
						return $k;
					}
				}
			}

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function mostrar_licencias($id_usuario)
	{
		try{
			
			$relacion = $this->orm->usuarios_clave("ref_id_usuario = ?", $id_usuario);
			//"ref_id_usuario = ?", $select["id_usuario"]
			
			$array1=array();
			
			foreach ($relacion as $k) {
				//echo $k["ref_id_clave"]."<br/>";
				$valor = $k["ref_id_clave"];
				$clave = $this->orm->claves("id_clave = ?", $valor)->fetch();
				//"id_clave = ?", $valor
				/*print_r($clave["clave"]);
				print_r($clave["nombre"]);*/
				array_push($array1, $clave["nombre"]);
				array_push($array1, $clave["clave"]);	
				array_push($array1, $clave["id_clave"]);
			}
			return $array1;
			
			
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function obtener_usuario($id_usuario)
	{
		try{
			$usuario = $this->orm->usuarios("id_usuario = ?", $id_usuario)->fetch();
			$data=array();
			foreach ($usuario as $k) {
				array_push($data, $k);
			}
			return $data;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function obtener_alumnos($curso)
	{
		try{
			$usuario = $this->orm->usuarios("nombre_curso = ?", $curso);
			$data=array();
			foreach ($usuario as $k) {
				array_push($data, $k);
			}
			return $data;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function obtener_licencias_volumen(){
		try{
			$licencias = $this->orm->claves("ref_tipo_clave = 2");
			$data = array();
			foreach ($licencias as $k) {
				array_push($data, $k["nombre"]);
				array_push($data, $k["clave"]);
			}
			return $data;
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function obtener_licencias_asociadas($arrayAlumnos){
		try{
			//Os voy a explicar la changada que voy a hacer aqui por culpa de "el notorm" si si, ese que supuestamente te simplifica la vida para no hacer una consulta enorme
			//Solo quiero sacar los nombres de los distintos sistemas, tan facil como en sql poner un Distinct, bien, pues en notorm no existe y para poder sacar los distintos voy a tener que sacar todos los nombres, hacer condicion con if y si ya existe guardarlo unicamente una vez
			//Gracias notorm, solo sirves para complicarme la vida y realentizar el codigo
			//PD: El NotOrm es una mierda

			$sistemas = $this->orm->claves('ref_tipo_clave = ?', 1);
			$arrayNombres = array();
			$arrayLicencias = array();
			foreach ($sistemas as $nombre) {
				if(!isset($arrayNombres[$nombre['nombre']]))
				{
					$arrayNombres[$nombre['nombre']]=0;
				}
			}

			foreach ($arrayAlumnos as $id) {
				$arrayNombresCopia = $arrayNombres;
				$id_alumno = $id['id_usuario'];
				$licencias = $this->orm->usuarios_clave("ref_id_usuario", $id_alumno);
				foreach ($licencias as $clave) {
					$clave_alumno = $clave['ref_id_clave'];
					$nombre = $this->orm->claves("id_clave = ?", $clave_alumno)->fetch();
					$arrayNombresCopia[$nombre['nombre']] = 1;
				}
				array_push($arrayLicencias, $arrayNombresCopia);
			}

			return $arrayLicencias;

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function obtener_ultimos_conectados()
	{
	    try{
	        $result = array();
	        $users = array();
	        $ultimos = $this->orm->ultimos_usuarios()->order("fecha_conexion DESC")->limit(5,0);
	        // aqui descansan las ganas de vivir de romel, el cual lleva 3 horas intentando comprobar que la consulta retorna cero.
	        if(!isset($ultimos[0]['ref_id_usuario']))
        	{
           		array_push($result,"no se ha conectado nunca ningun usuario");
        	}else{
        	    date_default_timezone_set('Atlantic/Canary');
	            foreach($ultimos as $r)
	            {
	                $nombres = $this->orm->usuarios()->where("id_usuario = ?",$r["ref_id_usuario"]);
	                $tiempo = " se conecto por ultima vez hace ";
	                $segundos = strtotime(date('Y-m-d H:i:s', time())) - strtotime($r["fecha_conexion"]);
	                $minutos = floor($segundos/60);
	                $segundos -= $minutos*60;
	                if($minutos>60)
	                {
	                    $horas =floor($minutos/60);
	                    $minutos -= $horas*60;
	                    if($horas>24)
	                    {
	                        $dias=floor($horas/24);

	                        $horas -= $dias*24;

	                        $tiempo .= "$dias dias, $horas horas, y $minutos minutos.";
	                    }else{
	                        $tiempo .= "$horas horas y $minutos minutos.";
	                    }
	                }else{
	                    $tiempo.= "$minutos minutos.";
	                }
	                
	                array_push($result,$nombres[0]["nombre"]." ".$nombres[0]["primer_apellido"].$tiempo);
	            }
	        }
			return $result;
	    }catch(Exception $e)
	    {
	        die($e->getMessage());
	    }
	    
	}

	public function obtener_mensajes_no_contestados()
	{
	    try{
	        $result = array();
	        $id_mensaje=array();
	        $autor=array();
	        $fecha=array();
	        $mensaje=array();
	        $ultimos = $this->orm->mensajes()->where("contestado = ?",0);
	        if(!isset($ultimos[0]["id_mensaje"]))
	        {
	           array_push($result,array("no tienes ningun mensaje pendiente"));
	        }else{
	            foreach ($ultimos as $r) {
			    	array_push($id_mensaje, $r["id_mensaje"]);
			    	array_push($autor, $r["autor"]);
			    	array_push($fecha, $r["fecha"]);
				    array_push($mensaje, $r["mensaje"]);
			    }
		    	array_push($result,$id_mensaje,$autor,$fecha,$mensaje);   
	        }
			return $result;
	    }catch(Exception $e)
	    {
	        die($e->getMessage());
	    }
	    
	}

	public function obtener_total_licencias()
	{
	    try{

	        $tiposDeClave=array();
	        foreach($this->orm->claves()->where("ref_tipo_clave = ?",1)->where("ref_id_relacion",null) as $cadaUno)
	        {
	            if(!isset($tiposDeClave[$cadaUno["nombre"]]))
	            {
	                $tiposDeClave[$cadaUno["nombre"]]=1;
	            }else{
	                $tiposDeClave[$cadaUno["nombre"]]=$tiposDeClave[$cadaUno["nombre"]]+1;
	            }
	        }
	        
			return $tiposDeClave;
	    }catch(Exception $e)
	    {
	        die($e->getMessage());
	    }
	    
	}

	function actualizar_integrante($arraydefilas)
	{
	    $numArray=0;
		$fallos = array();
		try{
		    if(isset($arraydefilas['profesor']))
		    {
		        try{
    		        foreach ($arraydefilas as $resultado) {
        				$departamento=$resultado[0];
        				$nif_nie=$resultado[1];
        				$nombre=$resultado[2];
        				$primer_apellido=$resultado[3];
        				$segundo_apellido=$resultado[4];
        				$afiliacion=$resultado[5];
        				$tlf_sms=$resultado[6];
        				
        				$email=$resultado[7];
        				$direccion=$resultado[8];
                            $actualizar = $this->orm->usuarios->where("id_usuario = ?", $resultado[9]);
        				    $actualizar->update(array("departamento" => $departamento, "nif_nie" => $nif_nie, "nombre" => $nombre,"primer_apellido" => $primer_apellido,"segundo_apellido" => $segundo_apellido, "telefono_sms" => $tlf_sms, "direccion" => $direccion, "email" => $email, "numero_afiliacion" => $afiliacion));
    			    }   
    		    }catch(Exception $e)
        		{
        			die($e->getMessage());
        		}
		    }else if(isset($arraydefilas['alumno'])){
		        try{
        			foreach ($arraydefilas as $resultado) {
        				$grupo_clase=$resultado[0];
        				$nlista=$resultado[1];
        				$nombre=$resultado[2];
        				$primer_apellido=$resultado[3];
        				$segundo_apellido=$resultado[4];
        				$cial=$resultado[5];
        				$expediente=$resultado[6];
        				$nif_nie=$resultado[7];
        				$telefono=$resultado[8];
        				$tlf_sms=$resultado[9];
        				$email=$resultado[10];
                        $actualizar = $this->orm->usuarios->where("id_usuario = ?", $resultado[11]);                      
        				$actualizar->update(array("nombre_curso" => $grupo_clase,"numero_lista" => $nlista,"nombre" => $nombre, "primer_apellido" => $primer_apellido,
        				"segundo_apellido" => $segundo_apellido, "cial" => $cial, "expediente" => $expediente, "nif_nie" => $nif_nie, "telefono" => $telefono, "telefono_sms" => $tlf_sms,
        				"email" => $email));    

        			}
        		}catch(Exception $e)
        		{
        			die($e->getMessage());
        		}
		    }
		}catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	function devolver_curso_tutor($id)
	{
	    $idCurso = $this->orm->usuarios->select("ref_curso_tutor")->where('id_usuario = ?', $id)->fetch();
	    $curso = $this->orm->curso->select("grupo_curso")->where('id_curso = ?', $idCurso['ref_curso_tutor'])->fetch();
	    return $curso['grupo_curso'];
	    
	}

	function correo_enviado($id)
	{
	    $actualizar = $this->orm->mensajes->where("id_mensaje = ?", $id);                      
        $actualizar->update(array("contestado" => 1));    
	}

	function obtener_usuario_contra($nif)
	{
		$user = $this->orm->usuarios->where("nif_nie = ?", $nif);
		$arrayDeVuelta=array();
		foreach ($user as $campos) {
			$arrayDeVuelta["id"]=$campos["id_usuario"];
			$arrayDeVuelta["email"]=$campos["email"];			
		}
		return $arrayDeVuelta;
	}


/*	public function Obtener($id)
	{
		try{

			$obtener = $this->orm->alumnos()->where('id',$id);

			//$stm = $this->pdo->prepare("SELECT * FROM alumnos where id = ?");
			//$stm->execute(array($id));
			//$r = $stm->Fetch(PDO::FETCH_OBJ);

			foreach ($obtener as $r) {
				$alm = new Alumno();

				$alm->__SET('id', $r['id']);
				$alm->__SET('nombre', $r['nombre']);
				$alm->__SET('apellidos', $r['apellidos']);
				$alm->__SET('telefono', $r['telefono']);
			}
			return $alm;

		} catch (Exception $e)
		{
			die($e->getMessage());
		}

	}


	public function Actualizar(Alumno $data)
	{
		try{
			//$stm = $this->pdo->prepare("UPDATE alumnos SET nombre = ?, apellidos = ?, telefono = ?  WHERE id = ?");
			//$stm->execute(array($data->__GET('nombre'),$data->__GET('apellidos'),$data->__GET('telefono'),$data->__GET('id')));
			$añadir = $this->orm->alumnos()->where('id',$data->__GET('id'));
			$añadir->update(array("nombre" => $data->__GET('nombre'), "apellidos" => $data->__GET('apellidos'), "telefono" => $data->__GET('telefono')));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
*/	
}