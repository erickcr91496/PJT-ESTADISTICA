<?php

class Datos
{

    private $obtenerDatos;
      

    function getCadena($cadena ){
    
        $datos = explode(",", $cadena);
        return $datos; 
   }

    function ordenar($array)
   {
        $aux = null;
        for($i=0;$i<count($array)-1;$i++){
            for($j=$i+1;$j<count($array);$j++){
                if($array[$i] > $array[$j]){
                    $aux = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $aux;
                }
            } 
        } 
        return $array;

   }

   function valoresUnicos ($array)
   {
       $l = array();
        for ($i=0; $i < count($array) ; $i++) { 
            array_push($l, $array[$i]);
            
            for ($j=0; $j < count($l)-1; $j++) { 

                if ($l[count($l)-1] == $l[$j]) {
                    unset($l[count($l)-1]);
                    $l = array_values($l);
                    $j = $i;
                }
            
            }
        }
        return $l;
   }

   function rango ($array)
   {
       $aux = max($array) - min($array);
     
        return $aux;

   }
   function contar($array){

        $cont= count($array);
        return $cont;

   }
   
   function clases($array)
   {
       //$clases= 1+(3.33)*(floor(log($contar($array),10)));
       //$this->contar($array))
       $clases= 1+(3.33) * log10($this->contar($array));

        $valor = floor($clases);
       return  $valor;
   }

   function anchoClase($array)
   {
       $cj = ($this->rango($array))/($this->clases($array));
       return $cj;
   }

// NO UTILIZADAS TODAVIA/...........................
    public function getObtenerDatos()
    {
        return $this->$obtenerDatos;
    }

    public function setObtenerDatos($obtenerDatos)
    {
        $this->$obtenerDatos= $obtenerDatos;
    }
}



