<!DOCTYPE html>
<html lang="en" dir="ltr">
<body background="<?php echo base_url(); ?>images/fondo12.png">
  <head>
    <meta charset="utf-8">
    <title>Alumnos index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
  <center>
  <font color="#545454"size="10" face="Century Gothic">
    <h1>Subjets Information</h1>
    </font>
    </center>
    <center>
  <font color="#545454"size="5" face="Century Gothic">
  <a href="alumnos/insert"class="btn btn-primary btn-lg">Add new student</a>
  <br><br>
  <div style = "max-width: 1200px;">
  <table style="background: white;" border="1px" class="table">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Credits</th>
      <th>Semester</th>
      <th>Folio</th>
      <th>Options</th>
    </tr>
    <?php
      foreach ($datos as $alumno ) {
        echo "<tr>";
         echo "<td>".$alumno->id."</td> <td>".$alumno->nombre. "</td><td>".$alumno->creditos. "</td><td>".$alumno->semestre."</td><td>".$alumno->folio."</td><td> <a href='alumnos/view/".$alumno->id."' >View</a> <a href='alumnos/delete/".$alumno->id."'>Delete</a> <a href='alumnos/edit/".$alumno->id."'>Edit</a> </td>";
         //echo "<td>".$alumno->id."</td> <td>".$alumno->nombre. "</td> <td>".$alumno->matricula."</td><td> <a href='view/".$alumno->id."' >Ver</a> <a href='delete/".$alumno->id."'>Eliminar</a> <a href='update/".$alumno->id."'>Editar</a> </td>";
         echo "</tr>";
      }
     ?>
   </table>
   </div>
   </font>
    </center>
  </body>
</html>
