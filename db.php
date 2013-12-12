
<meta http-equiv="Content-Type" content="text/html;charset = UTF-8">
<?php
if(!($link = mysql_connect("localhost","root","123"))){
  echo"<p><font size='4'><b>與資料庫連線錯誤，請稍後再試</font></b></p>";
  exit();  
}
//connect db
mysql_query("SET NAMES UTF8");
mysql_select_db("demo1");
?>
