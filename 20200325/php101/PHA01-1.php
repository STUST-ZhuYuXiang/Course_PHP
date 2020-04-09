<head>
  <!--網頁統一編碼-->
  <meta charset="utf-8">

  <Script language='javascript'>
    function check_form() {
      if (document.ecard.subject.value.length == 0) {
        alert("卡片標題不可空白!");
        return false;
      }
      if (document.ecard.from_name.value.length == 0) {
        alert("寄件人姓名不可空白!");
        return false;
      }
      if (document.ecard.from_email.value.length == 0) {
        alert("寄件人電子信箱不可空白!");
        return false;
      }
      if (document.ecard.to_name.value.length == 0) {
        alert("收件人姓名不可空白!");
        return false;
      }
      if (document.ecard.to_email.value.length == 0) {
        alert("收件人電子信箱不可空白!");
        return false;
      }
      ecard.submit();
    }
  </script>
  <title>電子生日賀卡</title>
  <style type="text/css">
    <!--
    body {
      background-color: #FF99FF;
    }

    .style1 {
      font-family: "標楷體";
      font-size: x-large;
    }
    -->
  </style>
</head>

<body>
  <div align="center"><img src="images/php01-5.gif" width="466" height="59" /></div>
  <form name="ecard" method="post" action="PHA01-2.php">
    <p class="style1">一、我好想開車選擇卡片樣式</p>
    <table width="80%" border="0" align="center" cellpadding="10" cellspacing="0">
      <!--將圖片分為2*2表格放入，注意<tr><td>標籤-->
      <?php
        echo "<tr><td><input type='radio' name='cardtype' value='php01-1.gif'><img src='images/php01-1.gif'/></td>";
        echo "<td><input type='radio' name='cardtype' value='php01-2.gif'><img src='images/php01-2.gif'/></td></tr>";
        echo "<tr><td><input type='radio' name='cardtype' value='php01-3.gif'><img src='images/php01-3.gif'/></td>";
        echo "<td><input type='radio' name='cardtype' value='php01-4.gif'><img src='images/php01-4.gif'/></td></tr>"; 
      ?>
    </table>
    <p class="style1">二、填寫卡片內容</p>
    <table width="80%" border="1" align="center" cellpadding="10" cellspacing="0">
      <tr bgcolor="#FFFF66">
        <td>卡 片 標 題 ：
          <input name="subject" type="text"> </td>
      </tr>
      <tr bgcolor="#CCFFFF">
        <td>寄件人姓名：
          <input name="from_name" type="text">　
          　電子郵件信箱：
          <input name="from_email" type="text"> </td>
      </tr>
      <tr bgcolor="#FFFF66">
        <td>收件人姓名：
          <input name="to_name" type="text">　
          　電子郵件信箱：
          <input name="to_email" type="text"> </td>
      </tr>
      <tr bgcolor="#CCFFFF">
        <td>演 奏 音 樂 ：
          <select name="music">
            <?PHP
              echo "<option value='php01-1.mid'>生日快樂 1</option>";
              echo "<option value='php01-2.mid'>生日快樂 2</option>";
              echo "<option value='php01-3.mid'>生日快樂 3</option>";
              echo "<option value='php01-4.mid'>生日快樂 4</option>";
            ?>
          </select> </td>
      </tr>
      <tr bgcolor="#FFFF66">
        <td>卡 片 字 體 ：
          <select name="style">
            <option value='normal' selected>一般
            <option value='italic'>斜體
            <option value='oblique'>偏斜體
          </select>　　
          大小：
          <select name="size">
            <option value="12pt">12pt
            <option value="18pt">18pt
            <option value="24pt">24pt
            <option value="30pt">30pt
            <option value="36pt">36pt
          </select>　　
          顏色：
          <select name="color">
            <option value='#000000' selected>黑色
            <option value='#ff0000'>紅色
            <option value='#ff6633'>橙色
            <option value='#00cc00'>綠色
            <option value='#663399'>深紫色
            <option value='#990000'>咖啡色

          </select> </td>
      </tr>
      <tr bgcolor="#CCFFFF">
        <td valign="top">卡 片 內 容 ：<br />
          　　　　　　
          <textarea name="message" cols="60" rows="6"></textarea></td>
      </tr>
    </table>
    <p align="center">
      <input type="button" value="卡片預覽" onClick="check_form()">
      <input type="reset" value="重新填寫">
    </p>
  </form>
  <p>&nbsp;</p>
</body>

</html>
