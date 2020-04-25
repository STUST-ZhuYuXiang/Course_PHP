<?php
	// 宣告陣列各項字串
	$dayName = array("星期一", "星期二", "星期三", "星期四", "星期五", "星期六", "星期天");
	$hotelName = array("國賓大飯店", "中信大飯店", "漢來大飯店");
	$roomName = array("單人房", "雙人房");
	$price = array(array(2850, 3150), array(2450, 2650), array(3950, 4250));
	$surcharge = array(1.1, 1.09, 1.12);

	// 抓取數值
	$name = $_POST["name"];
	$email = $_POST["email"];
	$hotel = $_POST["hotel"];
	$room = $_POST["room"];
	$days = $_POST["days"];

	// 檢查空值與未輸入值
	if (empty($name) || empty($email) || empty($days)) {
		header("Location:PHA01-3.php?name=" . $name . "&email=" . $email . "&days=" . $days);
		exit;
	}

	// 顯示資訊
	echo "<h2>" . $name . "先生/小姐您好：</h2>";
	echo "您選擇了：" . $hotelName[$hotel] . "<br/>";
	echo "房型為：" . $roomName[$room] . "<br/>";
	echo "您預計入住天數為：";

	$total = 0;
	foreach ($days as $i) {
		echo $dayName[$i - 1] . " ";

		// 星期五六日加額外稅金
		if ($i >= 5)
			$total += $price[$hotel][$room] * $surcharge[$hotel];
		else
			$total += $price[$hotel][$room];
	}

	echo "<br/><br/>您總共需要花費：" . $total . "新台幣<br/>";
?>

<body>
	<!--
	<form action="" method="post">
   	<input type="submit" value="回主畫面">
   </form>
   -->
</body>
