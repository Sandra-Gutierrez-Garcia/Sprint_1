<html>
    <head>
        <title>Ejercicio_1</title>
</head>

<?php

class Employee{
    private $name;
    private $balance;

    //Contrustor 
    function __construct($name, $balance){
        $this->name = $name;
        $this->balance = $balance;
    }
    //getter para aceder la informacion
    public function get_name() {
        return $this->name;
    }
    public  function get_balance() {
        return $this->balance;
    }

    //seter para modificar
    public function set_name($name) {
        $this->name = $name;
    }
    public function set_balance($balance) {
        $this->balance = $balance;
    }

    //metodos propios
    public function calcularImpost(){
        
        if($this->balance>6000){
            return  "  debe pagar impuestos ";
        }else{
            return " no debe pagar impuestos";
        }
    }

    public function print(){
        return " El empleado" . $this->name . " tiene un sueldo de, " . $this->balance .$this->calcularImpost();
    }

    }
    //creo los employes 
 $nuevoEmploye1= new Employee("Paco", 800);
 $nuevoEmploye2= new Employee("Marco", 9000);

 //Imprimemos el nombre del usuario y el si deje pagar inpuestos 
 echo "<br>" . $nuevoEmploye1->print()
 . "<br>" . $nuevoEmploye2->print();


?>
</html>