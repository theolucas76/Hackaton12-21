<?php

namespace API\Database;

use API\Entities\User;
use PDOStatement;
use PDO;
class UsersInstance extends AbstractInstance {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get( int $id ) {
		
		$pdo = $this->connector();
		$myStmt = $pdo->prepare( 'SELECT * FROM users WHERE id = :id' );
		$myStmt->execute();
		return $myStmt->fetch();
	}
	
	public function add(User $user) {
		
		$pdo = $this->connector();
		$myStmt = $pdo->prepare( 'INSERT INTO users (login, password) VALUES (:login, :password)' );
		
		$myStmt->bindValue( ':login', $user->getLogin() );
		$myStmt->bindValue( 'password', $user->getPassword());
		
		if( $myStmt->execute() ){
			$user->setId( $pdo->lastInsertId() );
			return true;
		}
		return false;
	}
	
}
