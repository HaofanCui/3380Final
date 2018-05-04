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
<title>reg</title>
</head>
<body>
<h1>Register</h1>
<hr>

<form action="regController.php" method="post">
<table>
<tr>
<td>Userid:</td><td><input type="text" name="userid"></td>
</tr>
<tr>
<td>Username:</td><td><input type="text" name="username"></td>
</tr>
<tr>
<td>password:</td><td><input type="password" name="password"></td>
</tr>
<tr>
<td><input type="submit" value="submit"></td><td><input type="reset" value="reset"></td>
</tr>
</table>
</form>
</body>
</html>