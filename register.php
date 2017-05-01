<?php
 		if(isset($_POST['btn-submit'])){
 			$conn = new mysqli("localhost", "root", "40027", "Atlantis");
 			if($conn->connect_error){
 				die('connection error');
 			}
 			$strsql = "INSERT INTO `Register`(`firstname`) VALUES ('{$_POST['firstname']}')";
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
 			}
			else{
 			echo "<script>alert('insert unsuccessful');</script>";
 			}
 			
 			}
 			
 	?>
