<?php

class Carro{
	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){ 
		return $this->modelo;
	} // Método para pegar o valor da propriedade modelo
	public function setModelo($modelo){ 
		$this->modelo = $modelo;
	} // Setar o valor de modelo na propriedade modelo
	public function getMotor():float{
		return $this->motor;
	} // Método para pegar o valor da propriedade motor
	public function setMotor($motor){
		$this->motor = $motor;
	} // Setar o valor de modelo na propriedade motor
	public function getAno():int{
		return $this->ano;
	} // Método para pegar o valor da propriedade ano
	public function setAno($ano){
		$this->ano = $ano;
	} // Setar o valor de modelo na propriedade ano

	public function exibir(){
		return array(
			"modelo" => $this->getModelo(),
			"motor" => $this->getMotor(), 
			"ano" => $this->getAno()
		);
	} // fechando método exibir()

} // Fechando classe Carro


$fiesta = new Carro();
$fiesta->setModelo("Fiesta");
$fiesta->setMotor("1.6");
$fiesta->setAno("2004");

var_dump($fiesta->exibir()); // Fazendo print com o objeto fiesta usando o método exibir.