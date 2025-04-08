

<?php


class Notas_Verificadas{

    public function __construct(private int $notas){}

    function obtenerClasificacion (): string{
        if ($this->notas<0||$this->notas>100){
            return "nota no valida";
        }
        
        else if($this->notas>=60 && $this->notas<=100){
            return "Primera División";
        }
        
        else if($this->notas>=45){
            return "Segunda División";
        }

        else if($this->notas>=33){
             return  "Tercera División";
        }

        else{
            return "estudiante reprobado";
        }
        
    }
    
    
}


?>

