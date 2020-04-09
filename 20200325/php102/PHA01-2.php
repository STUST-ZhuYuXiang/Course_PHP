<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>錯誤回報</title>
	<style type="text/css">
		<!--
		body {
			background-color: #66CC66;
		}

		.style1 {
			font-size: 36px;
			font-family: "標楷體";
			color: #000033;
			font-weight: bold;
		}
		-->
	</style>
	<meta http-equiv="refresh" content="5;url=PHA01-1.HTM">
</head>

<body>
	<div align="center">
		<p class="style1">您的<?PHP echo $_GET['aa']; ?>請務必留下！</p>
		<p class="style1">
			<input name="Submit" type="button" onClick="window.history.back();" value="回到上一頁">
		</p>
	</div>
</body>

</html>