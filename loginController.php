<?php 
$userId=$_POST['userid'];
$passWord=$_POST['password'];
$conn=mysql_connect("sql302.epizy.com","epiz_21516939","123chf123");
if (!$conn) {
	die("Connect Fail".mysql_errno());
}
mysql_query("set names utf8",$conn) or die("Word Fail".mysql_errno());
mysql_select_db('epiz_21516939_footballplayerdb',$conn) or die("Select DB Fail".mysql_errno()) ;
$sql="select password,username from userinfo where userid='$userId'";
$res=mysql_query($sql,$conn);
if ($row=mysql_fetch_assoc($res)) {
	if ($passWord!=0&&$row['password']==$passWord) {
		echo "Successfully Login！";
		header("Location: showInfo.php");
		exit();
	};
	echo "Password Wrong!";
    header("Location: index.php?errno=2");
	exit();
}
echo "Userid Wrong!";
header("Location: index.php?errno=2");
exit();








?>