<?php
  //連接資料庫
  try {
    $pdo = new PDO("mysql:host=localhost;dbname=class;", "root", "admin");
  } catch (PDOException $err) {
    die("資料庫無法連接");
  }

  //讀取記錄
  $stmt = $pdo->prepare("select * from classmates where classID=?");
  $stmt->execute(array($_GET["id"]));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>查詢通訊資料</title>
  <style type="text/css">
    <!--
    .style1 {
      color: #000033;
      font-weight: bold;
    }

    .style2 {
      font-family: "標楷體";
      font-size: 24px;
    }

    body {
      background-color: #66FF99;
    }
    -->
  </style>
  <script type="text/JavaScript">
    <!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
  </script>
</head>

<body>
  <p class="style2"><span class="style1"><?php echo $row["className"]; ?></span> 的詳細資料如下：</p>
  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="21%" align="center" class="style2">性　　別：</td>
      <td width="79%" class="style2"><?php echo $row["classSex"]; ?></td>
    </tr>
    <tr>
      <td align="center" class="style2">生　　日：</td>
      <td class="style2"><?php echo $row["classBirthday"]; ?></td>
    </tr>
    <tr>
      <td align="center" class="style2">電子信箱：</td>
      <td class="style2"><?php echo $row["classEmail"]; ?></td>
    </tr>
    <tr>
      <td align="center" class="style2">電　　話：</td>
      <td class="style2"><?php echo $row["classPhone"]; ?></td>
    </tr>
    <tr>
      <td align="center" class="style2"> 聯絡地址：</td>
      <td class="style2"><?php echo $row["classAddress"]; ?></td>
    </tr>
  </table>
  <p align="center">
    <input name="Submit" type="button" onClick="location.href='PHA02-1.PHP'" value="返回首頁" />
  </p>
</body>

</html>
<?php

?>
