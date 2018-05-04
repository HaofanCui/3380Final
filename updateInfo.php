<?php 
$playerId=$_POST['playerId'];
$playerName=$_POST['playerName'];
$dateofbirth=$_POST['dateofbirth'];
$playerTeam=$_POST['playerTeam'];
$playerNum=$_POST['playerNum'];
$conn=mysql_connect("sql302.epizy.com","epiz_21516939","123chf123");
if (!$conn) {
	die("Connect Fail".mysql_errno());
}
mysql_query("set names utf8",$conn) or die("Word Fail".mysql_errno());
mysql_select_db('epiz_21516939_footballplayerdb',$conn) or die("Select DB Fail".mysql_errno());
$sql="UPDATE `playerinfo` SET `playername`='$playerName',`dateofbirth`='$dateofbirth',`playerteam`='$playerTeam',`playernum`='$playerNum' WHERE `playerid`='$playerId'";
$mark=mysql_query($sql,$conn);
mysql_close($conn);
if ($mark) {
	echo "Update Successful!";
	;
	header("Location: showInfo.php?errno=4");
	exit();
}
else {echo "Update Fail";
;
header("Location: showInfo.php?errno=5");
exit();}














?>
