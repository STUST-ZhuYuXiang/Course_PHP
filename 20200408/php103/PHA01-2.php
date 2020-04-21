<?PHP
  //定義：order[i][0]~[3]分別為勾選、數量、名稱、價錢
  $order = $_POST["order"];
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>預覽點餐內容</title>
	<style type="text/css">
		<!--
		body {
			background-color: #FFCCCC;
		}

		.style1 {
			font-family: "標楷體";
			font-size: xx-large;
			color: #FF0000;
		}

		.style2 {
			font-family: "標楷體";
			font-size: x-large;
		}
		-->
	</style>
</head>

<body>
	<p class="style1">您所點用的餐點為：</p>
	<table width=60% align=enter border=1>
		<tr>
			<th>食品名稱
			<th>數量
			<th>單價
			<th>小計
				<?php
          $total = 0;
          foreach ($order as $i) {
            if ($i[1] != 0) {
							echo "<tr><td>".$i[2]."</td><td>".$i[1]."</td><td>".$i[3]."</td><td>".$i[1]*$i[3]."</td></tr>";
							$total += $i[1]*$i[3];
            }
          }
				?>
		<tr>
			<td colspan="4" align="right">
				總計：<?php echo $total; ?>
	</table>


	<?PHP

	?>
	<p>
		<input name="Submit" type="submit" onClick="window.history.back();" value="抱歉！您尚未點餐！返回">
	</p>
	<?PHP

	?>
	<H2>祝您用餐愉快～</h2>
	<?php

	?>

</body>

</html>
