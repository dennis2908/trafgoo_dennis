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
<div id="reg-head" class="headrg">Contact Agent For Registration</div>
</div>
<h3 align="center" style="color: white"><a href="paymentgate.html"><h3 style="color: white"><button style="padding: 5px;padding-right: 60px; padding-left: 60px;"><b>Click to purchase your Pin</b></button></h3></a></h3>
<div id="reg-bottom" class="btmrg">Learn & Earn</div>
</div>
</div>
<div id="login">
<div id="login-st">
 <form id="login-form" class="form" action="{{route('dologin')}}" method="post">
						@csrf
<div id="reg-head" class="headrg">Login Here</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td><input type="text" id="tb-box" name="username" required /></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Password:</div></td>
<td><input id="tb-box" type="password" name="password" required /></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Login" id="st-btn"/></div>
</form>
<div id="reg-bottom" class="btmrg">Learn & Earn</div>
</div>
</div>
</div>
</div>
<div id="footer"><div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2020 Trafgoo.Edu. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="{{route('goToPage')}}?page=http://freehtml5.co/" target="_blank">Dennis Manullang</a> +628809615182 <a href="{{route('goToPage')}}?page=#" target="_blank">Learn </a> &amp; <a href="{{route('goToPage')}}?page=#" target="_blank"> Earn</a></small>
					</p>
				</div>
			</div></div>
</body>
</html>