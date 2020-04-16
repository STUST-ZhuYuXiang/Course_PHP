## W4_PHP術科
### <span style="color:blue">php101</span>
#### PHA01-1.php
==注意標籤設定，練習表格、選項按鈕、音效檔案選項。==
網頁統一編碼，要記得輸入。
```htmlmixed=
<head>
    <meta charset="utf-8">
</head>
```
<br/>

將圖片分為2*2表格放入，注意 tr 和 td 標籤，以及圖片位置。
```php=
<?php
    echo "<tr><td><input type='radio' name='cardtype' value='php01-1.gif'><img src='images/php01-1.gif'/></td>";
    echo "<td><input type='radio' name='cardtype' value='php01-2.gif'><img src='images/php01-2.gif'/></td></tr>";
    echo "<tr><td><input type='radio' name='cardtype' value='php01-3.gif'><img src='images/php01-3.gif'/></td>";
    echo "<td><input type='radio' name='cardtype' value='php01-4.gif'><img src='images/php01-4.gif'/></td></tr>"; 
?>
```
<br/>

音效檔案，注意 select 之 option 標籤。
```php=
<?PHP
    echo "<option value='php01-1.mid'>生日快樂 1</option>";
    echo "<option value='php01-2.mid'>生日快樂 2</option>";
    echo "<option value='php01-3.mid'>生日快樂 3</option>";
    echo "<option value='php01-4.mid'>生日快樂 4</option>";
?>
```
<br/>

#### PHA01-2.php
==接收來自PHA01-1.php的變數，要確認好變數的name屬性。==
圖片來源需透過`.`進行連結，特別注意單雙引號。
```php=
<?php echo "<img src='images/".$_POST["cardtype"]."'/>"; ?>
```
寄件日期要使用`date()`函數。
```php=
<?PHP echo date("Y/m/d"); ?>
```
卡片內容傳送過來時會忽略換行符號，因此使用`nl2br()`方法，將內容加上換行符號。
```php=
<?php nl2br($_POST["message"]); ?>
```
<br/>

### <span style="color:blue">php102</span>
#### PHA01-1.htm
==資料傳輸方法、輸入name屬性以及radio、checkbox的寫法==
透過POST方法，將資料傳送到PHA01-3php網頁。
```htmlmixed=
<form id="form1" name="form1" method="post" action="PHA01-3.php">
    ...
</form>
```

您曾使用過的手機廠牌，要注意name屬性使用陣列。
```htmlmixed=
<input type="checkbox" name="phone[]" value="NOKIA" />
NOKIA
<input type="checkbox" name="phone[]" value="MOTOROLA" />
MOTOROLA
<input type="checkbox" name="phone[]" value="BenQ" />
BenQ
<input type="checkbox" name="phone[]" value="Sony Ericsson" />
Sony Ericsson
<input type="checkbox" name="phone[]" value="OKWAP" />
OKWAP
```
您使用手機最常碰到的問題，使用textarea標籤。
```htmlmixed=
<textarea name="trouble" cols="45" rows="5"></textarea>
```
#### PHA01-2.php
不需要改程式碼。

#### PHA01-3.php
==接收來自PHA01-1.php的變數，要確認好變數的name屬性，以及檢查方法==
年齡選項未選擇，則顯示「保密」。
```php=
<?php
    if (empty($age)) $age = "保密";
?>
```

設定姓名及E-Mail為必填欄位，使用`empty()`方法檢查變數是否為空值。
```php=
<?php
    $errmsg = "";
    if (empty($name) || empty($email)) {
        if (empty($name) && empty($email))
            $errmsg = "姓名及Email信箱";
        else {
            if (empty($name))
                $errmsg = "姓名";
            if (empty($email))
                $errmsg = "Email信箱";
        }
    }
 ?>
```

錯誤訊息，轉址到PHA01-2.php，並傳送訊息過去。
下方的動作仍會執行，因此要使用`die()`，結束下方的動作。
```php=
<?php=
    if ($errmsg != "") {
        header("Location:php01-2.php ?aa=" . $errmsg);
        die();
    }
?>
```

輸入資訊-年齡，使用`isset()`方法檢查變數是否存在，如果有回傳true。
```php=
<?php 
    if (isset($age)) echo $age;
    else echo "保留";
?>
```

輸入資訊-曾經使用過的手機廠牌，因為是陣列所以要用迴圈來讀取值。
```php=
<?php 
    foreach ($phone as $i)
        echo $i.""; 
?>
```
輸入資訊-使用手機最常碰到的問題，這邊有換行符號。
```php=
<?php echo nl2br($trouble); ?>
```
