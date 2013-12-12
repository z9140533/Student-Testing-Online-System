<?php include("db.php"); ?>

<?php
if(isset($_POST["Name"])){
   
   $sql="INSERT INTO aaa (`Name`)VALUES('".$_POST["Name"]."')";
   mysql_query($sql);
   echo $sql;
   exit('<script>alert("資料已新增!");location.href="list1.php";</script>');
  } 
  ?>
<meta http-equiv="Content-Type" content="text/html;charset = UTF-8">
<html>
<head>

<span style="cursor:crosshair"></span>

<title>
</title>
</head>


<font size="5"><a href="list1.php">回題庫清單</a></font>

<hr color=white size=0 align=left width=100%>    


<body background="http://www.khgs.tn.edu.tw/teaching/dp/stu_web/com96/web/g19/images/%E8%83%8C%E6%99%AF1.gif">

<form name="form1" method="post" action="add1.php"> 
<span style="background-color: YELLOW"><font size="5"color="purple"><b>分類名稱 :</b></font></span>
<input type=textarea cols=60 rows=6 name="Name" id="Name" value=""></textarea><p>


<span style="background-color: YELLOW"><font size="5"color="purple"><b>流水編號 :</b></font></span>
<select>
<option>會計
<option>存貨
<option>鎖售

</select><p>
<input type="submit" value="新增">

</form>
</body>
</html>