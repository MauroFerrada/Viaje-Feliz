<?php
include 'ViajeFeliz.php';
$pasajero = null; 
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
      $numeroEmpleado = readline("ingrese el numero del empleado:");
      $numeroLicencia = readline("ingrese el numero de licencia del empleado:");
      $nombre = readline("ingrese el nombre del empleado:");
      $apellido = readline("ingrese el apellido del empleado:");
      $responsable = new ResponsableV($numeroEmpleado,$numeroLicencia,$nombre,$apellido);


      $codigoViaje = readline("Ingrese el código del viaje: ");
      $destino = readline("Ingrese el destino del viaje: ");
      $cantMaxPasajeros = readline("Ingrese la cantidad máxima de pasajeros: ");

      $viaje = new Viaje($codigoViaje, $destino, $cantMaxPasajeros, $responsable, $pasajero);
      // Agregamos los pasajeros al viaje
      $cantidadPasajeros = readline("Ingrese la cantidad de pasajeros: ");
      for($i = 0; $i < $cantidadPasajeros; $i++) {
        $nombre = readline("Ingrese el nombre del pasajero $i: ");
        $apellido = readline("Ingrese el apellido del pasajero $i: ");
        $numDoc = readline("Ingrese el número de documento del pasajero $i: ");
        $numTel = readline("Ingrese el número de telefono del pasajero $i: ");
        $pasajero = new Pasajero($nombre, $apellido, $numDoc, $numTel);
        //$viaje = new Viaje($codigoViaje, $destino, $cantMaxPasajeros, $responsable, $pasajero);
        $viaje->agregarPasajero2($pasajero);
        }
       
    
      break;
    case 2:
      $subopcion = -1;

      while($subopcion != 7) {
        echo "Modificar información del viaje:\n";
        echo "1. Modificar código\n";
        echo "2. Modificar destino\n";
        echo "3. Modificar cantidad máxima de pasajeros\n";
        echo "4. Modificar datos de un pasajero\n";
        echo "5. Agregar pasajero\n";
        echo "6. Eliminar pasajero\n";
        echo "7. Salir\n\n";

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
                $numDoc = readline("Ingrese el numero de documento del pasajero que desea modificar: ");
                $nuevoNombre = readline("Ingrese el nuevo nombre: ");
                $nuevoApellido = readline("Ingrese el nuevo apellido: ");
                $numDocNuevo = readline("Ingrese el nuevo número de documento: ");
                $nuevoTelefono = readline("Ingrese el nuevo telefono: ");
                //$viaje->modificarPasajerox($indicePasajero, $nombre, $apellido, $numDoc);
                $viaje->modificarInformacionPasajero4($numDoc, $nuevoNombre, $nuevoApellido, $nuevoTelefono, $numDocNuevo);
                break;
                }else{
                  echo "debe haber ingresado un pasajero anteriormente \n";
                }
          case 5:
            
            echo "Ingrese el nombre del pasajero:";
            $nombre = trim(fgets(STDIN));
            echo "ingrese el apellido:";
            $apellido = trim(fgets(STDIN));
            echo "ingrese el numero de documento del pasajero:";
            $numDoc = trim(fgets(STDIN));
            echo "ingrese el numero de telefono del pasajero:";
            $numtel = trim(fgets(STDIN));
            $pasajero = new Pasajero($nombre, $apellido, $numDoc, $numTel);
        
            $pasajero = new Pasajero($nombre, $apellido, $numDoc, $numTel);
            $cad = $viaje -> agregarPasajero2($pasajero);
            echo "\n\n".$cad."\n\n";
            break;
          
      case 6:
            echo "Ingrese el numero de documento del pasajero que desea eliminar:";
            $numDoc = trim(fgets(STDIN));
            $viaje -> eliminarPasajero($numDoc);
            echo "Pasajero eliminado exitosamente\n\n";
            break;
          case 7:
            break;
          default:
            echo "Opción inválida\n";
            break;
          }
        }
      break;
    case 3:
      if ($codigoViaje != null) {
        $viaje->mostrarPasajeros1();
        echo $viaje;

        $pasaj = $viaje->mostrarPasajeros1();
        echo $pasaj;
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
