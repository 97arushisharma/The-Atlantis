<html>
<head>
<title>Assignment 4</title>
</head>

<body>

	



<div style="background-image:url('k9.jpeg'); width:100%; height:100%;">

<ul style="padding:30px;background-color:green;">
<li style="display:inline; padding:20px;font-size:20px;"><a href="iwt21.html"><b>HOME</b></a></li>
<li style="display:inline; padding:20px;font-size:20px;"><a href="iwt22.html"><b>MENU</b></a></li>
<li style="display:inline; padding:20px;font-size:20px;"><a href="iwt23.html"><b>BILLING</b></a></li>
<li style="display:inline; padding:20px;font-size:20px;"><a href="iwt31.html"><b>GO KOREA</b></a></li>
<li style="display:inline; padding:20px;font-size:20px;"><a href="iwt4.html"><b>SIGN IN</b></a></li>
</ul>

<h1 style="background-color:#4A148C; color:white;text-align:center;width:100%;padding:20px;">REGISTER HERE!</h1>
<div style="width:600; height:150%; margin:auto;background:#80DEEA;padding:30px;">



<?php
 		if(isset($_POST['btn-submit']))
		{
 			$conn = new mysqli("localhost", "root", "40027", "Atlantis");
 			if($conn->connect_error){
 				die('connection error');
 			}
 			$strsql = "INSERT INTO `Register`(`firstname`) VALUES ('{$_POST	['firstname']}')";
			$strsql1 = "INSERT INTO `Register`(`lastname`) VALUES ('{$_POST['lastname']}')";
			$strsql2 = "INSERT INTO `Register`(`gender`) VALUES ('{$_POST['gender']}')";
			$strsql3 = "INSERT INTO `Register`(`city`) VALUES ('{$_POST['city']}')";	
			$strsql4 = "INSERT INTO `Register`(`mobile`) VALUES ('{$_POST['mobile']}')";
			$strsql5 = "INSERT INTO `Register`(`email`) VALUES ('{$_POST['email']}')";
			$strsql6 = "INSERT INTO `Register`(`address`) VALUES ('{$_POST['address']}')";
			$strsql7 = "INSERT INTO `Register`(`username`) VALUES ('{$_POST['username']}')";
			$strsql8 = "INSERT INTO `Register`(`password`) VALUES ('{$_POST['password']}')";
 			if($conn->query($strsql)){
 				echo "<script>alert('insert successful');</script>";
 			}else{
 			echo "<script>alert('insert unsuccessful');</script>";
 			}
 			
 			}
 			
 ?>



<form action="" method="POST" enctype="text/plain">
First Name:<br>
<input type="text" name="firstname" placeholder="Firstname"><br>
Last Name:<br>
<input type="text" name="lastname" placeholder="Lastname"><br><br>

Gender:<br>

<input type="radio" name="gender" value="male" checked>Male<br>
<input type="radio" name="gender" value="female">Female<br>
<input type="radio" name="gender" value="others">Others<br><br>
City Name:

<select name="city">
<option value="delhi">Delhi</option>
<option value="chandigarh">Chandigarh</option>
<option value="bangalore">Bangalore</option>
<option value="hyderabad">Hyderabad</option>
<option value="kolkata">Kolkata</option>
<option value="chennai">Chennai</option>
<option value="mumbai" selected>Mumbai</option>
</select>
<br><br>

Mobile No.:<br>
<input type="text" name="mobile"><br><br>
E-mail:<br>
<textarea name="email" rows="2" cols="70" placeholder="E-mail"></textarea><br><br>

Address:<br>

<textarea name="address" rows="10" cols="70" placeholder="Address"></textarea><br><br><br>

<h3>SIGN-IN INFORMATION</h3>
User Name:<br>
<input type="text" name="username"><br>
Password:<br>
<input type="password" name="password"><br><br>
Confirm Password:<br>
<input type="hidden" name="password1"><br><br> 

<input type="submit" value="Register">
<input type="reset" value="Reset">
</form>
</div>

<div style="background-color:black; color:white;"><p style="text-align:center;">Copy rights reserved by: Arushi Sharma UE158023</p>
</div>
</body>
</html>
