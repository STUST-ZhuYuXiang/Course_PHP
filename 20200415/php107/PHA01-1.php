<!--檢查不雅字詞方法-->
<?php
	function hasBadWords($name) {
		$badWords = array("FUCK","SHIT","DEVIL","HELL","BASTARDY");
		for ($i=0; $i<count($badWords); $i++)
			if (strtoupper($name) == $badWords[$i])
				break;

		if ($i == count($badWords))
			return false;
		else
			return true;
	}
?>

<html>

<HEAD>
	<meta charset="utf-8">
	<STYLE type="text/css">
		<!--
		.Title {
			font-size: 38px;
			color: #009933;
			font-style: italic;
			padding-top: 0.5cm
		}

		.Table {
			font-family: "新細明體";
			font-size: 24px;
			color: #666600;
			margin-left: 2cm;
		}

		.Content {
			font-family: "新細明體";
			font-size: 32px;
			color: #AC9F09;
			margin-left: 1.5cm;
			padding-top: 0.5cm;
		}

		.Button {
			font-size: 18px;
			color: #669900;
			padding-top: 0.2cm;
			margin-left: 12cm;
			margin-top: 0.5cm
		}
		-->
	</STYLE>
</HEAD>

<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$name = $_POST["name"];
			$sex = $_POST["sex"];
			$email = $_POST["email"];
			$job = $_POST["job"];
			$phone = $_POST["phone"];
			$rigister = $_POST["rigister"];

			if ($sex == 0)
				$sex = "先生";
			else
				$sex = "小姐";
			
			// 檢查信箱格式
			if (preg_match("/\S+@\S+\.tw/", $email))
				echo "correct";
			else 
				echo "<FONT SIZE='4' COLOR='#FF0000'>您的email格式不正確，請詳讀入會規則......</FONT>";
			
			// 讀取使用者職業選項
			$jobs = $job[0];
			for ($i=1; $i<count($job); $i++) {
				$jobs .= "," . $job[$i];
			}

			// 輸入指定變數，新增指定樣式
			$show =<<< MyDoc
				<!--當答案檢查確認後，顯示-->
				<DIV class="Content" style="width: 40%; background-image: url(images/background.jpg);">
					工作區域：xxx
					<HR /><BR />
					$name $sex 歡迎您：<BR />
					------------------------------------------
					<BLOCKQUOTE>
						您登記使用的email為：$email <BR />
						電話為：$phone <BR />
						您的職業類型包括：$jobs <BR />
					</BLOCKQUOTE>
				</DIV>
			MyDoc;
			echo $show;

			die();
		}
	?>

	<P CLASS="Title">小瓢蟲的部落格</P>
	<HR CLASS="Title" ALIGN="LEFT" WIDTH="60%" SIZE="5" />
	<DIV CLASS="Content"><U>
			<新增會員>
		</U></DIV><BR />

	<FORM METHOD=POST ACTION="">
		<TABLE CLASS="Table" CELLPADDING="5" CELLSPACING="5">
			<TR>
				<TD>姓名</TD>
				<TD><INPUT TYPE="text" name="name" SIZE="30"></TD>
			</TR>
			<TR>
				<TD>性別</TD>
				<TD>
					<INPUT TYPE="RADIO" name="sex" VALUE="0" CHECKED> 男
					<INPUT TYPE="RADIO" name="sex" VALUE="1"> 女
				</TD>
			</TR>
			<TR>
				<TD>email</TD>
				<TD><INPUT TYPE="text" name="email" SIZE="40"></TD>
			</TR>
			<TR>
				<TD>職業類型</TD>
				<TD>
					<!--選項給name屬性為陣列，將value值改成指定名稱-->
					<SELECT name="job[]" SIZE="4" MULTIPLE>
						<OPTION VALUE="學生" SELECTED>&nbsp;學生&nbsp;</OPTION>
						<OPTION VALUE="資訊業">&nbsp;資訊業&nbsp;</OPTION>
						<OPTION VALUE="服務業">&nbsp;服務業&nbsp;</OPTION>
						<OPTION VALUE="金融業">&nbsp;金融業&nbsp;</OPTION>
						<OPTION VALUE="通訊業">&nbsp;通訊業&nbsp;</OPTION>
						<OPTION VALUE="製造業">&nbsp;製造業&nbsp;</OPTION>
					</SELECT>
				</TD>
			</TR>
			<TR>
				<TD>電話</TD>
				<TD><INPUT TYPE="text" name="phone" SIZE="20"></TD>
			</TR>
		</TABLE>

		<!--新增隱藏欄位-->
		<input type="hidden" name="rigister" value="">

		<HR CLASS="Title" ALIGN="LEFT" WIDTH="60%" SIZE="5" />
		<INPUT TYPE="submit" VALUE="註冊" CLASS="Button">
	</FORM>
</body>

</html>
