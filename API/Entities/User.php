<?php


namespace API\Entities;

class User {
	
	
	private int $id;
	
	private string $login;
	
	private string $password;
	
	public function __construct(){
		$this->setId(0);
		$this->setLogin('');
		$this->setPassword();
	}
	
	
	/**
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}
	
	/**
	 * @return string
	 */
	public function getLogin(): string
	{
		return $this->login;
	}
	
	/**
	 * @return string
	 */
	public function getPassword(): string
	{
		return $this->password;
	}
	
	/**
	 * @param int $id
	 */
	public function setId(int $id): void
	{
		$this->id = $id;
	}
	
	/**
	 * @param string $login
	 */
	public function setLogin(string $login): void
	{
		$this->login = $login;
	}
	
	/**
	 * @param string $password
	 */
	public function setPassword(string $password): void
	{
		$this->password = $password;
	}
	
	
}
