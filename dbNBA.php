<?php
/**
 * Permitir la conexion contra la base de datos NBA.
 */
class dbNBA
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="nba";

  //Conector
  private $conexion;

  //Propiedades para controlar errores
  private $error=false;

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
      }
  }

  //Funcion para saber si hay error en la conexion
  function hayError(){
    return $this->error;
  }

  //Funciones para la devolucion de resultados
  public function MostrarEquipos(){
    if($this->error==false){
      $equipo = $this->conexion->query("SELECT * FROM equipos");
      return $equipo;
    }else{
      return null;
    }
  }

  public function MostrarConfEste(){
    if($this->error==false){
      $confeste = $this->conexion->query("SELECT Nombre, Ciudad, Division FROM equipos WHERE Conferencia='East'");
      return $confeste;
    }else{
      return null;
    }
  }

  //en esta funcion añadimos la variable temporada para despues pasarle la temporada que queramos.
  public function MostrarTemporada($temporada){
    if($this->error==false){
      $temporada = $this->conexion->query("SELECT equipo_local, equipo_visitante, puntos_local, puntos_visitante FROM partidos WHERE temporada='" .$temporada ."'");
      return $temporada;
    }else{
      return null;
    }
  }

}


 ?>
