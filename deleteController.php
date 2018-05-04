<?php
$playerId=$_GET['playerid'];
$conn=mysql_connect("sql302.epizy.com","epiz_21516939","123chf123");
if(!$conn){
	die("Connect Fail".mysql_errno());
	
}
mysql_query("set names utf8",$conn) or die("Word Fail".mysql_errno());
mysql_select_db('epiz_21516939_footballplayerdb',$conn) or die("Select DB Fail".mysql_errno());
$sql="DELETE FROM `epiz_21516939_footballplayerdb`.`playerinfo` WHERE `playerinfo`.`playerid` =$playerId";
$mark=mysql_query($sql,$conn);
if ($mark) {
	echo "Delete Fail";
		header("Location: showInfo.php?errno=3");
		exit();
}
?>