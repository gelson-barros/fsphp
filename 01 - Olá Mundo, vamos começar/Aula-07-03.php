<?php
//Padrao basico de codificacao 
//Classes PHP

/*
Cada classe deve estar em seu proprio arquivo e 
ter pelo menos um nivel de namespace(padrao PSR-4).
O nome da classe deve ser declarada em Studlycaps

/Constantes da classe devem ser declaradas em maiusculas e quando preciso podem ser separadas por under_score.

/Propriedades da classe podem ser escritas em $StudlyCaps, $CamelCase ou $under_score, nao existe uma recomendação rigida para elas, mas é sempre importante escolher uma e uasr sempre a mesma. Se for $camelCase, use sempre $camelCase e nunca as outras.

/Métodos da Classe devem ser declarados sempre em camelCase()

*/


namespace Source;
class MyClass{
	const COURSE = "FSPHP"; 
	const CLASS_NAME = "PSR-1";

	public $ModuloName; // Apenas $StudlyCaps
	public $className // Ou apenas $camelCase
	public $class_time // ou apenas $under_score
	public function getClassName(){
		return $this->className;
	}
	public function getClassTime(){
		//erro pois ja usamos $camelCase acima.
		return $this->class_time;
	}
}
?>