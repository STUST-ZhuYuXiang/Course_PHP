<!--取得上一頁傳送的變數-->
<?php
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$num3 = $_POST["num3"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>倍數產生機結果畫面</title>
</head>

<body>
	<!--檢查輸入的值是否為空值，且是否為正整數-->
	<?php
		if (empty($num1) || ($num1 < 0)) {
			echo "<h1>倍數產生機</h1>啟始數字須為正整數且不可為空<br>請回上一頁重新輸入";
			exit;
		}
		if (empty($num2) || ($num2 < 0)) {
			echo "<h1>倍數產生機</h1>終止數字須為正整數且不可為空<br>請回上一頁重新輸入";
			exit;
		}
		if (empty($num3) || ($num3 < 0)) {
			echo "<h1>倍數產生機</h1>檢查因數須為正整數且不可為空<br>請回上一頁重新輸入";
			exit;
		}
	?>

	<p><font size="5">倍數產生機</font></p>

	<!--將數值顯示出來-->
	<p>啟始數字：<?php echo $num1; ?></p>
	<p>終止數字：<?php echo $num2; ?></p>
	<p>檢查因數：<?php echo $num3; ?></p>

	<!--除法運算，並顯示出來-->
	<p>產生結果：
		<?php
			if ($num1 > $num2) {
				$t = $num1;
				$num1 = $num2;
				$num2 = $t;
			}
			$t = "";
			for ($i = $num1; $i <= $num2; $i++)
				if ($i % $num3 == 0)
					echo "$i, ";
		?>
	</p>
</body>

</html>
