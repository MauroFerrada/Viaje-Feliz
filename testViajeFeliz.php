<?php
include 'ViajeFeliz.php';


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
    