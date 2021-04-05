<!DOCTYPE HTML>
<html>
<head>
<title>Login Sistem</title>
<style type="text/css">
body {
    font-family: monospace;
    font-size: 20px;
}
#body {
    /*background-color: aqua;*/
	position:absolute;
 	margin-left:auto;
 	margin-right:auto;
 	margin-top:auto;
 	margin-bottom:auto;
    border-radius: 4px;
	left:0;
	right:0;
	top:0;
	bottom :0;	
	border:1px solid #333;;
}

#log_head{
	/*background-image: url(images/menu-biru.gif);*/
	padding:8px;
	border:1px solid #000;
    border-radius: 4px;
	color:#FFF;
	text-align:center;
	margin-bottom:10px;
}
#log_cont{
    padding: 7px;
}
#username{
    padding: 8px;
    margin: 6px;
}
</style>

</head>
<body>
<div id="body" style="width:400px; height:200px;">
	
    <!-- <div id="log_head"><strong>Menu Login</strong>
    </div> -->
    <div id="log_cont">
    <form action="cek-login.php" method="POST">
    <table width="100%" >
    	<tr>
        	<td width="20%">Username</td>
            <td>:</td>
            <td><input type="text" name="user" id="username" size="30%" required></td>
        </tr>
        <tr>
        	<td>Password</td>
            <td>:</td>
            <td><input type="password" name="pass" id="username" size="30%" required></td>
        </tr>
        <tr>
        	<td></td>
            <td></td>
            <td><button type="submit" name="log">LOGIN</td>
        </tr>
    </table>
    </form>
    
    
</div>
</body>
</html>