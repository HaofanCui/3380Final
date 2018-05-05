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
<h1 align="center">Update Team Info</h1>
<hr>

<form action="updateInfo1.php" method="post">
<table border="1" align="center">

<tr><td>teamname</td><td><input type="text" name="teamname" value="<?php echo $teamname?>" readonly="readonly"></td></tr>
<tr><td>email</td><td><input type="text" name="email" value="<?php echo $email ?>"></td></tr>
<tr><td>located</td><td><input type="text" name="located" value="<?php echo $located?>"></td></tr>
<tr><td>website</td><td><input type="text" name="website" value="<?php echo $website?>"></td></tr>
<tr><td>dial</td><td><input type="text" name="dial" value="<?php echo $dial?>"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="submit">&nbsp;<input type="reset" value="reset">&nbsp;<input type="button" value="return" onclick="javascript:window.location.href='showInfo.php';"></td></tr>
</table>
</form>
</body>
</html>
