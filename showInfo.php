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
        
    </style>
<title>reg</title>
</head>
<body>
<h1 align="center">Player Information Manage</h1>
<hr>
<h3 align="center"><a href="addInfo.php">Add Player</a></h3>
<div align="center">

</div>
<br>

<table width=""><tr align="centeer"><td width="21%"></td></tr></table>
<tr align='centeer'><td width='12%' align='center'>ID</td><td width='12%' align='center'>Name</td><td width='12%' align='center'>dateofbirth</td><td width='12%' align='center'>Team</td><td width='12%' align='center'>Number</td><td width='12%' align='center'>Set</td><td width='12%' align='center'>Set</td></tr>";
while($row=mysql_fetch_assoc($res)){
echo "<tr align='centeer'><td align='center'>{$row['playerid']}</td><td align='center'>{$row['playername']}</td><td align='center'>{$row['dateofbirth']}</td><td align='center'>{$row['playerteam']}</td><td align='center'>{$row['playernum']}</td><td align='center'><a href='getInfoForUpdate.php?playerid={$row[' playerid']}''>Update</a></td><td align='center'><a href='deleteController.php?playerid={$row[' playerid']}'>Delete</a></td></tr>";
}
echo "<tr bgcolor='#CCFFFF'><td colspan='7' align='center' bordercolor='#CCFFFF'><a href='showInfo.php?pageNow=1'>First Page</a>&nbsp;"; if ($pageNow>1){$pagePre=$pageNow-1; echo "<a href='showInfo.php?pageNow=$pagePre'>Previous Page</a>" ;}echo "&nbsp;"; if($pageNow<$pagecount){$pageNext=$pageNow+1; echo "<a href='showInfo.php?pageNow=$pageNext'>Next Page</a>&nbsp;"; }echo "<a href='showInfo.php?pageNow=$pagecount'>Last Page</a>"; echo "<a href='showInfo2.php'>View Team information</a></td></tr>";
echo "&nbsp;";
echo "</table>";?>
</body>
</html>