<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Prueba para Grability</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-primary text-center">
				Prueba Cube Summation por Ernesto Soto
			</h3>
			<br/>
			<form action="result.php" method="POST">
			<div class="row">
				<div class="col-md-12" >
					<textarea id="entrada" name="entrada" style="width:50%; height:300px; margin: 0 auto; display:block;"></textarea>
				</div>
			</div> 
			<br/>
			<div style="margin: 0 auto; text-align:center">
				<button type="submit" class="btn btn-success btn-lg">
					Ejecutar
				</button> 
				<button type="button" class="btn btn-lg btn-danger" onclick="cleanText();">
					Limpiar
				</button>
			</div>
			</form>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		function cleanText(){
			document.getElementById('entrada').value = "";
			document.getElementById('entrada').innerHTML = "";
		}
	</script>
  </body>
</html>