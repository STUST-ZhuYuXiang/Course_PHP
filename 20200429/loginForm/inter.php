<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($_POST["btn"] == "login") {
			// 連結資料庫
			try {
    		$pdo = new PDO("mysql:host=localhost;dbname=myuser;", "root", "admin");
  		} catch (PDOException $err) {
    		die("資料庫無法連接");
			}
			
			// 查詢資料表內容
			$stmt = $pdo->prepare("select * from myusers where account=?and password=?");
			$stmt->execute(array($_POST["account"], $_POST["password"]));
			$row = $stmt->fetchAll();
			if (count($row) == 1) {
				header("Location:inter.php");
				die();
			}
		}
		else {
			header("Location:register.php");
			die();
		}
	}
?>

<html>

<head>
	<meta charset="utf-8">

	<!--匯入樣式檔-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>

<body>
	<form id="form1" action="login.php" method="post">
		<div class="container-fluid">
			<div class="form-row">
				<div class="form-group offset-md-3 col-md-4">
					<label for="account">帳號</label>
					<input type="text" class="form-control" id="account" name="account" required>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group offset-md-3 col-md-4">
					<label for="account">密碼</label>
					<input type="text" class="form-control" id="password" name="password" required>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group offset-md-3 col-md-4">
					<button type="submit" class="btn btn-primary btn-lg btn-block" name="btn" value="login">登入</button>
					<button type="submit" class="btn btn-secondary btn-lg btn-block" name="btn" value="register">註冊</button>
				</div>
			</div>
		</div>
	</form>
</body>

</html>
