<?php
//Incluímos el archivo de la clase persona y la aregamos como padre de la clase Alumno.  
include_once('class-persona.php');
class Alumno extends Persona{
    private $cuenta;
    private $promedio;

    //Pasamos por parámetro todos los datos necesarios para la consturcción del objeto Alumno, entre ellos los parámetros heredados de persona.  
    public function __construct($nombre, $apellido, $edad, $genero, $carrera, $cuenta, $promedio){
       
        //Para inicializar correctamente nuestra clase Alumno, también debemos llamar al constructor de la clase padre con sus parámetros.
        parent::__construct($nombre, $apellido, $edad, $genero, $carrera);
        $this->cuenta = $cuenta; 
        $this->promedio = $promedio; 
    }

    public function cancelarCarrera(){
        echo "Se ha cancelado la Carrera del alumno $this->nombre";
    } 
    public function cambiarCarrera(){}

    public function reprobar(){
        echo "Reprobar Alumno";
    }
    public function aprobar(){
        echo "Aprobar Alumno";
    }


    #Sobre escritura de métodos ----
    //Si tenemos un método con el mismo nombre de un método de su padre, tomará prioridad el método del hijo. 
    //Si queremos llamar igualmente el método del padre debemos usar parent::matricular();
    public function matricular(){
        echo "Se ha matriculado alumno";
    }
    

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