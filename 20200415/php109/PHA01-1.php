<html>

<head>
   <meta charset="utf-8">
</head>

<body>
   <h2>旅遊住宿費用試算</h2>
   <form method="POST" action="PHA01-2.php">
      <p>旅客姓名：（必填）<input type="text" name="name" size="20"></p>
      <p>電子郵件：（必填）<input type="text" name="email" size="40"></p>
      <p>飯店名稱<font size="3">：</font>
         <select name="hotel">
            <option value="0">國賓大飯店</option>
            <option value="1">中信大飯店</option>
            <option value="2">漢來大飯店</option>
         </select>
      </p>
      <p>房型：
         <input type="radio" name="room" value="0" checked>單人房
         <input type="radio" name="room" value="1">雙人房(一大床或兩小床)
      </p>
      <p>入住天數：
         <input type="checkbox" name="days[]" value="7">星期天
         <input type="checkbox" name="days[]" value="1">星期一
         <input type="checkbox" name="days[]" value="2">星期二
         <input type="checkbox" name="days[]" value="3">星期三
         <input type="checkbox" name="days[]" value="4">星期四
         <input type="checkbox" name="days[]" value="5">星期五
         <input type="checkbox" name="days[]" value="6">星期六
      </p>
      <p>
         <input type="submit" value="試算" name="B1">&nbsp;&nbsp;
         <input type="reset" value="重新設定" name="B2">
      </p>
   </form>
</body>

</html>
