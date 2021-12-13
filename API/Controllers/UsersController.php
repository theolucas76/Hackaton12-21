<?php

namespace ChronoMiam\Controllers;

use ChronoMiam\API\Databases\UsersInstance;

class UsersController {
	
	public function postAction( string $login, string $password ) : string {
	
		if( $login === null ){
			return 'Bad login';
		}
		if( $password === null ){
			return 'Bad password';
		}
		
		$myUser = new User();
		$myUser->setLogin($login);
		$myUser->setPassword($password);
		
		//go to BDD
	
	}
	
	public function getAction(int $id) : User {
	
			$myUser =
	
	}
	
	public function get( int $id ) {
		$pdo = $this->connector();
		$myStmt = $pdo->prepare("SELECT * FROM users WHERE id = '$id'");
		$myStmt->execute();
		return $myStmt->fetch();
	}
	
	
}
