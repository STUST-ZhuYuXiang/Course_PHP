<?php
  ini_set("error_reporting", "E_ALL & ~E_NOTICE");

  $name = $_POST["name"];
  $sex = $_POST["sex"];
  $email = $_POST["email"];
  $age = $_POST["age"];

  //年齡選項未選擇，則顯示「保密」
  if (empty($age))
    $age = "保密";

  $phone = $_POST["phone"];
  $trouble = $_POST["trouble"];
  $number = $_POST["number"];

  //設定姓名及E-Mail為必填欄位
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

  //錯誤訊息，轉址到PHA01-2.php，並傳送訊息過去
  //下方的動作仍會執行，因此要使用die()，結束下方的動作
  if ($errmsg != "") {
    header("Location:php01-2.php ?aa=" . $errmsg);
    die();
  }
?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>意見回應</title>
  <style type="text/css">
    <!--
    body {
      background-color: #FFCC66;
    }

    .style1 {
      font-size: 16px
    }

    .style2 {
      font-size: 24px;
      font-weight: bold;
    }
    -->
  </style>
</head>

<body>
  <p align="center" class="style2"><?php echo $name . $sex; ?>您好，您所輸入的資訊如下： </p>
  <table width="60%" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <th width="39%" align="left" valign="top" scope="row"><span class="style1">電子郵件地址： </span></th>
      <td width="61%"><?php $email; ?></td>
    </tr>
    <tr>
      <th align="left" valign="top" scope="row"><span class="style1">年齡：</span></th>
      <td><?php if (isset($age)) echo $age;
          else echo "保留"; ?></td>
    </tr>
    <tr>
      <th align="left" valign="top" scope="row"><span class="style1">曾經使用過的手機廠牌：</span></th>
      <td><?php foreach ($phone as $i) echo $i . ""; ?></td>
    </tr>
    <tr>
      <th align="left" valign="top" scope="row"><span class="style1">使用手機最常碰到的問題是：</span></th>
      <td><?php echo nl2br($trouble); ?></td>
    </tr>
    <tr>
      <th align="left" valign="top" scope="row"><span class="style1">目前使用手機門號業者有：</span></th>
      <td><?php echo $number; ?></td>
    </tr>
  </table>

</body>

</html>