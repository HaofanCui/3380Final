<?php
$teamname=$_POST['teamname'];
$email=$_POST['email'];
$located=$_POST['located'];
$website=$_POST['website'];
$dial=$_POST['dial'];
$conn=mysql_connect("sql302.epizy.com","epiz_21516939","123chf123");
if (!$conn) {
	die("Connect Fail".mysql_errno());
}
mysql_query("set names utf8",$conn) or die("Word Fail".mysql_errno());
mysql_select_db('epiz_21516939_footballplayerdb',$conn) or die("Select DB Fail".mysql_errno()); 
$sql="INSERT INTO `teaminfo` ( `teamname` , `email` , `located` , `website`, `dial` )
VALUES ('$teamname','$email','$located','$website', '$dial')";
$mark=mysql_query($sql,$conn);
mysql_close($conn);
if ($mark) {
	echo "Add Successful!";
	
	header("Location: showInfo2.php?errno=1");
	exit();
}
else {echo "Add Fail!";
	
	header("Location: showInfo2.php?errno=2");
	exit();}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>