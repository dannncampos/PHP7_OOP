<?php

class Endereco{
	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($logradouro, $numero, $cidade){
		$this->logradouro = $logradouro;
		$this->numero = $numero;
		$this->cidade = $cidade;
	}
	public function __destruct(){
		// var_dump("Destruir");
	}
	public function __toString(){
		return $this->logradouro.", ".$this->numero." - ".$this->cidade;

	}
}

$bipbopEndereco = new Endereco("Av. Major Sylvio de Magalhães Padilha", "5200", "São Paulo".". ");
// print_r($bipbopEndereco);
// unset($bipbopEndereco);

echo $bipbopEndereco;