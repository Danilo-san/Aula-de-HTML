<?php

class Pessoa {
	public $nome;
	public $idade;

	public function falar(){
		echo this->nome." de ".$idade." acabou de falar";
	}
}

$rodrigo = new Pessoa;
$rodrigo->nome = "Rodrigo santos de Oliveira";
$rodrigo->idade = 25;
$rodrigo->falar();
