## <div style="background-color:#BEBEBE">W4_PHP術科</div>
### php101
==注意標籤設定，練習表格、選項按鈕、音效檔案選項。==

#### PHA01-1.php
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

#### PHA01-2.php
==接收來自PHA01-1.php的變數，要確認好變數的name標籤。==
圖片來源需透過`.`進行連結，特別注意單雙引號。
```php=
<?php echo "<img src='images/".$_POST["cardtype"]."'/>"; ?>
```
寄件日期要使用 date() 函數。
```php=
<?PHP echo date("Y/m/d"); ?>
```
卡片內容傳送過來時會忽略換行符號，因此使用nl2br()函數，將內容加上換行符號。
```php=
<?php nl2br($_POST["message"]); ?>
```
