<?php

namespace API\Controllers;

use API\Database\UsersInstance;
use API\Entities\User;
use function Sodium\add;

class UsersController {

	public function getAction( int $id ) {
		if( $id !== null ) {
			$myUser = new User();
			$myUser = (new \API\Database\UsersInstance)->get($id);
			return $myUser;
		}else{
			return 'pas bien';
		}
	}
	
	public function postAction( string $login, string $password ) {
		if( $login === null ) {
			return false;
		}
		if( $password === null ) {
			return false;
		}
		
		$myUser = new User();
		$myUser->setLogin($login);
		$myUser->setPassword($password);
		
		if( (new \API\Database\UsersInstance())->add($myUser) ){
			return $myUser;
		}
		return false;
	}

	
}
