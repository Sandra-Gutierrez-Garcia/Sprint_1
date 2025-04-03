<?php


class S1_07_PHP_Ejercicio_1_Sandra   {


	public function __construct(private int $number){}

	public function isEven(): bool {
		return $this->number%2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}

}

?>
 