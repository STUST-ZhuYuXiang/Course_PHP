<html>

<head>
	<meta charset="utf-8">
</head>

<body>
	<?php
		$errMsg1 = $_GET["errMsg1"];
		$errMsg2 = $_GET["errMsg2"];

		if ($errMsg1 != "") 
			echo "第".$errMsg1."個文字方塊必須輸入數字<br/>";
		if ($errMsg2 == "Y")
			echo "至少勾選1個或1個以上核選方塊";
	?>

	<form action="PHA01-1.PHP" method="post">
		<input type="submit" value="回上一頁">
	</form>
</body>

</html>
