<?php

class Datos
{

    private $obtenerDatos;
   
    public function getObtenerDatos()
    {
        return $this->$obtenerDatos;
    }

    public function setObtenerDatos($obtenerDatos)
    {
        $this->$obtenerDatos= $obtenerDatos;
    }
}



