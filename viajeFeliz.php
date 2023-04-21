<?php
include_once 'pasajero.php';
include_once 'responsableV.php';
class Viaje {
  private $codigoViaje;
  private $destino;
  private $cantMaxPasajeros;
  private $pasajeros;
  private $pasajero;
  private $responsable;

  public function __construct($codigoViaje, $destino, $cantMaxPasajeros, $responsable, $pasajero) {
    $this->codigoViaje = $codigoViaje;
    $this->destino = $destino;
    $this->cantMaxPasajeros = $cantMaxPasajeros;
    $this->pasajeros = array();
    $this->responsable = $responsable;
  }

  public function getPasajero() {
    return $this->pasajero;
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

  public function eliminarPasajero($numDoc) {
    
    foreach ($this->pasajeros as $key => $pasajero) {
        if ($pasajero->getnumDoc() == $numDoc) {
            
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

  
  
  
  
  
  
  
  
 


  public function __toString()
  {
    return "Codigo de viaje: " . $this->codigoViaje . "\n" . "Destino del viaje: " . $this->destino . "\n" . "Cantidad máxima de pasajeros: " . $this->cantMaxPasajeros . "\n";
  }

  
  public function mostrarPasajeros1() {

    

    $cadena = "   PASAJEROS \n";
    $pasajeros = $this->pasajeros;
    foreach($pasajeros as $index => $pasajero) {

      $cadena .= "\nPasajero " . ($index + 1)  .   

      "\n\nNombre: " . $pasajero->getNombre() . 

      "\nApellido: " . $pasajero->getApellido() .

      "\nNumero de documento: " . $pasajero->getnumDoc() .

      "\nNumero de telefono: " . $pasajero->gettelefono(). "\n";

    }
    return $cadena;
  }

  public function mostrarInfoViaje() {
    echo "codigo del viaje: " . $this->codigoViaje . "\n";
    echo "Destino: " . $this->destino . "\n";
    echo "Responsable: " . $this->responsable->nombre . " " . $this->responsable->apellido . "\n";
    echo "Pasajeros: " . count($this->pasajeros) . "\n";
}

public function agregarPasajero2($pasajero) {
  $numDoc = $pasajero->getnumDoc();
  if ($this->buscarPasajero($numDoc) !== null) {
    $cad = "El pasajero con número de documento $numDoc ya está registrado en el viaje." ;
} else {
  $this->pasajeros[] = $pasajero;
  $cad= "el pasajero fue agregado exitosamente";
}
return $cad;
}

public function buscarPasajero($numeroDocumento) {
  foreach ($this->pasajeros as $pasajero) {
      if ($pasajero->getnumDoc() === $numeroDocumento) {
           return $pasajero;
      }
  }
  return null;
}


public function modificarInformacionPasajero($numDoc, $nuevoNombre, $nuevoApellido, $nuevoTelefono, $nuevoDocumento) {
  foreach ($this->pasajeros as  $pasajero ) {
      if ($pasajero->getnumDoc() == $numDoc) {
          $pasajero->setNombre($nuevoNombre);
          $pasajero->setApellido($nuevoApellido);
          $pasajero->setTelefono($nuevoTelefono);
          $pasajero->setnumDoc($nuevoDocumento);
          echo "Se ha modificado la información del pasajero con éxito." ;
          return;
      }
      else {
          echo "No se encontró un pasajero con el número de documento especificado.";
      }
  }
}



public function modificarInformacionPasajero4($numDoc, $nuevoNombre, $nuevoApellido, $nuevoTelefono, $nuevoDocumento)  {
  $encontrado = false;
  foreach ($this->pasajeros as $index => $pasajero) {
      if ($pasajero->getnumDoc() == $numDoc) {
          $pasajero->setNombre($nuevoNombre);
          $pasajero->setApellido($nuevoApellido);
          $pasajero->settelefono($nuevoTelefono);
          $pasajero->setnumDoc($nuevoDocumento);
          $encontrado = true;
          echo "Se ha modificado la información del pasajero con éxito.";
          break;
      }
  }
  if (!$encontrado) {
      echo "No se encontró un pasajero con el número de documento especificado.";
  }
}
}