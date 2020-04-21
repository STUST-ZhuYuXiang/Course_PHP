<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>自助點餐系統</title>
	<style type="text/css">
		<!--
		body {
			background-color: #CCFF66;
		}

		.style3 {
			font-family: "標楷體";
			font-size: x-large;
		}

		.style4 {
			font-family: "標楷體";
			font-size: xx-large;
		}
		-->
	</style>
</head>

<body>
	<p align="center" class="style4">點餐系統</p>
	<hr />
	<form id="form1" name="form1" method="post" action="PHA01-2.php">
		<table width="38%" border="1" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td><span class="style3">挑選</span></td>
				<td><span class="style3">數量</span></td>
				<td><span class="style3">產品名稱</span></td>
				<td align="center"><span class="style3">單價</span></td>
			</tr>
			<tr>
				<!--新增核取方塊和文字方塊，用二維陣列存取-->
				<td><input type="checkbox" name="order[0][]"></td>
				<td><input type="text" name="order[0][]" size="3" value="0"></td>

				<!--新增隱藏欄位，產品名稱與價錢，用二維陣列存取-->
				<input type="hidden" name="order[0][]" value="豬排飯" /></td>
				<input type="hidden" name="order[0][]" value="100" /></td>

				<td><span class="style3">豬排飯</span></td>
				<td align="center"><span class="style3">100</span></td>
			</tr>
			<tr>
				<!--新增核取方塊和文字方塊，用二維陣列存取-->
				<td><input type="checkbox" name="order[1][]"></td>
				<td><input type="text" name="order[1][]" size="3" value="0"></td>

				<!--新增隱藏欄位，產品名稱與價錢，用二維陣列存取-->
				<input type="hidden" name="order[2][]" value="雞腿飯" /></td>
				<input type="hidden" name="order[2][]" value="150" /></td>

				<td width="52%"><span class="style3">雞腿飯</span></td>
				<td width="30%" align="center"><span class="style3">150</span></td>
			</tr>
			<tr>
				<!--新增核取方塊和文字方塊，用二維陣列存取-->
				<td><input type="checkbox" name="order[2][]"></td>
				<td><input type="text" name="order[2][]" size="3" value="0"></td>

				<!--新增隱藏欄位，產品名稱與價錢，用二維陣列存取-->
				<input type="hidden" name="order[2][]" value="牛肉燴飯" /></td>
				<input type="hidden" name="order[2][]" value="200" /></td>

				<td><span class="style3">牛肉燴飯</span></td>
				<td align="center"><span class="style3">200</span></td>
			</tr>
			<tr>
				<!--新增核取方塊和文字方塊，用二維陣列存取-->
				<td><input type="checkbox" name="order[3][]"></td>
				<td><input type="text" name="order[3][]" size="3" value="0"></td>

				<!--新增隱藏欄位，產品名稱與價錢，用二維陣列存取-->
				<input type="hidden" name="order[3][]" value="義大利海鮮麵" /></td>
				<input type="hidden" name="order[3][]" value="250" /></td>

				<td><span class="style3">義大利海鮮麵</span></td>
				<td align="center"><span class="style3">250</span></td>
			</tr>
			<tr>
				<td colspan="4">
					<div align="center"><span class="style3">
							<input type="submit" value="預覽訂單" />
							<input type="reset" value="重設" />
						</span></div>
				</td>
			</tr>
		</table>
	</form>
	<p>&nbsp; </p>
</body>
</html>
