<?php
/**/
class pdf_model
{
	//Variables
	

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

}

