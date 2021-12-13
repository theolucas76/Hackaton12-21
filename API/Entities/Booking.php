<?php

class Booking {
	private int $id;
	private int $time;
	private int $id_micro;
	private int $id_user;
	
	
	public function __construct(){
		
		$this->setId(0);
		$this->setTime(0);
		$this->setIdUser(0);
		$this->setIdMicro(0);
	}
	
	/**
	 * @param int $id
	 */
	public function setId(int $id): void
	{
		$this->id = $id;
	}
	
	/**
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}
	
	/**
	 * @return int
	 */
	public function getIdMicro(): int
	{
		return $this->id_micro;
	}
	
	/**
	 * @return int
	 */
	public function getIdUser(): int
	{
		return $this->id_user;
	}
	
	/**
	 * @return int
	 */
	public function getTime(): int
	{
		return $this->time;
	}
	
	/**
	 * @param int $time
	 */
	public function setTime(int $time): void
	{
		$this->time = $time;
	}
	
	/**
	 * @param int $id_micro
	 */
	public function setIdMicro(int $id_micro): void
	{
		$this->id_micro = $id_micro;
	}
	
	/**
	 * @param int $id_user
	 */
	public function setIdUser(int $id_user): void
	{
		$this->id_user = $id_user;
	}
}
