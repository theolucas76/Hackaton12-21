<?php
namespace API\Database;

use PDO;

class AbstractInstance
{
	
	private ?PDO $pdo;
	
	public function __construct()
	{
		$this->pdo = null;
	}
	
	public function connector(): PDO
	{
		
		$this->pdo = new PDO('mysql:host=' . getenv('MARIADB_ADDR') . ';port='
			. getenv('MARIADB_PORT') . ';dbname=' . getenv('MARIADB_DB_NAME'),
			getenv('MARIADB_USER'), getenv('MARIADB_PASS'));
		
		return $this->pdo;
	}
	
}
