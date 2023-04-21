<?php

class ResponsableV {
    private $numeroEmpleado;
    private $numeroLicencia;
    private $nombre;
    private $apellido;

    public function __construct($numeroEmpleado, $numeroLicencia, $nombre, $apellido) {
        $this->numeroEmpleado = $numeroEmpleado;
        $this->numeroLicencia = $numeroLicencia;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    public function getNombre() {
        return $this-> nombre;
      }
    
      public function setNombre($nombre) {
        $this->nombre = $nombre;
      }
    
      public function getApellido() {
        return $this->apellido;
      }
    
      public function setApellido($apellido) {
        $this->apellido = $apellido;
      }
    
      public function getnumeroEmpleado() {
        return $this->numeroEmpleado;
      }
    
      public function setnumeroEmpleado($numeroEmpleado) {
        $this->numeroEmpleado = $numeroEmpleado;
      }

      public function getnumeroLicencia() {
        return $this->numeroLicencia;
      }
    
      public function setnumeroLicencia($numeroLicencia) {
        $this->numeroLicencia = $numeroLicencia;
      }
}