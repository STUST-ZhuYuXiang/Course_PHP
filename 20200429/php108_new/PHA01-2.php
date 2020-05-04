<?php     
    // 取得輸入框資料
    $t1 = $_POST["T1"];
    $t2 = $_POST["T2"];
    $t3 = $_POST["T3"];

    // 檢查空值，並儲存於錯誤訊息中
    $errMsg1 = "";
	if (empty($t1)) $errMsg1 .= "一";
    if (empty($t2)) $errMsg1 .= "二";
    if (empty($t3)) $errMsg1 .= "三";

    // 檢查未勾選值，並儲存於錯誤訊息中
    $errMsg2 = "";
    if (!isset($_POST["op"])) $errMsg2 = "Y";
    
    // 判斷有沒有錯誤訊息，則跳頁至PHA01-3.PHP，同時傳送錯誤訊息
    if (($errMsg1 != "") || ($errMsg2 != "")) {
        header("Location:PHA01-3.php?errMsg1=".$errMsg1."&errMsg2=".$errMsg2);
        die();
    }
    else {
        echo "<h2>最大數為：".max($t1,$t2,$t3)."</h2>";
        echo "<h2>最小數為：".min($t1,$t2,$t3)."</h2>";

        foreach ($_POST["op"] as $op) {
            switch ($op) {
                case "+":
                    echo "<h2>三數相加為：".($t1+$t2+$t3)."</h2>"; 
                    break;
                case "-":
                    echo "<h2>三數相減為：".($t1-$t2-$t3)."</h2>"; 
                    break;
                case "*":
                    echo "<h2>三數相乘為：".($t1*$t2*$t3)."</h2>"; 
                    break;
                case "/":
                    echo "<h2>三數相除為：".($t1/$t2/$t3)."</h2>"; 
                    break;
            }
        }
    }
?>
