<?php
	class comunidades
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
		public function listar_comunidades()
		{
			//Función que devuelve en un array la lista de comunidades con sus respectivos campos
			return $this->pdo->query("SELECT * FROM comunidades");			
		}//listar_comunidades()
		public function seleccionar_comunidad($id)
		{
			//Función que devuelve una sola comunidad con sus respectivos campos
			return $this->pdo->query("SELECT * FROM comunidades WHERE idComunidad=". $id);
		}//seleccionar_comunidad($id)        
		public function agregar_comunidad($nombre,$entidad)
		{
			//Función que inserta una nueva comunidad en la tabla de comunidades
			$sql = "INSERT INTO comunidades(Nombre,Entidad) VALUES (:nombre,:entidad)";
			$query = $this->pdo->prepare($sql);
			$query->bindParam(":nombre", $nombre);
			$query->bindParam(":entidad", $entidad);			
			$query->execute();
		}// agregar_comunidad($nombre,$entidad)
		public function borrar_comunidad($id)
		{
			//Función que borra una sola comunidad de la tabla de comunidades
			$sql = "DELETE FROM comunidades WHERE idComunidad = :id";
			$query = $this->pdo->prepare($sql);
			$query->bindParam(":id", $id);
			$query->execute();
		}//borrar_comunidad($id)
		public function editar_comunidad($id, $nombre, $entidad)
		{
			//Función que edita una sola comunidad de la tabla de comunidades
			$sql = "UPDATE comunidades SET Nombre = :nombre, Entidad = :entidad WHERE idComunidad = :id";
			$query = $this->pdo->prepare($sql);
			$query->bindParam(":nombre", $nombre);
			$query->bindParam(":entidad", $entidad);			
			$query->bindParam(":id", $id);
			$query->execute();
		}//editar_comunidad($id, $nombre, $entidad)
        public function verficar_existente($nombre, $entidad)
		{
			//Función que verifica si la comunidad ya existe basándose en el nombre o la entidad
			$sql = "Select count(*) AS cantidad FROM comunidades WHERE Nombre = :nombre and Entidad = :entidad";
			$query = $this->pdo->prepare($sql);			
			$query->bindParam(":nombre", $nombre);
			$query->bindParam(":entidad", $entidad);						
			$query->execute();
			$resultado = $query->fetch();
			return $resultado['cantidad'];
		}//verficar_existente($nombre, $entidad)
	}
?>