<?php
declare(strict_types=1);

 use PHPUnit\Framework\TestCase;
 require_once "Notas_Verificadas.php";


class Notas_Verificadas_Texting  extends TestCase  {


    public function   testPrimeraDivision():void {
        
        $notas= new Notas_Verificadas (70);
    
        $this->assertEquals ("Primera División", $notas->clasificaciones());
        
       
    }
    public function   testSegundaDivision ():void{
        $notas= new Notas_Verificadas (45);

        $this->assertEquals("Segunda División", $notas->clasificaciones());
        
       
    }
    public function  testTerceraDivision ():void{
   
        $notas= new Notas_Verificadas (33);

        $this->assertSame ("Tercera División", $notas->clasificaciones());
        
       
    }
    public function  testReprobado():void{
        $notas= new Notas_Verificadas (1);
        $this->assertSame( "estudiante reprobado", $notas->clasificaciones());
        
       
    }


}

?>

