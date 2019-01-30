<?php

class Datos
{

    private $obtenerDatos;
   
   
    

    function getCadena($cadena ){
    
        $datos = explode(",", $cadena);
        return $datos; 
   }




    public function getObtenerDatos()
    {
        return $this->$obtenerDatos;
    }

    public function setObtenerDatos($obtenerDatos)
    {
        $this->$obtenerDatos= $obtenerDatos;
    }
}



