<?php

class Pessoa {
	public $nome = "Daniel Campos";
	protected $idade = 28;
	private $senha = "123456";

	public function verDados(){
		echo $this->nome."<br>";
		echo $this->idade."<br>";
	}
}
 
$objeto = new Pessoa();
$objeto->verDados();