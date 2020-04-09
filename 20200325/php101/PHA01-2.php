<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>預覽電子生日賀卡</title>
  <style type="text/css">
    <!--
    body {
      background-color: #FFFFCC;
    }

    .style3 {
      font-family: "標楷體";
      font-size: x-large;
    }

    .style5 {
      font-family: "標楷體"
    }
    -->
  </style>
</head>

<body>
  <embed src=<?php echo $_POST["music"]; ?> width=0 height=0>
  <div align="center">
    <p><img src="images/php01-6.gif" width="466" height="59" /></p>
  </div>
  <p class="style3">來自<a href="mailto:<?php echo $_POST["form_name"]; ?>"><?php ?></a>的祝福：</p>
  <table width="80%" border="0" align="center" cellpadding="10" cellspacing="0">
    <tr>
      <!--接收php01-1.php 的 name="cardtype" 值-->
      <td colspan="3" align="center"><?php echo "<img src='" . $_POST["cardtype"] . "'>"; ?></td>
    </tr>
    <tr>
      <td height="40" colspan="2" align="left" bordercolor="1" bgcolor="#CCFFFF">
        <p align="left"><span class="style3">賀卡標題：<?php echo $_POST["subject"]; ?></span> <br />
        </p>
      </td>
      <td align="right" bordercolor="1" bgcolor="#CCFFFF"><span class="style3">
          <font size=3>寄件日期：<?PHP echo date("Y/m/d"); ?></font>
        </span></td>
    </tr>
    <tr>
      <td colspan="3" valign="top" bordercolor="1" bgcolor="#66FF99">
        <p class="style3">親愛的<?php echo $_POST["to_name"]; ?>：</p>
      </td>
    </tr>
    <tr>
      <td width="100" valign="top" bordercolor="1" bgcolor="#66FF99">&nbsp;</td>
      <td valign="top" bordercolor="1" bgcolor="#66FF99">
        <span class="style5" style="font-style:<?php echo $_POST["style"]; ?>;color:<?php echo $_POST["color"]; ?>;font-size:<?php echo $_POST["size"]; ?>;"><?php echo nl2br($_POST["message"]); ?></span>
      </td>
      <td width="100" valign="top" bordercolor="1" bgcolor="#66FF99">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</body>

</html>