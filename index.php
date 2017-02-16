<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NBA</title>
  </head>
  <body>
    <table>
      <tr>
        <td><a href="confeste.php">Conferencia Este</a></td>
        <td><a href="">Conferencia Oeste.</a></td>
        <td><a href="temporada.php">Temporada 99/00.</a></td>
      </tr>
    </table>
    <h3>LISTADO DE TODOS LOS EQUIPOS.</h3>
    <table border="1px">
      <tr>
        <th>Nombre Equipo</th>
        <th>Ciudad</th>
        <th>Coferencia</th>
        <th>Division</th>
      </tr>
    <?php
      //incluimos la base de datos.
      include 'dbNBA.php';
      //creamos el objeto.
      $equipos=new dbNBA();
      //llamamos a la funcion y guardamos los datos en un objeto.
      $equipo=$equipos->MostrarEquipos();
      //convertimos el objeto en un array y sacamos los datos por pantalla.
      while ($fila=$equipo->fetch_assoc()) {
        echo "<tr><td>" .$fila["Nombre"] ."</td><td>" .$fila["Ciudad"] ."</td><td>" .$fila["Conferencia"] ."</td><td>" .$fila["Division"] ."</td></tr>";
      }
     ?>
     </table>
  </body>
</html>
