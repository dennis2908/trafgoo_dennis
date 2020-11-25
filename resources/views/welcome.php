<?php
 include('session');
?>
<!DOCTYPE html>
<html>
<head>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>T-Profile</title>
</head>
<body>
<div id="center"><h1>TRAFGOO</h1></div>
<div id="center-set">
<h1 align='center'>Welcome <?php echo $loggedin_session; ?>,</h1>
<div id="contentbox">
<?php
$sql="SELECT * FROM member where mem_id=$loggedin_id";
$result=mysqli_query($con,$sql);

while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Reg id:</div> </td>
<td class="tl-4"><?php echo $rows['mem_id']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td class="tl-4"><?php echo $rows['username']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
<td class="tl-4"><?php echo $rows['fname']; ?> <?php echo $rows['lname']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email id:</div></td>
<td class="tl-4"><?php echo $rows['address']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Bank Name:</div></td>
<td class="tl-4"><?php echo $rows['bname']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Acct. Name:</div></td>
<td class="tl-4"><?php echo $rows['acname']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Acct. No:</div></td>
<td class="tl-4"><?php echo $rows['acnum']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Coin:</div></td>
<td class="tl-4"><?php echo $rows['coin']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Ref. Name:</div></td>
<td class="tl-4"><?php echo $rows['refname']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Status:</div></td>
<td class="tl-4">Paid</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Amount:</div></td>
<td class="tl-4">N1,000</td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Payout:</div></td>
<td class="tl-4">N7,000</td>
</tr>
</table>
<div id="reg-bottom" class="btmrg">Learn & Earn</div>
</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="{{route('goToPage')}}?page=edit?id=<?php echo $rows['mem_id']; ?>" id="st-btn">Update Profile</a></div>
<div id="st"><a href="{{route('goToPage')}}?page=logout" id="st-btn">Sign Out</a></div>
<div id="st"><a href="{{route('goToPage')}}?page=deleteac" id="st-btn">Delete Account</a></div>
</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>
</div>
</br>
<div id="footer"><p> 2018-2020 Trafgoo.com|18+</p></div>
</body>
</html>