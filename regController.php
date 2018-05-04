<?php

$userId=$_POST['userid'];
$userName=$_POST['username'];
$passWord=$_POST['password'];
 
//connect
$conn=mysql_connect("sql302.epizy.com","epiz_21516939","123chf123");
if (!$conn) {
	die("connect fail".mysql_errno());
}
mysql_query("set names utf8",$conn) or die("word fail".mysql_errno());
mysql_select_db('epiz_21516939_footballplayerdb',$conn) or die("Seclect DB Fail".mysql_errno()) ;

$sql="INSERT INTO `userinfo`(`userid`, `username`, `password`) VALUES ('$userId','$userName','$passWord')";
$mark=mysql_query($sql,$conn);
mysql_close($conn);
//judge 
if (!$mark) {echo"Register Wrong"
	;
	header("Location: reg.php?errno=Register Fail, id Repeat!");
}else{
	echo"Register Successful!";
	header("Location: index.php?errno=1");
}
?>