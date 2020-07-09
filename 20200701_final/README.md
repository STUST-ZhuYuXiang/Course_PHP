## <div style="background-color:#BEBEBE">W17_期末考</div>
### <span style="color:blue">php-final</span>
#### library.sql
透過此資料庫指令，建立資料庫'library'，建立資料表'book'。

#### PHA.php
連接資料庫，輸入連接資料庫名稱，以及使用的帳號密碼。
```php=
<?php 
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=library;","root","e402");
    } catch (PDOException $err) {
        die("資料庫無法連接");
    }
?>
```

開始頁面：顯示所有book資料表的資料。
```php=
<?php
    // 設定資料庫指令-查詢
    $stmt_select = $pdo -> prepare("select * from book");
    $stmt_select -> execute();
    $rows = $stmt_select -> fetchAll();

    foreach ($rows as $row) {
        // 建置一個表單，用來傳值
        // 新增隱藏欄位，傳送資料的編號
        echo "<input type='hidden' name='id' value='".$row["id"]."'>";

        // 將資料寫入表格
        echo "<tr>";
        echo "<th width='300'>".$row["book_name"]."</th>";
        echo "<th width='60'>".$row["publisher"]."</th>";
        echo "<th width='80'>".$row["author"]."</th>";
        echo "<th width='60'>".$row["ISBN"]."</th>";
        echo "<th width='60'><input type='checkbox' name='ck[]' value='".$row["id"]."'></th>";
        echo "</tr>";
    }
?>
```

按鈕事件：新增與刪除。
更改按鈕的`name`屬性，原本都是btn，將二個改為不相同的值，以方便判定。
```htmlmixed=
<input name="" type="submit" name="btn_insert" value="新增" />
<input name="" type="submit" name="btn_delete" value="刪除" />
```
在網頁伺服之POST事件中，寫下按鈕判定方法。
```php=
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 新增按鈕事件
        if (empty($_POST["btn_insert"])) {}
        
        // 刪除按鈕事件
        if (empty($_POST["btn_delete"])) {}
    }
?>
```

新增資料：須注意網頁各input的`name`屬性，並透過SQL的新增指令，將資料新增進指定資料庫'book'內，最後將新增資料數值清空，以防止網頁刷新時，再次新增資料。
```php=
<?php
    // 新增按鈕事件
    if (empty($_POST["btn_insert"])) {
        if (($_POST["book_name"] != "") && ($_POST["author"] != "") && ($_POST["publisher"] != "") && ($_POST["ISBN"] != "") && ($_POST["price"] != "")) {
            // 設定資料庫指令-新增
            $stmt_insert = $pdo -> prepare("insert into book (book_name,author,publisher,ISBN,price) values (?,?,?,?,?)");
            $stmt_insert -> execute(array($_POST["book_name"], $_POST["author"], $_POST["publisher"], $_POST["ISBN"], $_POST["price"]));

            // 將預新增資料數值清空
            $_POST["book_name"] = "";
            $_POST["author"] = "";
            $_POST["publisher"] = "";
            $_POST["ISBN"] = "";
            $_POST["price"] = "";
        }
    }
?>
```

刪除資料：先注意前方顯示'book'資料表的表單之核取方塊程式碼`<input type='checkbox' name='ck[]' value='".$row["id"]."'>`，其值為該資料表資料的id，因此僅需判定核取方塊是否被選擇，再將其值取出，作為刪除依據，最後填入SQL刪除指令。
```php=
<?php
    // 刪除按鈕事件
    if (empty($_POST["btn_delete"])) {
        // 設定資料庫指令-刪除
        foreach ($_POST["ck"] as $i) {
            if (!empty($i)) {
                $stmt_delete = $pdo -> prepare("delete from book where id=?");
                $stmt_delete -> execute(array($i));
            }
        }
    }
?>
```
