<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <!--表單處理，method是get會顯示在網址上，是post會包在檔頭-->
        <form method="post" action="sample0318_form2.php">
            <!--輸入框-->
            <span>帳號：</span>
            <input type="text" name="account"><br/>
            <span>密碼：</span>
            <input type="text" name="password"><br/>

            <input type="submit" name="user" value="送出">
            <br/><hr>

            <!--單選-->
            <input type="radio" name="gender" value="男" checked>
            <span>男</span>
            <input type="radio" name="gender" value="女">
            <span>女</span>
            <br/>

            <!--核取方塊，使用陣列存取-->
            <input type="checkbox" name="spot[]" value="游泳">
            <span>游泳</span>    
            <input type="checkbox" name="spot[]" value="登山">
            <span>登山</span>
            <input type="checkbox" name="spot[]" value="打球">
            <span>打球</span>
            <br/>

            <!--下拉式選單-->
            <span>歲數：</span>
            <select name="income">
                <option value="0">0~10</option>
                <option value="1">10~19</option>
                <option value="2">20~29</option>
                <option value="3">30~39</option>
            </select>
            <br/>

            <!--文字方塊-->
            <textarea name="comments" rows="5" cols="50"></textarea>
            <br/>
            <input type="submit" name="other" value="送出">
        </form> 

        <!--自己傳送資料到自己-->
        <?php
            if ($_SERVER["REQUEST_METHOD"]=="POST")
                echo $_POST["income"];
        ?>
    </body>
</html>