<?php include "logincheck"; ?>
<!DOCTYPE html>
<html>
<head>
	


<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>T-Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="E-learning site for Students. Learn and Earn" />
	<meta name="keywords" content="Start learning with a wide range of free online courses and develop your digital Knowledge, boost your CV with our courses" />
	<meta name="author" content="Mike-Tech" />

	<!-- 
	//////////////////////////////////////////////////////
 
	DESIGNED & DEVELOPED by Mike-Tech
		
	Website: 		http://Mikeih2253.com/
	Email: 			chimikeih@gmail.com
	Twitter: 		http://twitter.com/...
	Facebook: 		https://www.facebook.com/f...

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<link rel="stylesheet" type="text/css" href="style.css" />

</head>

<div id="center"><h1><i class="icon-study"></i>TRAFGOO</h1>
<div id="center-set"> 
<div id="signup">
<div id="signup-st">
<div align="center">
<?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg">Contact Agent For Registration</div> ';
}
if ($remarks=='success') {
echo ' <div id="reg-head" class="headrg">Registration Success</div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg">Registration Failed!, Username exists</div> ';
}
if ($remarks=='error') {
echo ' <div id="reg-head-fail" class="headrg">Registration Failed! <br> Error: '.$_GET['value'].' </div> ';
}
?>
</div>
<h3 align="center" style="color: white"><a href="{{route('goToPage')}}?page=paymentgate"><h3 style="color: white"><button style="padding: 5px;padding-right: 60px; padding-left: 60px;"><b>Click to purchase your Pin</b></button></h3></a></h3>
<div id="reg-bottom" class="btmrg">Learn & Earn</div>
</div>
</div>
<div id="login">
<div id="login-st">
<form action="" method="POST" id="signin" id="reg">
<?php
$remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg">Login Here</div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg">Login Failed!, Invalid Credentials</div> ';
}
?>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td><input type="text" id="tb-box" name="username" /></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Password:</div></td>
<td><input id="tb-box" type="password" name="password" /></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Login" id="st-btn"/></div>
</form>
<div id="reg-bottom" class="btmrg">Learn & Earn</div>
</div>
</div>
</div>
</div>
<div id="footer"><p>&copy; 2020 Trafgoo.Edu. All Rights Reserved.</p></div>
</body>
</html>