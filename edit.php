<?php include("db.php"); ?>
<?php
	
	if(isset($_POST["hidden_num"]))
	{
		// 修改分類
		$_num = $_POST["hidden_num"];
		$_name = $_POST["txt_name"];
		$_abc = $_POST["slt_abc"];
		$updateSql = sprintf("UPDATE aaa SET Name = '%s', abc = %s WHERE Num = %s", $_name, $_abc, $_num);
		mysql_query($updateSql);

		header('Location: list1.php');
	}

	// 抓目前要修改的該筆資料
	$num = $_GET['num'];
	$sql = "SELECT * FROM aaa WHERE Num = ".$num;
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);

	// 上一層分類資料
	$abcSql = "SELECT * FROM aaa";
	$abcResult = mysql_query($abcSql);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

</head>
<font size="5"><a href="list1.php">回題庫清單</a></font>

<hr color=white size=0 align=left width=100%>

<body background="http://www.khgs.tn.edu.tw/teaching/dp/stu_web/com96/web/g19/images/%E8%83%8C%E6%99%AF1.gif">

			<form role="form" method="post" action="edit.php">
				
					 <span style="background-color: YELLOW"><font size="5"color="purple"><b>分類名稱 :</b></font></span>
					 <input type="text" class="form-control" name="txt_name" id="exampleInputEmail1" value="<?=$row["Name"];?>"><p>
								
					<span style="background-color: YELLOW"><font size="5"color="purple"><b>上一層編號</b></font></span>
					<select name="slt_abc" id="slt_abc">
						<?php while($abcRow = mysql_fetch_assoc($abcResult)) { ?>
						<option value="<?=$abcRow["Num"];?>"><?=$abcRow["Name"];?></option>
						<?php } ?>
					</select><p>
				
				<button name="btn_submit" type="submit" class="btn btn-default">修改</button>
				<input type="hidden" name="hidden_num" value="<?=$num;?>">
			</form>

</body>
</html>
