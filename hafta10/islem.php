<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	require_once "baglan.php";
	if(isset($_POST['insert']))
	{
		$kaydet=$db->prepare("INSERT into bilgilerim set
		bilgilerim_ad=:bilgilerim_ad,
		bilgilerim_soyad=:bilgilerim_soyad,
		bilgilerim_mail=:bilgilerim_mail,
		bilgilerim_yas=:bilgilerim_yas");
		
		$insert=$kaydet->execute(array(
		'bilgilerim_ad' => $_POST['bilgilerim_ad'],
		'bilgilerim_soyad' => $_POST['bilgilerim_soyad'],
		'bilgilerim_mail' => $_POST['bilgilerim_mail'],
		'bilgilerim_yas' => $_POST['bilgilerim_yas']
		));
		
		if($insert)
		{
			echo "Kayıt Başarılı";
			header("location:index.php?durum=ok");
			exit;
		}
		else{
			echo "Kayıt Başarısız";
			header("location:index.php?durum=no");
			exit;
		}
	}
	
	?>
</body>
</html>