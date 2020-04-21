## <div style="background-color:#BEBEBE">W5_PHP術科</div>
### <span style="color:blue">php103</span>
#### PHA01-1.php
==用陣列定義餐點屬性，記得有隱藏欄位==
網頁上新增核取方塊、文字方塊和隱藏欄位，並用二維陣列存取。
```htmlmixed=
<tr>
    <td><input type="checkbox" name="order[0][]"></td>
    <td><input type="text" name="order[0][]" size="3" value="0"></td>
    
    <input type="hidden" name="order[0][]" value="豬排飯"/></td>
    <input type="hidden" name="order[0][]" value="100"/></td>

    <td><span class="style3">豬排飯</span></td>
    <td align="center"><span class="style3">100</span></td>
</tr>
```
#### PHA01-2.php
==接收來自PHA01-1.php的資料，記得陣列定義順序、表格標籤==
```php=
<?PHP
  $order = $_POST["order"];
?>
```

定義：order[i][0]~[3]分別為勾選、數量、名稱、價錢。
因為是使用表格去寫，要特別注意標籤的開始與結束。
```php=
<?php
    $total = 0;
    foreach ($order as $i) {
        if ($i[1] != 0) {
            echo "<tr><td>".$i[2]."</td><td>"
                .$i[1]."</td><td>".$i[3]."</td><td>"
                .$i[1]*$i[3]."</td></tr>";
            $total += $i[1]*$i[3];
        }
    }
?>
```


```php=
<?
    php echo $total;
?>
```
<br/>

### <span style="color:blue">php104</span>
#### PHA01-1.htm
填入action屬性，透過POST方法，將資料傳送到PHA01-2php網頁。
```htmlmixed=
<form id="form1" name="form1" method="post" action="PHA01-3.php">
    ...
</form>
```
新增文字輸入框。
```htmlmixed=
<p>啟始數字(需為正數)：
    <input type="text" name="num1">
</p>
<p>終止數字(需為正數)：
    <input type="text" name="num2">
</p>
<p>檢查因數(需為正數)：
    <input type="text" name="num3">
</p>
```

#### PHA01-2.php
==注意檢查數值、公因數運算方法==
```php=
<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
?>
```
使用`empty()`檢查輸入的值是否為空值，且是否為正整數。
```php=
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
```
計算因素，要先將最大值與最小值判斷出來。
```htmlmixed=
<p>啟始數字：<?php echo $num1; ?></p>
<p>終止數字：<?php echo $num2; ?></p>
<p>檢查因數：<?php echo $num3; ?></p>

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
```

<br/>


### <span style="color:blue">php105</span>
#### PHA01-1.htm
填入action屬性，透過POST方法，將資料傳送到PHA01-2php網頁。
```htmlmixed=
<form id="form1" name="form1" method="post" action="PHA01-2.php">
    ...
</form>
```
新增文字輸入框。
```htmlmixed=
<p>本金：
    <input type="text" name="num1">
</p>
<p>年利率：
    <input type="text" name="num2">
</p>
<p>期數(年)：
    <input type="text" name="num3">
</p>
```

#### PHA01-2.php
==注意檢查數值、數學函數方法==
```php=
<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
?>
```
使用`empty()`檢查輸入的值是否為空值，且是否為正整數。
```php=
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
```
本利和公式：本金*(1+利率)^期數。
使用`round()`四捨五入、`pow()`進行平方運算。
```php=
<p>本金：<?php echo $num1; ?></p>
<p>利率：<?php echo $num2; ?></p>
<p>期數：<?php echo $num3; ?></p>

<p>本利和：
    <?php
        echo $num1."*(1+".$num2.")^".$num3."="
            .round($num1*pow(1+$num2, $num3), 0);
    ?>
</p>
```
<br/>

### <span style="color:blue">php106</span>
#### PHA01-1.php
==填入各標籤name屬性、長字串應用==
自己傳送資料到自己的頁面，使用`$_SERVER["REQUEST_METHOD"]`判斷使用者是否傳送資料，最後面要補上`{`，表示未按傳送前是顯示`else`以下資料。
```php=
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["title"];
        $weather = $_POST["weather"];
        $date = date("Y/MMM/d");
        $note = $_POST["note"];
        $share = $_POST["share"];
        
        $show =<<< myDoc
            *------------------------------------------------*<BR />
            日期：$date 心情天氣：$weather <BR />
            --------------------------------------------<BR />
            標題：$title <BR />
            --------------------------------------------<BR />
            心情記事：<BR />
            --------------------------------------------<BR />
            $note <BR />
            --------------------------------------------<BR />
            分享好友：$share <BR />
            *------------------------------------------------*<BR />
        myDoc;
        
        echo numbertoContent($show);
        
    }
    else {
?>
```
記得結尾要補上`}`，送出的資料後會將區域內的內容隱藏。
```php=
<?php 
	} 
?>
```
