<!DOCTYPE html>
<html>
	<head>
		<title>Título do site</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>/assets/css/style.css">
	</head>
	<body>
		<h1> Topo</h1>

		<?php $this->loadViewInTemplate($viewName, $viewData); ?>


		<footer>rodapé</footer>
	</body>
</html>