<?php
	class tramos
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
		public function listar_tramos()
		{
			//Función que devuelve en un array la lista de tramos con sus respectivos campos
			return $this->pdo->query("SELECT T.idTramo, T.Nombre as NombreTramo, T.Inicio, T.Fin, C.idCarretera, C.Nombre as NombreCarretera FROM carreteras as C join tramos as T on C.idCarretera = T.idCarretera ORDER BY idTramo");			
		}//listar_tramos()
		public function seleccionar_tramo($id)
		{
			//Función que devuelve un solo tramo con sus respectivos campos
			return $this->pdo->query("SELECT * FROM tramos WHERE idTramo=". $id);
		}//listar_tramos()
		public function agregar_tramo($nombre, $inicio, $fin, $idcarretera)
		{
			//Función que inserta un nuevo tramo en la tabla de tramos
			$sql = "INSERT INTO tramos(Nombre, Inicio, Fin, idCarretera) VALUES (:nombre, :inicio, :fin, :idcarretera); ";
			$query = $this->pdo->prepare($sql);
			$query->bindParam(":nombre", $nombre);
			$query->bindParam(":inicio", $inicio);
			$query->bindParam(":fin", $fin);
			$query->bindParam(":idcarretera", $idcarretera);			
			$query->execute();					
		}//agregar_tramo($nombre, $inicio, $fin, $idcarretera)
		public function borrar_tramo($id)
		{
			//Función que borra un tramo en específicod
			$sql = "DELETE FROM tramos WHERE idTramo = :id";
			$query = $this->pdo->prepare($sql);
			$query->bindParam(":id", $id);
			$query->execute();
		}//borrar_tramo($id)

		public function editar_tramo($id, $nombre, $inicio, $fin, $idcarretera)
		{
			//Funcion que edita un tramo
			$sql = "UPDATE tramos SET Nombre = :nombre, Inicio = :inicio, Fin = :fin, idCarretera = :idcarretera 
			WHERE idTramo = :id";
			$query = $this->pdo->prepare($sql);
			$query->bindParam(":nombre", $nombre);
			$query->bindParam(":inicio", $inicio);
			$query->bindParam(":fin", $fin);
			$query->bindParam(":idcarretera", $idcarretera);
			$query->bindParam(":id", $id);
			$query->execute();
		}//function editar_tramo($id, $nombre, $inicio, $fin, $idcarretera)
        public function verficar_existente($id, $nombre)
		{
			//Función que verifica que una id o un nombre de tramo ya se encuentre en uso
			$sql = "Select count(*) AS cantidad FROM tramos WHERE idTramo = :id OR Nombre = :nombre ";
			$query = $this->pdo->prepare($sql);			
			$query->bindParam(":id", $id);
			$query->bindParam(":nombre", $nombre);
			$query->execute();
			$resultado = $query->fetch();
			return $resultado['cantidad'];
		}//verficar_existente($id, $nombre)
	}
?>