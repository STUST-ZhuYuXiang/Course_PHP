<?php
	// 若5秒內未按下，則自動跳至PHA01-1.php
	header("Refresh:5;URL=PHA01-1.php;");

	$name = $_GET["name"];
	$email = $_GET["email"];
	$days = $_GET["days"];

	// 檢查空值
	$msg = "";
	if (empty($name) && empty($email))
		$msg = "姓名欄位與電子信箱欄位不可空白哦!<br/>";
	else {
		if (empty($name))
			$msg = "姓名欄位不可空白哦!<br/>";
		else {
			if (empty($email))
				$msg = "電子信箱欄位不可空白哦!<br/>";
		}
	}
	if (empty($days))
		$msg = $msg . "入住天數至少應選擇一天!";

	echo $msg;
?>

<html>

<body>
	<form action="PHA01-1.php" method="post">
		<input type="submit" value="回主畫面">
	</form>
</body>

</html>
