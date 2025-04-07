<?php


class Verificacion_Numero   {


	public function __construct(private int $number){}

	public function isEven(): bool {
		return $this->number%2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}
	public function isNegative():bool {
		return $this->number < 0;
	}
	public function comparar():bool {
		return $this->number == 4;
	}

}

?>
 