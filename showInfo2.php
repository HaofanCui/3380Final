<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
    h1{
        height: 100px;
        }
       body{
        font-size:1.5em;
        font-weight:bold;
        background-image:url('back2.jpg');
        background-size:100%;
        background-position: 100px;}
        
            table, th, td {
    border: 5px solid black;
    border-collapse: collapse;
}
    
#basketball{
position:relative;
-webkit-animation: mymove 10s infinite;
animation: mymove 10s infinite;
}
@-webkit-keyframes mymove{
 from {left: 0px;}
 to {right: 0px;}
}
@keyframes mymove{
 from {left: 0px;}
 to {right:0px;}
}
</style>
<title>reg</title>
</head>
<body>
<h1 align="center">Team Information</h1>
<hr>
<h3 align="center"><a href="addInfo1.php">Add Team</a></h3>
<div align="center">

</div>
<br>

<table width=""><tr align="centeer"><td width="21%"></td></tr></table>
<tr align='centeer'><td width='12%' align='center'>teamname</td><td width='12%' align='center'>email</td><td width='12%' align='center'>located</td><td width='12%' align='center'>website</td><td width='12%' align='center'>dial</td><td width='12%' align='center'>Set</td><td width='12%' align='center'>Set</td></tr>";
while($row=mysql_fetch_assoc($res)){
echo "<tr align='centeer'><td align='center'>{$row['teamname']}</td><td align='center'>{$row['email']}</td><td align='center'>{$row['located']}</td><td align='center'>{$row['website']}</td><td align='center'>{$row['dial']}</td><td align='center'><a href='getInfoForUpdate1.php?teamname={$row[' teamname']}''>Update</a></td><td align='center'><a href='deleteController1.php?teamname={$row[' teamname']}'>Delete</a></td></tr>";
}
echo "<tr bgcolor='#CCFFFF'><td colspan='7' align='center' bordercolor='#CCFFFF'><a href='showInfo2.php?pageNow=1'>Firstpage</a>&nbsp;"; if ($pageNow>1){$pagePre=$pageNow-1;
echo "<a href='showInfo2.php?pageNow=$pagePre'>Pre Page</a>" ;}
echo "&nbsp;";
if($pageNow<$pagecount)
{ $pageNext=$pageNow+1;
echo "<a href='showInfo2.php?pageNow=$pageNext'>Next Page</a>&nbsp;"; }
echo "<a href='showInfo2.php?pageNow=$pagecount'>Last Page</a>";
echo "<a href='showInfo.php'>View PlayerInfo</a></td></tr>";
echo "</table>";?>
<div>
<img src="back1.png" id="basketball" alt="basketball" height="70" weight="70">
</div>
</body>
</html>