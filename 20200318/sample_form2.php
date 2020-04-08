<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <?php
            echo $_POST["account"].",".$_POST["password"];
            echo "<br/><hr>";

            // 檢查使用者
            if (isset($_POST["spot"]))
		        echo $_POST["spot"][0];

            // 使用nl2br()可以自動斷行
            echo nl2br($_POST["comments"]);
        ?>
    </body>
</html>