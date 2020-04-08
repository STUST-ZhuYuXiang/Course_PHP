## <div style="background-color:#BEBEBE">W3_基本語法</div>
### 一、單、雙引號
雙引號內的變數會被解析和讀取，單引號不會。
```php=
<?php
    $school = "stust";
    echo "$school";
    echo '$school';
?>
```

### 二、長字串
用意，是將想要存取的所有變數，統合在一起，存放在雙引號內，而且變數名稱不能有空格喔!
```php=
<?php
    $name = 'stust';
    echo "<h1>".$name."</h1>";
    $a =<<< MyDoc
        <h1>$name</h1>
    MyDoc;
    echo $a;
?>
```
<br/>

如果網頁上出現亂碼，在head標籤下打入以下程式。
```htmlmixed=
<head>
    <meta charset="utf-8">
</head>
```
<br/>

將所有變數存入長字串中。
```php=
<?php
    $weather = 'A';
    $title = 'B';
    $word = 'C';
    $share = 'D';
    
    $show =<<< MyDoc
        <div class='Memo'>
        *------------------------------------------------*<BR/>
        日期：xxx      心情天氣：$weather<BR/>
        --------------------------------------------<BR/>
        標題：$title<BR/>
        --------------------------------------------<BR/>
        心情記事：<BR/>
        --------------------------------------------<BR/>
        $word<BR/>
        --------------------------------------------<BR/>
        分享好友：$share<BR/>
        *------------------------------------------------*<BR/>
        </div>
    MyDoc;
    
    echo $show;
?>
```

### 三、字串方法
字串根據空白切割存放至字串陣列
```php=
<?php
    $a = "This is a cat.";
    $b = explode(" ", $a);
    echo $b[0];
?>
```

### 四、時間
時間動態設定，打在最上方，也就是html標籤外面
```php=
<?php 
    ini_set('date.timezone', 'Asia/Taipei'); 
?>
```

### 五、表單處理
標籤一定要包含name的指令
```htmlmixed=
<form method="get">
    <span>帳號：</span>
    <input type="text" name="account"><br/>
    <span>密碼：</span>
    <input type="text" name="password"><br/>
    <input type="submit" value="送出">
</form>
```

將資料利用post傳送到下個網頁，並使用action()跳至該頁面。
method是get會顯示在網址上，而且get有限制資料大小;method是post會包在檔頭。
<br/>

以下方為2個網頁，由form1傳送資料到form2。
    
- sample_form1.php
```php=
<form method="post" action="sample0318_form2.php">
    <span>帳號：</span>
    <input type="text" name="account"><br/>
    <span>密碼：</span>
    <input type="text" name="password"><br/>
    <input type="submit" value="送出">
</form>
```
- sample_form2.php
```php=
<?php
    echo $_POST["account"].",".$_POST["password"];
?>
```
