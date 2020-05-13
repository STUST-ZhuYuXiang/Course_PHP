## <div style="background-color:#BEBEBE">W9_期中考</div>
分數：100

#### signin.php

自己傳送給自己，因此action屬性填入自己的名稱。
```htmlmixed=
<form class="form-signin" action="signin.php" method="post">
    ...
</form>
```

使用者按下登入後檢查電子郵件與密碼是否空白，如果是請顯示 Email與密碼不可空白，否則將Email導入menu.php。
```php=
<?php
    $errmsg = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        if (empty($email) || empty($password)) {
            $errmsg = "Email與密碼不可空白";
        }
        else {
            header("Location:menu.php?email=".$email);
            die();
        }
    }
?>
```

#### menu.php
輸出singin.php用`header()`傳送email數值，並顯示。
```php=
<?php
    $email = $_GET["email"];
    echo $email;
?>
```

將數值傳送到結算的網頁，填入action屬性。
```php=
<form action="order.php" method="post">
    ...
</form>
```

命名餐點的checkbox和select的name屬性，使用陣列存取。
==假設使用者為勾選checkbox值，那陣列的第一個會為空，而第二個值會向前遞補，因此後面判斷以判斷陣列的第二個是否存在即可。==
```htmlmixed=
<!--Meal 1-->
<input type="checkbox" ... name="order[0][]">
<select ... name="order[0][]"></select>

<!--Meal 2-->
<input type="checkbox" ... name="order[1][]">
<select ... name="order[1][]"></select>

<!--Meal 3-->
<input type="checkbox" ... name="order[2][]">
<select ... name="order[2][]"></select>
```

對email新增隱藏欄位。
```htmlmixed=
<input type="hidden" name="email" value="<?php echo $email; ?>" />
```

#### order.php
輸出menu.php使用`POST`傳送email數值，並顯示。
```php=
<?php
    $email = $_POST["email"];
    echo $email;
?>
```
宣告陣列，方便等等長字串顯示使用。
```php=
<?php
    $pname = array("雙牛起司黑堡", "嫩煎鷄腿堡", "千島黃金蝦堡");
    $uprice = array(99, 85, 79);
    $imgSrc = array("imgs/meal1.jpg", "imgs/meal2.jpg", "imgs/meal3.jpg");
    $totalprice = 0;
?>
```
定義：order[i][0]~[1]分別為勾選、數量。
```php=
<?php
    $order = $_POST["order"];
    
    foreach ($order as $i) {
        if (!empty($i[1])) {
            $meal = $pname[$i[0]];
            $price = $uprice[$i[0]];
            $img = $imgSrc[$i[0]];

            $qty = $i[1];
            oprice = $price * $qty;
            $totalprice += $oprice;

            $oitem =<<< MyDoc
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="$img"/>
                    </div>
                    <div class="col-md-6 offset-md-2">
                        <h4 class="text-primary">$meal</h4>
                        <p>單價:$price 數量:$qty</p>
                        <p class="text-danger">金額:$oprice</p>
                    </div>
                </div>
            MyDoc;
            echo $oitem;
        }
    }
    echo "<h1 class='text-danger'>總金額:".$totalprice."</h1>";
?>
```
