<!--切割字串，同時將每一行開頭新增遞增的數字-->
<?php 
	function numbertoContent($instr) {
		$show = explode("\n", $instr);
		$ans = "";
		for ($i=1; $i<=count($show); $i++) 
			$ans .= $i.":".$show[$i-1]."<br/>";
		return $ans;
	}
?>

<HEAD>
	<!--統一編碼-->
	<meta charset="utf-8">
	<STYLE type="text/css">
		<!--
		.Title {
			font-size: 38px;
			color: #DD701E;
			font-style: italic;
			padding-top: 0.5cm
		}

		.Table {
			font-family: "新細明體";
			font-size: 24px;
			color: #BC5034;
			margin-left: 2cm;
		}

		.Content {
			font-family: "新細明體";
			font-size: 32px;
			color: #0066FF;
			margin-left: 2cm;
			padding-top: 0.5cm
		}

		.Button {
			font-size: 18px;
			color: #669900;
			padding-top: 0.2cm;
			padding-bottom: 0.2cm;
			margin-top: 0.6cm;
			margin-left: 12cm
		}

		.Memo {
			font-size: 18px;
			color: #0066FF;
			margin-left: 2cm;
			padding-top: 0.5cm;
			line-height: 0.6cm
		}
		-->
	</STYLE>
</HEAD>

<BODY>
	<!--使用者送出-->
	<?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$title = $_POST["title"];
			$weather = $_POST["weather"];
			$date = date("Y/MMM/d");
			$note = $_POST["note"];
			$share = $_POST["share"];

			$show =<<< myDoc
				*------------------------------------------------*<BR />
				日期：$date 心情天氣：$weather <BR />
				--------------------------------------------<BR />
				標題：$title <BR />
				--------------------------------------------<BR />
				心情記事：<BR />
				--------------------------------------------<BR />
				$note <BR />
				--------------------------------------------<BR />
				分享好友：$share <BR />
				*------------------------------------------------*<BR />
			myDoc;

			echo numbertoContent($show);
		}
		else {
	?>

	<P CLASS="Title">熊的異想世界</P>
	<HR CLASS="Title" ALIGN="LEFT" WIDTH="60%" SIZE="5" />
	<DIV CLASS="Content">個人心情記事簿......</DIV><BR />

	<FORM METHOD=POST ACTION="">
		<TABLE CLASS="Table" CELLPADDING="5" CELLSPACING="5">
			<TR>
				<TD>心情標題</TD>
				<!--新增名稱-->
				<TD><INPUT TYPE="text" SIZE="50" name="title"></TD>
			</TR>
			<TR>
				<TD>心情天氣</TD>
				<TD>
					<!--新增名稱、值、圖片來源-->
					<INPUT TYPE="RADIO" name="weather" value="晴天" CHECKED > <IMG SRC="images/weather_01.jpg">　　　
					<INPUT TYPE="RADIO" name="weather" value="陰天"> <IMG SRC="images/weather_02.jpg">　　　
					<INPUT TYPE="RADIO" name="weather" value="雨天"> <IMG SRC="images/weather_03.jpg">　　　
				</TD>
			</TR>
			<TR>
				<TD>心情記事</TD>
				<!--新增名稱-->
				<TD><TEXTAREA ROWS="12" COLS="60" name="note"></TEXTAREA></TD>
			</TR>
			<TR>
				<TD>與好友分享</TD>
				<!--新增名稱-->
				<TD><INPUT TYPE="text" SIZE="40" name="share"></TD>
			</TR>
		</TABLE>
		<HR CLASS="Title" ALIGN="LEFT" WIDTH="60%" SIZE="5" />
		<INPUT TYPE="submit" VALUE="寫下來吧！" CLASS="Button">
	</FORM>
</BODY>

<?php 
	} 
?>
