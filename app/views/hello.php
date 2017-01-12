<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Montana Fenwick Imp</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container" style="min-height: 100%; height:auto !important; height: 100%;">
		<div class="block text-justify">
			<h1 class="text-center">Cube summation</h1>
			<p class="lead">Este es el "Hello wrold" usando un entorno web para la interacción del usuario y un programa en c++ para solucionar el Problema Cube Summation</p>
		</div>
		<div class"container">
			<div class="row">
				<div class="col-sm-6">
					<form action="process" method="POST">
						<div class="form-group">
							<label for="exampleTextarea">Insert your test case:</label>
							<textarea name="test_case" class="form-control" id="exampleTextarea" rows="20" placeholder="Insert your test cases here..."></textarea>
							<button type="submit" class="btn btn-primary m-t-m">Enviar</button>
						</div>
					</form>
				</div>
				<div class="col-sm-6">
					<p class="lead"><?php echo $result; ?></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
