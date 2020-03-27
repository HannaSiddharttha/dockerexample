<!DOCTYPE html>
<html lang="en" dir="ltr">
<body background="<?php echo base_url(); ?>images/fondo11.png">
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


  <font color="#545454"size="7" face="Century Gothic">
  <form action="../update" method="POST" enctype="multipart/form-data">
				<span>Complete the Form</span>
				<input type="hidden" id="id" name="id" value="<?=$dato['id']?>">
				<div style="margin: 30px 0px;">
					<span>Name</span>
					<input type="text" class="form-control ds-input" id="nombre" name="nombre" value="<?php echo $dato['nombre'] ?>">
				</div>
				<div style="margin: 30px 0px;">
					<span>Credits</span>
					<input type="text" class="form-control ds-input" id="apellidos" name="apellidos" value="<?php echo $dato['apellidos'] ?>">
				</div>
				<div style="margin: 30px 0px;">
					<span>Semester</span>
					<input type="text" class="form-control ds-input" id="matricula" name="matricula" value="<?php echo $dato['matricula'] ?>">
				</div>
				<div style="margin: 30px 0px;">
					<span>Folio</span>
					<input type="text" class="form-control ds-input" id="matricula" name="matricula" value="<?php echo $dato['matricula'] ?>">
				</div>
				<div style="margin: 30px 0px;">
					<button class="btn btn-primary btn-lg">Edit</button>
				</div>
	</form>
	</font>

</body>

</html>
