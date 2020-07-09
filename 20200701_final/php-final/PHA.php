<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <?php
    // 連接資料庫
    try {
      $pdo = new PDO("mysql:host=localhost;dbname=library;","root","e402");
    } catch (PDOException $err) {
      die("資料庫無法連接");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // 新增按鈕事件
      if (empty($_POST["btn_insert"])) {
        if (($_POST["book_name"] != "") && ($_POST["author"] != "") && ($_POST["publisher"] != "") && ($_POST["ISBN"] != "") && ($_POST["price"] != "")) {
          // 設定資料庫指令-新增
          $stmt_insert = $pdo -> prepare("insert into book (book_name,author,publisher,ISBN,price) values (?,?,?,?,?)");
          $stmt_insert -> execute(array($_POST["book_name"], $_POST["author"], $_POST["publisher"], $_POST["ISBN"], $_POST["price"]));

          $_POST["book_name"] = "";
          $_POST["author"] = "";
          $_POST["publisher"] = "";
          $_POST["ISBN"] = "";
          $_POST["price"] = "";
        }
      }

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
    }
  ?>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>無標題文件</title>
  </head>

  <body>
    <form action="" method="post">
      <table width="80%" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="21%" height="40">書　　名：</td>
          <td colspan="3"><input name="book_name" type="text" /></td>
        </tr>
        <tr>
          <td height="40">作　　者：</td>
          <td width="42%"><input name="author" type="text" /></td>
          <td width="22%">出 版 者：</td>
          <td width="15%"><input name="publisher" type="text" /></td>
        </tr>
        <tr>
          <td height="40">ＩＳＢＮ：</td>
          <td><input name="ISBN" type="text" /></td>
          <td>建議售價：</td>
          <td><input name="price" type="text" /></td>
        </tr>
      </table>

      <div style="text-align:right">
        <input name="" type="submit" name="btn_insert" value="新增" />
      </div>
      <hr />

      <div style="text-align:right">
        <input name="" type="submit" name="btn_delete" value="刪除" />
      </div>

      <table border=1 align=center>
        <tr>
          <th width=300>書名</th>
          <th width=60>出版者</th>
          <th width=80>作者</th>
          <th width=60>詳細</th>
          <th width=60>選取</th>
        </tr>

        <?php
          // 設定資料庫指令-查詢
          $stmt_select = $pdo -> prepare("select * from book");
          $stmt_select -> execute();
          $rows = $stmt_select -> fetchAll();

          foreach ($rows as $row) {
            // 建置一個表單，用來傳值
            //echo "<form method='post' action=''>";
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

            //echo "</form>";
          }
        ?>
      </table>
    </form>
  </body>
</html>