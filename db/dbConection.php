<?php

class conectarBD {

  function conectar(){
    //$mysqli = new mysqli("92.205.10.134", "vdi6xdvubo3y", "1017155071Jr", "HSVP");
    $mysqli = new mysqli("localhost", "root", "", "hsvp");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }else{
      $mysqli->set_charset("utf8");
      return $mysqli;
    }
    //echo $mysqli->host_info . "\n";
    //$var_conexion = new mysqli($srvr, $usr, $psw, $db);
    //Mysqli_set_charset($var_conexion, 'utf8');
  }
}
  
?>