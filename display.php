<?php
$con=mysqli_connect("localhost","root","","test1");

		if(isset($_POST['user_name']))
		{
			$username=mysqli_real_escape_string($con,$_POST['user_name']);
			$sql="SELECT * FROM `user_login` WHERE `username`='".$username."'";
			$res=mysqli_query($con,$sql);
			echo mysqli_num_rows($res);
		}
		
?>
