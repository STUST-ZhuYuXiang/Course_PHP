<html>

<head>
   <meta charset="utf-8">
</head>

<body>
   <?php
      $t1 = $_GET["t1"];
      $t2 = $_GET["t2"];
      $t3 = $_GET["t3"];
		$nochk = $_GET["nochk"];
		
		if (empty($t1) || empty($t2) || empty($t3)) {
			$outstr = "第";
			if (empty($t1))
				$outstr .= "一";
			if (empty($t2))
				$outstr .= "二";
			if (empty($t3))
				$outstr .= "三";
			$outstr .= "文字方塊必須輸入文字<br/>";
		} 
		else
			$outstr = "";

		if ($nochk == 1)
			$outstr .= "至少勾選1個或1個以上核選方塊";

		echo $outstr;
   ?>

   <form action="PHA01-1.PHP" method="post">
      <input type="submit" value="回上一頁">
   </form>
</body>

</html>
