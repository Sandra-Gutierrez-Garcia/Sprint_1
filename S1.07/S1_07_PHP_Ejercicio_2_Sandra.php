

<?php


class S1_07_PHP_Ejercicio_2_Sandra{

    public function __construct(private int $notas){}


   

    function clasificaciones (): string{
        if($this->notas>=60){
            return "Primera División";
        }else if($this->notas>=45){
            return "Segunda División";
        }else if($this->notas>=33){
             return  "Tercera División";
        }else{
            return  "estudiante reprobado";
        }
    }
    
    
    
}


?>

</html>