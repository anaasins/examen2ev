<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Temporadas.</title>
  </head>
  <body>
    <table>
      <tr>
        <td><a href="index.php">Inicio.</a></td>
        <td><a href="">Conferencia Oeste.</a></td>
        <td><a href="confeste.php">Conferencia Este.</a></td>
      </tr>
    </table>
    <h3>LISTADO DE PARTIDOS TEMPORADA 99/00.</h3>
    <table border="1px">
      <tr>
        <th>Equipo local</th>
        <th>Equipo visitante</th>
        <th>Puntos local</th>
        <th>Puntos visitante</th>
      </tr>
    <?php
      //incluimos la base de datos.
      include 'dbNBA.php';
      //creamos el objeto.
      $temporada=new dbNBA();
      //llamamos a la funcion y guardamos los datos en un objeto.
      //al llamar a la funcion le pasamos la temporada que queramos que saque. 
      $partido=$temporada->MostrarTemporada("99/00");
      //convertimos el objeto en un array y sacamos los datos por pantalla.
      while ($fila=$partido->fetch_assoc()) {
        echo "<tr><td>" .$fila["equipo_local"] ."</td><td>" .$fila["equipo_visitante"] ."</td><td>" .$fila["puntos_local"] ."</td><td>" .$fila["puntos_visitante"] ."</td></tr>";
      }
     ?>
     </table>
  </body>
</html>
