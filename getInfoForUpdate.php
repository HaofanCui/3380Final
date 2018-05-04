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
<h1 align="center">Update Player Info</h1>
<hr>

<form action="updateInfo.php" method="post">
<table border="1" align="center">

<tr><td>id</td><td><input type="text" name="playerId" value="<?php echo $playerId?>" readonly="readonly"></td></tr>
<tr><td>name</td><td><input type="text" name="playerName" value="<?php echo $playerName ?>"></td></tr>
<tr><td>dateofbirth</td><td><input type="text" name="dateofbirth" value="<?php echo $dateofbirth?>"></td></tr>
<tr><td>team</td><td><input type="text" name="playerTeam" value="<?php echo $playerTeam?>"></td></tr>
<tr><td>number</td><td><input type="text" name="playerNum" value="<?php echo $playerNum ?>"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="submit">&nbsp;<input type="reset" value="reset">&nbsp;<input type="button" value="return" onclick="javascript:window.location.href='showInfo.php';"></td></tr>
</table>
</form>
</body>
</html>