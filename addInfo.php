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
        background-image:url('timg (3).jpg');
        background-size:100%;
        background-position: 100%;}
        
        
    </style>
<title>reg</title>
</head>
<body>
<h1 align="center">Add Player Info</h1>
<hr>
<form action="addInfoController.php" method="post">
<table align="center" border="1">
<tr><td>Name</td><th><input type="text" name="playername"></th></tr>
<tr><td>Dateofbirth</td><th><input type="text" name="dateofbirth"></th></tr>
<tr><td>Team</td><th><input type="text" name="playerteam"></th></tr>
<tr><td>Number</td><th><input type="text" name="playernum"></th></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Submit">&nbsp;&nbsp;<input type="reset" value="Reset"></td></tr>
</table>
</form>
</body>