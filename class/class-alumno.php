<?php
class Alumno{
    private $cuenta;
    private $promedio;

    public function __constructor($cuenta, $promedio){
        $this->cuenta = $cuenta; 
        $this->promedio = $promedio; 
    }

    public function cancelarCarrera(){} 
    public function cambiarCarrera(){}
    

    /**
     * Get the value of cuenta
     */ 
    public function getCuenta()
    {
        return $this->cuenta;
    }

    /**
     * Set the value of cuenta
     *
     * @return  self
     */ 
    public function setCuenta($cuenta)
    {
        $this->cuenta = $cuenta;

        return $this;
    }

    /**
     * Get the value of promedio
     */ 
    public function getPromedio()
    {
        return $this->promedio;
    }

    /**
     * Set the value of promedio
     *
     * @return  self
     */ 
    public function setPromedio($promedio)
    {
        $this->promedio = $promedio;

        return $this;
    }
}


?>