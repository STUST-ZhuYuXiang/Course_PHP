<?php
  //連結資料庫
  try {
    $pdo = new PDO("mysql:host=localhost;dbname=class;", "root", "admin");
  } catch (PDOException $err) {
    die("資料庫無法連接");
  }

  //讀取資料
  $stmt = $pdo->prepare("select * from classmates order by className");
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>瑞中通訊錄</title>
  <style type="text/css">
    <!--
    .style5 {
      font-size: 36px;
      font-family: "標楷體";
    }

    .style6 {
      font-family: "標楷體"
    }

    .style7 {
      color: #ECE9D8
    }

    body {
      background-color: #CCFF99;
    }

    .style9 {
      font-size: large;
      font-weight: bold;
      font-family: "標楷體";
    }

    .style10 {
      font-size: 18px
    }
    -->
  </style>
</head>

<body>
  <p><span class="style5">瑞中通訊錄</span>（<span class="style6">依姓氏筆畫排序</span>）</p>
  <hr />
  <table width="80%" border="１" align="center" cellpadding="2" cellspacing="0">
    <tr bgcolor="#CCCCFF">
      <td width="34%">
        <div align="center" class="style9">姓　名</div>
      </td>
      <td width="23%">
        <div align="center" class="style9">性　別</div>
      </td>
      <td width="23%">
        <div align="center" class="style9">詳細資料</div>
      </td>
      <td width="20%">
        <div align="center" class="style9">更新資訊</div>
      </td>
    </tr>

    <?php foreach ($rows as $row) { ?>
      <tr align="center">
        <td><span class="style10"><?php echo $row["className"]; ?></span></td>
        <td><span class="style10"><?php echo $row["classSex"]; ?></span></td>
        <td><a href="<?php echo "pha02-2.php?id=" . $row["classID"]; ?>" class="style10">查詢</a></td>
        <td><a href="<?php echo "pha02-3.php?id=" . $row["classID"]; ?>" class="style10">更新</a></td>
      </tr>
    <?php } ?>
  </table>

  <span class="style7"></span>
</body>

</html>
<?php

?>
