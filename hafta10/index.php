<!doctype html>
<?php
	require_once "baglan.php";
?>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<form id="form1" name="form1" method="post" action="islem.php"><table width="300" border="1">
  <tbody>
    <tr>
      <td>&nbsp;Adınız</td>
      <td><label for="textfield">:</label>
      <input type="text" name="bilgilerim_ad" id="textfield"></td>
    </tr>
    <tr>
      <td>&nbsp;Soyadınız</td>
      <td><label for="textfield2">:</label>
      <input type="text" name="bilgilerim_soyad" id="textfield2"></td>
    </tr>
    <tr>
      <td>&nbsp;Mail</td>
      <td><label for="textfield3">:</label>
      <input type="text" name="bilgilerim_mail" id="textfield3"></td>
    </tr>
    <tr>
      <td>&nbsp;Yaş</td>
      <td><label for="textfield4">:</label>
      <input type="text" name="bilgilerim_yas" id="textfield4"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="insert" value="Gönder"></td>
      
    </tr>
  </tbody>
</table>
</form>
	
	<h4>Kayıtların Listelenmesi</h4>
	<br><br><hr>
	<table style="width: 60%" border="1">
	<tr>
		
		<th>ID</th>
		<th>AD</th>
		<th>SOYAD</th>
		<th>MAİL</th>
		<th>YAŞ</th>
		<th>İŞLEMLER</th>
	</tr>
	
		<?php
		$bilgilerimsor=$db->prepare("SELECT * from bilgilerim");
		$bilgilerimsor->execute();
		
		while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)){?>
			<tr>
					<td><?php echo $bilgilerimcek['bilgilerim_id']?></td>
					<td><?php echo $bilgilerimcek['bilgilerim_ad']?></td>
					<td><?php echo $bilgilerimcek['bilgilerim_soyad']?></td>
					<td><?php echo $bilgilerimcek['bilgilerim_mail']?></td>
					<td><?php echo $bilgilerimcek['bilgilerim_yas']?></td>
					
					<td align="center"><a href=""><button>Sil</button></td></a>
			</tr>
			
		<?php }?>
	
	</table>
	
</body>
</html>
