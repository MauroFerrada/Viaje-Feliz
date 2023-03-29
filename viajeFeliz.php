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

  public function modificarPasajero($numDoc, $nombre = null, $apellido = null) {
    foreach ($this->pasajeros as $key => $value) {
      if ($value["numDoc"] == $numDoc) {
        if ($nombre != null) {
          $this->pasajeros[$key]["nombre"] = $nombre;
        }
        if ($apellido != null) {
          $this->pasajeros[$key]["apellido"] = $apellido;
        }
        return true;
      }
    }
    return false;
  }
}