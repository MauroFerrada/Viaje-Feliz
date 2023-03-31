<?php
include 'ViajeFeliz.php';

$codigoViaje = null;
echo "Viaje Feliz\n\n\n\n";

$opcion = -1;

while($opcion != 4) {
  echo "Menú:\n";
  echo "1. Cargar información del viaje\n";
  echo "2. Modificar información del viaje\n";
  echo "3. Ver información del viaje\n";
  echo "4. Salir\n";

  $opcion = readline("Seleccione una opción: ");

  switch($opcion) {
    case 1:
        $codigoViaje = readline("Ingrese el código del viaje: ");
      $destino = readline("Ingrese el destino del viaje: ");
      $cantMaxPasajeros = readline("Ingrese la cantidad máxima de pasajeros: ");

      $viaje = new Viaje($codigoViaje, $destino, $cantMaxPasajeros);
      // Agregamos los pasajeros al viaje
      $cantidadPasajeros = readline("Ingrese la cantidad de pasajeros: ");
      for($i = 0; $i < $cantidadPasajeros; $i++) {
        $nombre = readline("Ingrese el nombre del pasajero $i: ");
        $apellido = readline("Ingrese el apellido del pasajero $i: ");
        $numDoc = readline("Ingrese el número de documento del pasajero $i: ");

        $viaje->agregarPasajero($nombre, $apellido, $numDoc);
      }
      
      break;
    case 2:
      $subopcion = -1;

      while($subopcion != 5) {
        echo "Modificar información del viaje:\n";
        echo "1. Modificar código\n";
        echo "2. Modificar destino\n";
        echo "3. Modificar cantidad máxima de pasajeros\n";
        echo "4. Modificar datos de un pasajero\n";
        echo "5. Salir\n\n";

        $subopcion = readline("Seleccione una opción: ");

        
        switch($subopcion) {
          case 1:
            if ($codigoViaje != null) {
              $codigoViaje = readline("Ingrese el nuevo código: ");
            $viaje->ponerCodigoViaje($codigoViaje);
            }else{
              echo "Debe haber ingresado un codigo anteriormente \n";
            }
            break;
          case 2:
            if ($codigoViaje != null){
            $destino = readline("Ingrese el nuevo destino: ");
            $viaje->ponerDestino($destino);
            }else{
              echo "Debe haber ingresado un destino anteriormente \n";
            }
            break;
          case 3:
            if ($codigoViaje != null){
            $maxPasajeros = readline("Ingrese la nueva cantidad máxima de pasajeros: ");
            $viaje->ponerCantMaxPasajeros($maxPasajeros);
            }else{
              echo "Debe haber ingresado una cantidad maxima de pasajeros anteriormente \n";
            }
            break;
            case 4:
                if ($codigoViaje != null){
                  $indicePasajero = readline("Ingrese el indice del pasajero que desea modificar: ");
                $nombre = readline("Ingrese el nuevo nombre: ");
                $apellido = readline("Ingrese el nuevo apellido: ");
                $numDoc = readline("Ingrese el nuevo número de documento: ");
                $viaje->modificarPasajerox($indicePasajero, $nombre, $apellido, $numDoc);
                break;
                }else{
                  echo "debe haber ingresado un pasajero anteriormente \n";
                }
          case 5:
            break;
          default:
            echo "Opción inválida\n";
            break;
        }
      }
      break;
    case 3:
      if ($codigoViaje != null) {
        $viaje->mostrarDatos();
        break;
      }else{
        echo "Debe haber ingresado un viaje anteriormente \n";
      }
      break;
    case 4:
    
      echo "Saliendo...\n";
      break;
    default:
      echo "Opción inválida\n";
      break;
  }
}

