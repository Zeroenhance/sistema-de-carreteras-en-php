<?php
	class tramos_comunidades
	{
		private $pdo;  //para construir cadena de conexion
		public function __construct()
		{	
			//Constructor de la clase

			//variables a usar para construir la conexión a la base de datos
			$dbHost = 'localhost';
			$dbName = 'carreteras';
			$dbUser = 'root';
			$dbPass = '';
			try 
			{
				$this->pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} 
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
		}		
		public function listar_tramos_comunidades()
		{
			//Función que devuelve la lista de todos los tramos y todas las comunidades
			return $this->pdo->query("SELECT T.idTramo, T.Nombre as NombreTramo, C.idCarretera, C.Nombre as NombreCarretera, CO.idComunidad, CO.Nombre as NombreComunidad FROM comunidades as CO 
				JOIN tramos_comunidades as TC on TC.idComunidad = CO.idComunidad 
				JOIN tramos as T on T.idTramo = TC.idTramo 
				JOIN carreteras as C on C.idCarretera = T.idCarretera ORDER BY T.idTramo");			
		}//listar_tramos_comunidades
		public function seleccionar_tramo_comunidad($idtramo, $idcomunidad)
		{
			//Función que devuelve una solo registro en la tabla tramos_comunidades
			return $this->pdo->query("SELECT T.Nombre as NombreTramo, TC.idTramo, C.Nombre as NombreComunidad, TC.idComunidad FROM tramos_comunidades as TC 
				JOIN tramos as T on T.idTramo = TC.idTramo 
				JOIN comunidades as C on C.idComunidad = TC.idComunidad
				WHERE TC.idTramo = ".$idtramo." AND TC.idComunidad = ".$idcomunidad);
		}//seleccionar_tramo_comunidad($idtramo, $idcomunidad)
		public function agregar_tramo_comunidades($idtramo, $idcomunidad)
		{		
			foreach ($idcomunidad as $idc)
			{
				//En este campo hacemos la inserción muchos a muchos con este ciclo				
				$sql = "INSERT INTO tramos_comunidades(idTramo, idComunidad) VALUES (:idtramo, :idcomunidad)";
				$query = $this->pdo->prepare($sql);							
				$query->bindParam(":idcomunidad", $idc);
				$query->bindParam(":idtramo", $idtramo);
				$query->execute();
			}//foreach
		}//agregar_tramo_comunidades($idtramo, $idcomunidad)
		public function agregar_tramo_comunidad($idtramo, $idcomunidad)
		{					
				$sql = "INSERT INTO tramos_comunidades(idTramo, idComunidad) VALUES (:idtramo, :idcomunidad)";
				$query = $this->pdo->prepare($sql);							
				$query->bindParam(":idcomunidad", $idcomunidad);
				$query->bindParam(":idtramo", $idtramo);
				$query->execute();			
		}//agregar_tramo_comunidad($idtramo, $idcomunidad)
		public function borrar_tramo_comunidad($idtramo, $idcomunidad)
		{
			//funcion que borra un registro de la tabla tramos_comunidades
			$sql = "DELETE FROM tramos_comunidades WHERE idTramo = :idtramo AND idComunidad = :idcomunidad";
			$query = $this->pdo->prepare($sql);
			$query->bindParam(":idcomunidad", $idcomunidad);
			$query->bindParam(":idtramo", $idtramo);
			$query->execute();
		}//borrar_tramo_comunidad($idtramo, $idcomunidad)
        public function verficar_existente($idtramo, $idcomunidad)
		{
			//funcion que verifica si existe algún registro en la tabla tramos_comunidades		
			$sql = "Select count(*) AS cantidad FROM tramos_comunidades WHERE idTramo = :idtramo AND idComunidad = :idcomunidad";
			$query = $this->pdo->prepare($sql);			
			$query = $this->pdo->prepare($sql);
			$query->bindParam(":idcomunidad", $idcomunidad);
			$query->bindParam(":idtramo", $idtramo);
			$query->execute();
			$resultado = $query->fetch();
			return $resultado['cantidad'];
		}//verficar_existente($idtramo, $idcomunidad)

	}
?>