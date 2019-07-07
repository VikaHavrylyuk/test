<? include_once "function.php"; ?>

<html>
	<head>
		<title>Головна сторінка</title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
		
	</head>
	
	<body>

        <center>
            <a href="?page=math">Таблиця</a> | <a href="?page=home">Головна</a>
        </center>

        <? router('page') ?>
	</body>
</html>