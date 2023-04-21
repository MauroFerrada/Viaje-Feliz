<?php

class Pasajero {
    private $nombre;
    private $apellido;
    private $numDoc;
    private $numTel;

    public function __construct($nombre, $apellido, $numDoc, $numTel) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numDoc = $numDoc;
        $this->numTel = $numTel;
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
    
      public function getnumDoc() {
        return $this->numDoc;
      }
    
      public function setnumDoc($numDoc) {
        $this->numDoc = $numDoc;
      }

      public function gettelefono() {
        return $this->numTel;
      }
    
      public function settelefono($numTel) {
        $this->numTel = $numTel;
      }
    }
 
