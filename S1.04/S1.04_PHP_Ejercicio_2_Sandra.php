<html>
    <head>
        <title>Ejercicio_1</title>
</head>

<?php

class Shape {
    private $ancho ;
    private $altura;

    //Contrustor 
    function __construct($ancho , $altura){
        $this->ancho  = $ancho ;
        $this->altura = $altura;
    }
    //getter para ancho  la informacion
    public function get_ancho () {
        return $this->ancho ;
    }
    public  function get_altura() {
        return $this->altura;
    }

    //seter para modificar
    public function set_ancho($ancho) {
        $this->ancho = $ancho;
    }
    public function set_altura($altura) {
        $this->altura = $altura;
    }

    }

    class Triangulo extends Shape{

    public  function calcularAria(){
        return (($this->get_ancho() * $this->get_altura())/2);
    }

    public function print(){
        return "La area del trigulo es " . $this->calcularAria();
    }

    }
    class Rectangle  extends Shape{

        public  function calcularAria(){
            return ($this->get_ancho() + $this->get_altura());
        }
    
        public function print(){
            return "La area del rectangle es " . $this->calcularAria();
        }
    
        }
    $nuevoTtingulo= new Triangulo(20,80);
    $nuevoRectangle= new Rectangle(50,80);

    echo $nuevoTtingulo-> print();
    echo "<br>" . $nuevoRectangle-> print();



?>
</html>