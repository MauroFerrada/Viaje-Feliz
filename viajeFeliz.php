<?php

class Viaje {
  private $codigoViaje;
  private $destino;
  private $cantMaxPasajeros;
  private $pasajeros;

  public function __construct($codigoViaje, $destino, $cantMaxPasajeros) {
    $this->codigoViaje = $codigoViaje;
    $this->destino = $destino;
    $this->cantMaxPasajeros = $cantMaxPasajeros;
    $this->pasajeros = array();
  }

  public function obtenercodigoViaje() {
    return $this->codigoViaje;
  }

  public function ponercodigoViaje($codigoViaje) {
    $this->codigoViaje = $codigoViaje;
  }

  public function obtenerDestino() {
    return $this->destino;
  }

  public function ponerDestino($destino) {
    $this->destino = $destino;
  }

  public function obtenerCantMaxPasajeros() {
    return $this->cantMaxPasajeros;
  }

  public function ponerCantMaxPasajeros($cantMaxPasajeros) {
    $this->cantMaxPasajeros = $cantMaxPasajeros;
  }

  public function obtenerPasajeros() {
    return $this->pasajeros;
  }

  public function agregarPasajero($nombre, $apellido, $numDoc) {
    $this->pasajeros[] = array(
      "nombre" => $nombre,
      "apellido" => $apellido,
      "numDoc" => $numDoc
    );
  }

  public function borrarPasajero($numDoc) {
    foreach ($this->pasajeros as $key => $value) {
      if ($value["numDoc"] == $numDoc) {
        unset($this->pasajeros[$key]);
        return true;
      }
    }
    return false;
  }


  
  
  public function modificarPasajerox($indice, $nombre, $apellido, $numDoc) {
    if($indice >= 0 && $indice < count($this->pasajeros)) {
      $pasajero = [
        'nombre' => $nombre,
        'apellido' => $apellido,
        'numDoc' => $numDoc
      ];
      $this->pasajeros[$indice] = $pasajero;
      return true;
    } else {
      return false;
    }
  }

  
  
  
  
  
  
  
  
 // public function mostrarDatos() {
   // echo "Código: " . $this->codigoViaje . "\n";
   // echo "Destino: " . $this->destino . "\n";
   // echo "Cantidad máxima de pasajeros: " . $this->cantMaxPasajeros . "\n";
    //echo "Pasajeros: \n";
   // $pasajeros = $this->pasajeros;
    //if(empty($pasajeros)) {
     //   echo "No hay pasajeros en el viaje<\n>";
     // } else {
      //  echo "\nPasajeros:\n";
      //  foreach($pasajeros as $index => $pasajero) {
       //   echo "Pasajero " . ($index + 1) . ":\n";
       //   echo "Nombre: " . $pasajero['nombre'] . "\n";
       //   echo "Apellido: " . $pasajero['apellido'] . "\n";
      //    echo "Número de documento: " . $pasajero['numDoc'] . "\n\n";
       // }
    //  }

    //foreach($this->pasajeros as $key => $value) {
     // echo "- " . $value["nombre"] . " " . $value["apellido"] . " (" . $value["numDoc"] . ")\n";
   // }
 // }


  public function __toString()
  {
    return "Codigo de viaje: " . $this->codigoViaje . "\n" . "Destino del viaje: " . $this->destino . "\n" . "Cantidad máxima de pasajeros: " . $this->cantMaxPasajeros . "\n";
  }

  public function mostrarPasajeros() {
    $pasajeros = $this->pasajeros;
    $cadena = "   PASAJEROS \n";
    foreach($pasajeros as $index => $pasajero) {
      $cadena .= "Pasajero " . ($index + 1) . "\n" . "Nombre: " . $pasajero['nombre'] . "\n" . "Apellido: " . $pasajero['apellido'] . "\n" . "Número de Documento: " . $pasajero['numDoc'] . "\n \n";
    }
    return $cadena;
  }

}