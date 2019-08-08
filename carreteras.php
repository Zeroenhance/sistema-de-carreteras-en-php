<?php
	class carreteras
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
		public function listar_carreteras()
		{
			//Función que devuelve en un array todas las carreteras junto con sus campos
			return $this->pdo->query("SELECT * FROM carreteras");			
		}//listar_carreteras()
		public function seleccionar_carretera($id)
		{
			//Función que devuelve una sola carrectera junto con sus campos
			return $this->pdo->query("SELECT * FROM carreteras WHERE idCarretera=". $id);
		}//seleccionar_carretera($id)
		public function agregar_carretera($nombre,$categoria)
		{
			//Función que agrega una carretera nueva a la tabla de carreteras
			$sql = "INSERT INTO carreteras(Nombre,Categoria) VALUES (:nombre,:categoria)";
			$query = $this->pdo->prepare($sql);
			$query->bindParam(":nombre", $nombre);
			$query->bindParam(":categoria", $categoria);			
			$query->execute();
		}//agregar_carretera($nombre,$categoria)
		public function borrar_carretera($id)
		{
			//Función que borra una carretera de la tabla carreteras
			$sql = "DELETE FROM carreteras WHERE idCarretera = :id";
			$query = $this->pdo->prepare($sql);
			$query->bindParam(":id", $id);
			$query->execute();
		}//function borrar_carretera($id)
		public function editar_carretera($id, $nombre, $categoria)
		{
			//Funcion que edita una carretera 
			$sql = "UPDATE carreteras SET Nombre = :nombre, Categoria = :categoria WHERE idCarretera = :id";
			$query = $this->pdo->prepare($sql);
			$query->bindParam(":nombre", $nombre);
			$query->bindParam(":categoria", $categoria);			
			$query->bindParam(":id", $id);
			$query->execute();
		}//editar_carretera($id, $nombre, $categoria)
        public function verficar_existente($nombre, $categoria)
		{
			//Funcion que verifica si existe una carretera basándose en el nombre y la categoria
			$sql = "Select count(*) AS cantidad FROM carreteras WHERE Nombre = :nombre and Categoria = :categoria";
			$query = $this->pdo->prepare($sql);			
			$query->bindParam(":nombre", $nombre);
			$query->bindParam(":categoria", $categoria);						
			$query->execute();
			$resultado = $query->fetch();
			return $resultado['cantidad'];
		}//verficar_existente($nombre, $categoria)
		public function listar_carreteras_tramo()
		{
			//Función que devuelve la lista de todas las carreteras que sean del tipo autopista o carretera 
			return $this->pdo->query("SELECT C.idCarretera, C.Nombre FROM carreteras as C WHERE Categoria = 'Autopista' or Categoria = 'Carretera'");			
		}//listar_carreteras_tramo()
	}
?>