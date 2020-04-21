<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>銀行本利和計算機結果畫面</title>
</head>

<?php


?>

<body>
    <!--使用empty()檢查空值-->
    <?php
        if (empty($num1) || ($num1 < 0)) {
            echo "本金不可為空或負數，請回上一頁重新輸入";
            exit;
        }
        if (empty($num2) || ($num2 < 0)) {
            echo "本金不可為空或負數，請回上一頁重新輸入";
            exit;
        }
        if (empty($num3) || ($num3 < 0)) {
            echo "本金不可為空或負數，請回上一頁重新輸入";
            exit;
        }
    ?>
    <p>
        <font size="5">銀行本利和計算機</font>
    </p>

    <!--填入數值-->
    <p>本金：<?php echo $num1; ?></p>
    <p>利率：<?php echo $num2; ?></p>
    <p>期數：<?php echo $num3; ?></p>

    <!--本利和公式：本金*(1+利率)^期數-->
    <!--使用round()四捨五入、pow()進行平方運算-->
    <p>本利和：
        <?php
            echo $num1 . "*(1+" . $num2 . ")^" . $num3 . "=" . round($num1 * pow(1 + $num2, $num3), 0);
        ?>
    </p>
</body>

</html>
