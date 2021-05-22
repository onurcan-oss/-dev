<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	try
	{
	$db=new PDO("mysql:host=localhost;dbname=yonetim;charset=utf8",'root','');
		//echo "Veritabanı bağlantısı başarılı";
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	?>
</body>
</html>