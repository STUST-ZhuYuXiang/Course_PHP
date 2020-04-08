<?php
    ini_set('date.timezone', 'Asia/Taipei');
?>

<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <!--單、雙引號-->
        <?php
            $school = "stust";
            echo "$school";
            echo '$school';
        ?>

        <!--長字串練習-->
        <?php
            $weather = 'A';
            $title = 'B';
            $word = 'C';
            $share = 'D';

            $show =<<< MyDoc
                <div class='Memo'>
                *------------------------------------------------*<BR/>
                    日期：xxx      心情天氣：$weather<BR/>
                --------------------------------------------<BR/>
                    標題：$title<BR/>
                --------------------------------------------<BR/>
                    心情記事：<BR/>
                --------------------------------------------<BR/>
                    $word<BR/>
                --------------------------------------------<BR/>
                    分享好友：$share<BR/>
                *------------------------------------------------*<BR/>
                </div>
            MyDoc;
            
            echo $show."<br/>";
            echo "<hr>";  
        ?>

        <!--字串切割練習-->
        <?php
            $a = "This is a cat.";
            $b = explode(" ", $a);

            echo $b[0]."<br/>";
            echo "<hr>";
        ?>

        <!--顯示時間-->
        <?php
            echo date("Y/M/D")."<br/>";
            echo date("h:i:s")."<br/>";
            echo "<hr>";
        ?>
    </body>
</html>