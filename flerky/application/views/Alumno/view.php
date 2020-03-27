<!DOCTYPE html>
<html lang="en" dir="ltr">
<body background="<?php echo base_url(); ?>images/fondo10.png">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
	input {
		max-width: 500px;
	}
	</style>
  </head>
  <body>

  <div style="margin-left: 40px;">
		<font color="#545454" size="10" face="Century Gothic">
			<div style="margin: 30px 0px;">
				<a href="<?php echo base_url(); ?>alumnos">Return</a>
			</div>
		</font>
  <font color="#545454"size="9" face="Century Gothic">
  <h5 style="margin: 10px 0px;"><b> <big>User Information</big></b> </h5>
  </font>
 <font color="#545454"size="5" face="Century Gothic">
    <?php
    echo "ID: {$dato['id']}<br>";
    echo $dato["nombre"]."<br>";
    echo $dato["creditos"]."<br>";
    echo $dato["semestre"]."<br>";
    echo $dato["folio"]


   ?>
   </font>
   </div>
  </body>
</html>
