<?php

class Pasajero {
    private $nombre;
    private $apellido;
    private $nroDoc;
    private $numTel;
    private $numAsiento;
    private $numTicket;

    public function __construct($nombre, $apellido, $nroDoc, $numTel, $numAsiento, $numTicket) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->nroDoc = $nroDoc;
        $this->numTel = $numTel;
        $this->numAsiento = $numAsiento;
        $this->numTicket = $numTicket;
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
    
      public function getNroDoc(){
        return $this->nroDoc;
    }
    
    public function setNroDoc($nroDoc){
      $this->nroDoc = $nroDoc;
  }

      public function gettelefono() {
        return $this->numTel;
      }
    
      public function settelefono($numTel) {
        $this->numTel = $numTel;
      }

      public function getNumAsiento(){
        return $this->numAsiento;
      }
      public function setNumAsiento($numAsiento){
            $this->numAsiento = $numAsiento;
        }

      public function getNumTicket(){
        return $this->numTicket;
      }
      public function setNumTicket($numTicket){
      $this->numTicket = $numTicket;
      }


      public function darPorcentajeIncremento(){

        $porcentaje = 10; 
        
        return $porcentaje;
    }


    public function __toString(){

        return "\nNombre: " . $this->getNombre() . 
        "\nApellido: " . $this->getApellido() . 
        "\nNumero de documento: " . $this->getNroDoc() . 
        "\nNumero de telefono: " . $this->gettelefono() . 
        "\nNumero de Asiento: " . $this->getNumAsiento() . 
        "\nNummero de Ticket: " . $this->getNumTicket() .
        "\nPorcentaje de Incremento: " . $this->darPorcentajeIncremento() . "\n";
        
    }
    }
 
