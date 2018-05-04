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
        background-image:url('timg.jpg');
        background-size:100%;
        background-position: 100%;}
        
        
    </style>
<title>welcome!</title>
</head>
<body>
<h1 align="center">Log In</h1>
<hr>
<div align="center">
</div>
<form action="loginController.php" method="post">
<table align="center">
<tr>
<td>Id:</td>
<td><input type="text" name="userid"> </td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password"></td>
</tr>
<tr align="center">
<td><input type="submit" value="Log In"></td>
<td>
<input type="button" value="Register" onclick="window.location.href='reg.php';">
</td>
</tr>
</table>
</form>
</body>
</html>