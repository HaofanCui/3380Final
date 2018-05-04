<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>reg</title>
</head>
<body >
<h1 align="center" >Update Team Info</h1>
<hr>
<?php
$teamname=$_GET['teamname'];
$conn=mysql_connect("sql302.epizy.com","epiz_21516939","123chf123");
if (!$conn) {
	die("Connect Fail".mysql_errno());
}
mysql_query("set names utf8",$conn) or die("Word Fail".mysql_errno());
mysql_select_db('epiz_21516939_footballplayerdb',$conn) or die("Select DB Fail".mysql_errno());
$sql="SELECT `teamname`,`email`, `located`, `website`, `dial` FROM `teaminfo` WHERE 'teamname'='$teamname'";
$res=mysql_query($sql,$conn);
?>
<form action="updateInfo1.php" method="post">
<table border="1" align="center">
<?php 
while ($row=mysql_fetch_assoc($res)){
$teamname=$row['teamname'];
$email=$row['email'];
$located=$row['located'];
$website=$row['website'];
$dial=$row['dial'];
}
?>

<tr><td>teamname</td><td><input type="text" name="teamname" value="<?php echo $teamname?>" readonly="readonly"></td></tr>
<tr><td>email</td><td><input type="text" name="email" value="<?php echo $email ?>"></td></tr>
<tr><td>located</td><td><input type="text" name="located" value= "<?php echo $located?>" ></td></tr>
<tr><td>website</td><td><input type="text" name="captain" value= "<?php echo $captain?>" ></td></tr>
<tr><td>dial</td><td><input type="text" name="dial" value= "<?php echo $dial?>" ></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="submit">&nbsp;<input type="reset" value="reset">&nbsp;<input type="button" value="返回" onclick="javascript:window.location.href='showInfo.php';"></td></tr>
</table>

</form>

</body>
</html>