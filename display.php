<?php
$con=mysqli_connect("localhost","root","","employ");
		if(!$con)
		{
			echo "error";
		}
		if(isset($_POST['enmno']))
		{
			$name=$_POST['enmno'];
			$sql="SELECT * FROM `contry` WHERE `name`='$name'";
			$res=mysqli_query($con,$sql);
			$count=mysqli_num_rows($res);
			if($count>0)
			{
				echo "A";
			}
			else
			{
				echo "D";
			}
		}
		
?>
