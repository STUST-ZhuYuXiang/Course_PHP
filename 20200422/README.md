## <div style="background-color:#BEBEBE">W7_PHP術科第二類</div>
`empty()`檢查變數是否空值。
`isset()`檢查變數是否定義，通常檢查checkbox和radio。

PHP資料庫連接使用PDO物件，要設定連接字串。
```php=
<?php
    try {
        $ppdo=new PDO("mysql:host=資料庫伺服器位置; dbname=資料庫名稱");
    } catch (PDOException $err) {
        die("資料庫無法連接");
    }
?>
```

### 四種基礎SQL語法
選取
```sql=
select 欄位 as 別名 
from 資料表1 
```
新增
```sql=
insert into 資料表(欄位1,欄位2) 
values (值1,值2) 
```
刪除
```sql=
delete from 資料表 
where 條件 
```
更新(修改)
```sql=
update 資料表 
set 欄位1=值, 欄位2=值 
where 條件 
```
<br/>

### <span style="color:blue">php201</span>
一開始要先進入MyAdmin建立資料庫。
MyAdmin設定之帳號為root，密碼為admin。
資料庫class -> 資料表名稱classmates -> SQL。
從提供的class.sql複製程式碼到上方的SQL區塊內。
http://localhost:8080/phpMyAdmin/index.php

#### PHA02-1.php
連結資料庫，填入資料庫網址與名稱，使用者帳號密碼。
```php=
<?php  
  try {
    $pdo = new PDO("mysql:host=localhost;dbname=class;", "root", "admin");
  } catch (PDOException $err) {
    die("資料庫無法連接");
  }
?>
```
讀取資料，填入資料庫的資料表名稱，並使用`order by`排序。
```php=
<?php
  $stmt = $pdo->prepare("select * from classmates order by className");
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
```

迴圈走訪資料表的資料，注意開頭`｛`和結尾`｝`的地方。
```htmlmixed=
<?php foreach ($rows as $row) { ?>

<tr align="center">
    <td><span class="style10"><?php echo $row["className"]; ?></span></td>
    <td><span class="style10"><?php echo $row["classSex"]; ?></span></td>
    <td><a href="<?php echo "pha02-2.php?id=" . $row["classID"]; ?>" class="style10">查詢</a></td>
    <td><a href="<?php echo "pha02-3.php?id=" . $row["classID"]; ?>" class="style10">更新</a></td>
</tr>

<?php } ?>
```

<br/>

#### PHA02-2.php
同上，連接資料庫，填入資料庫網址與名稱，使用者帳號密碼。
```php=
<?php
  try {
    $pdo = new PDO("mysql:host=localhost;dbname=class;", "root", "admin");
  } catch (PDOException $err) {
    die("資料庫無法連接");
  }
?>
```
讀取記錄，以id搜尋資料表資料
```php=
<?php
  $stmt = $pdo->prepare("select * from classmates where classID=?");
  $stmt->execute(array($_GET["id"]));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
```

#### PHA02-3.php
同上，連接資料庫，填入資料庫網址與名稱，使用者帳號密碼。
```php=
<?php
  try {
    $pdo = new PDO("mysql:host=localhost;dbname=class;", "root", "admin");
  } catch (PDOException $err) {
    die("資料庫無法連接");
  }
?>
```
對應下方的Form method方法
```php=
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //更新資料
    $stmt = $pdo->prepare("update classmates set classEmail=?, classPhone=?, classAddress=? where classID=?");
    $stmt->execute(array($_POST["classEmail"], $_POST["classPhone"], $_POST["classAddress"], $_POST["hiddenField"]));
    header("Location:PHA02-1.php");
    die();
  }
  else {
    //讀取記錄
    $stmt = $pdo->prepare("select * from classmates where classID=?");
    $stmt->execute(array($_GET["id"]));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
  }
?>
```
