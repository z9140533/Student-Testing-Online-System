<?php include("db.php"); ?>
<?php 
	$num = $_GET["num"];
	$sql = sprintf("DELETE FROM aaa WHERE Num = %s", $num);
	mysql_query($sql);
	
	header('Location: list1.php');
?>