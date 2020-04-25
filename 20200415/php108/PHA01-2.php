<?php     
    // 抓取輸入框資料
    $t1 = $_POST["T1"];
    $t2 = $_POST["T2"];
    $t3 = $_POST["T3"];

    // 抓取核取方塊資料
    $c1 = empty($_POST["c1"])?0:1;
    $c2 = empty($_POST["c2"])?0:1;
    $c3 = empty($_POST["c3"])?0:1;
    $c4 = empty($_POST["c4"])?0:1;
    
    // 判斷核取方塊如果全部未勾選回傳"1"
    $nochk = (($c1==0) && ($c2==0) && ($c3==0) && ($c4==0))?1:0;

    // 判斷核取方塊未勾選與輸入框未輸入，則跳頁至PHA01-3.PHP，同時傳送值
    if (($nochk == 1) || empty($t1)|| empty($t2) || empty($t3))
        header("Location:PHA01-3.php?t1=".$t1."&t2=".$t2."&t3=".$t3."&nochk=".$nochk);
    else {
        // 宣告取最大值方法
        function maxi($a, $b, $c) {
            $max = ($a>$b)?$a:$b;
            $max = ($max>$c)?$max:$c;
            return $max;
        }
        
        // 宣告取最小值方法
        function mini($a, $b, $c) {
            $min = ($a>$b)?$b:$a;
            $min = ($min>$c)?$c:$min;
            return $min;
        } 
        
        echo "<h2>最大數為：".maxi($t1,$t2,$t3)."</h2>";
        echo "<h2>最小數為：".mini($t1,$t2,$t3)."</h2>";

        if ($c1 == 1)
            echo "<h2>三數相加為：".($t1+$t2+$t3)."</h2>"; 
        if ($c2 == 1)
            echo "<h2>三數相減為：".($t1-$t2-$t3)."</h2>";
        if ($c3 == 1)
            echo "<h2>三數相乘為：".($t1*$t2*$t3)."</h2>";
        if ($c4 == 1)
            echo "<h2>三數相除為：".($t1/$t2/$t3)."</h2>";
    }
?>
