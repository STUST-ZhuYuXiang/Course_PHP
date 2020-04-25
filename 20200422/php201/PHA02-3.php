<?php
  //連接資料庫
  try {
    $pdo = new PDO("mysql:host=localhost;dbname=class;", "root", "admin");
  } catch (PDOException $err) {
    die("資料庫無法連接");
  }

  //對應下方的Form method方法
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

<?php
  //定義擷取資料型態
  function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = ""){
    $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

    switch ($theType) {
      case "text":
        $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
        break;
      case "long":
      case "int":
        $theValue = ($theValue != "") ? intval($theValue) : "NULL";
        break;
      case "double":
        $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
        break;
      case "date":
        $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
        break;
      case "defined":
        $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
        break;
    }
    return $theValue;
  }
?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>更新通訊資料</title>
  <style type="text/css">
    <!--
    .style1 {
      font-family: "標楷體";
      font-size: 24px;
      color: #000033;
    }

    body {
      background-color: #FFCC66;
    }

    .style3 {
      font-size: 20px
    }

    .style4 {
      color: #FF0000;
      font-weight: bold;
      font-size: 24px;
    }
    -->
  </style>
</head>

<body>
  <form action="<?php  ?>" id="form1" name="form1" method="POST">
    <p class="style1"><span class="style3">更新<span class="style4"><?php echo $row["className"]; ?></span>的通訊資料：</span>
      <input name="hiddenField" type="hidden" value="<?php echo $row["classID"]; ?>">
    </p>
    <table width="97%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="style1">電 子 信 箱 ：
          <input name="classEmail" type="text" id="classEmail" value="<?php echo $row["classEmail"]; ?>" size="60" /></td>
      </tr>
      <tr>
        <td class="style1">聯 絡 電 話 ：
          <input name="classPhone" type="text" id="classPhone" value="<?php echo $row["classPhone"]; ?>" size="30" /></td>
      </tr>
      <tr>
        <td class="style1">聯 絡 地 址 ：
          <input name="classAddress" type="text" id="classAddress" value="<?php echo $row["classAddress"]; ?>" size="60" /></td>
      </tr>
    </table>
    <p class="style1">
      <input type="submit" name="Submit" value="送出" />
      <input type="reset" name="Submit2" value="重設" />
    </p>
    <p>&nbsp; </p>

    <input type="hidden" name="MM_update" value="form1">
  </form>


</body>

</html>
<?php

?>
