<?php

class Microwave {
	
	private int $id;
	private int $floors;
	
	public function __construct()
	{
		$this->setId(0);
		$this->setFloors(0);
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
	public function getFloors(): int
	{
		return $this->floors;
	}
	
	/**
	 * @param int $floors
	 */
	public function setFloors(int $floors): void
	{
		$this->floors = $floors;
	}
	
}
