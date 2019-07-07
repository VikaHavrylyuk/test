<? include_once "function.php"; ?>

<html>
	<head>
		<title>Головна сторінка</title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
		
	</head>
	
	<body>
		<ul class="nav nav-tabs">
			<li><a href="?page=home">Головна</a><li>
			<li><a href="?page=math">Таблиця</a></li>
			<li><a href="?page=calc">Калькулятор</a></li>
		</ul>

        <? router('page') ?>
	</body>
</html>