<?php
$playerName=$_POST['playername'];
$dateofbirth=$_POST['dateofbirth'];
$playerTeam=$_POST['playerteam'];
$playerNum=$_POST['playernum'];
$conn=mysql_connect("sql302.epizy.com","epiz_21516939","123chf123");
if (!$conn) {
	die("Connect Fail".mysql_errno());
}
mysql_query("set names utf8",$conn) or die("Word Fail".mysql_errno());
mysql_select_db('epiz_21516939_footballplayerdb',$conn) or die("Select DB Fail".mysql_errno()); 
$sql="INSERT INTO `playerinfo` ( `playername` , `dateofbirth` , `playerteam` , `playernum` )
VALUES ('$playerName','$dateofbirth','$playerTeam','$playerNum')";
$mark=mysql_query($sql,$conn);
mysql_close($conn);
if ($mark) {
	echo "Add Successful!";
	
	header("Location: showInfo.php?errno=1");
	exit();
}
else {echo "Add Fail!";
	
	header("Location: showInfo.php?errno=2");
	exit();}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>