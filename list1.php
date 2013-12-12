<?php include("db.php"); ?>
<?php 
	$sql = "SELECT * FROM aaa";
    $result = mysql_query($sql);
	
?>
 <meta charset="utf-8">
<html>
<head>
<title>
</title>
</head>
<hr color=white size=0 align=left width=100%>  
<body background="http://www.khgs.tn.edu.tw/teaching/dp/stu_web/com96/web/g19/images/%E8%83%8C%E6%99%AF1.gif">
		<a href="add1.php" class="btn btn-default">新增</a>
			<table class="table">
				<thead>
					<tr>
						<th>
							<span style="background-color: YELLOW"><font size="5"color="purple"><b>#</b></font></span>
						</th>
						<th>
							<span style="background-color: YELLOW"><font size="5"color="purple"><b>分類名稱 :</b></font></span>
						</th>
						<th>
							<span style="background-color: YELLOW"><font size="5"color="purple"><b>上一層編號 :</b></font></span>
						</th>
						<th>
							<span style="background-color: YELLOW"><font size="5"color="purple"><b>動作 :</b></font></span>
						</th>
					</tr>
				</thead>
					<tbody>
					<?php while ($row = mysql_fetch_assoc($result)) { ?>
					<tr>
						<td>
						<?=$row["Num"];?>
						</td>
						<td>
						<?=$row["Name"];?>
						</td>
						<td>
						<?=$row["abc"];?>
						</td>
						<td>
							<a href="edit.php?num=<?=$row["Num"];?>" class="btn btn-default">修改</a>
							<a href="del.php?num=<?=$row["Num"];?>"  class="btn btn-default">刪除</a>
						</td>
					</tr>
				<?php } ?>
					
				</tbody>
						
						
					
				
			</table>
		</div>
	</div>
</div>

</body>
</html>