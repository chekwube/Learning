<?php

Class QueryBuilder{
	public $pdo;

	public function __construct($pdo){
		$this->pdo= $pdo;
	}

	public function selectAll($table){
		$prepare = $this->pdo->prepare("select * from {$table}");

		$prepare->execute();

		return $prepare->fetchAll(PDO::FETCH_CLASS);
	}	
}