<?php
	SESSION_START();
?>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<div class="container">
	<form action="index.php" method="POST">
		<div>
			<label for="emno">name:</label>
			<input type="text" name="enmno" id="enmno" class="form-control" autocomplete="off">
		</div>
		<div>
			<label for="emno">email:</label>
			<input type="email" name="email" id="email" class="form-control" autocomplete="off">
		</div>
		<div>
			<input type="submit" class="btn btn-primary" id="submit" value="SIGNIN" >
		</div>
	</form>
</div>
<?php
		$con=mysqli_connect("localhost","root","","employ");
		if(!$con)
		{
			echo "error";
		}
		if(isset($_POST['enmno']))
		{
				$name=$_POST['enmno'];
				$email=$_POST['email'];
				$_SESSION['name']=$email;
			
			$sql="SELECT * FROM `contry` WHERE `name`='$name' AND `email`='$email'";
			$res=mysqli_query($con,$sql);
			$count=mysqli_num_rows($res);
			if($count==	0)
			{
				echo "not recod found!!";
			}
			else
			{
				header('location:display.php');
			}
		}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('#enmno').on('keyup',function(){
			var enmno=$('#enmno').val();
			$.ajax({
				method:'POST',
				url:'name.php',
				data:{enmno:enmno},
				success:function(response){
					if(response=='D')
					{
						$('#enmno').css('background-color','red');
					}
					else
					{
						$('#enmno').css('background-color','green');
					}
					
				}
			});
		});
		
		// email validation change back-ground color
		$('#email').on('keyup',function(){
			var email=$('#email').val();
			$.ajax({
				method:'POST',
				url:'email.php',
				data:{email:email},
				success:function(response){
					if(response=='A')
					{
						$('#email').css('background-color','green');
					}
					else
					{
						$('#email').css('background-color','red');
					}
					
				}
			});
		});
		 
	/*	 $('#submit').click(function(){
				var usercheack='TRUE';
				var emailcheack='TRUE';
				function(email);
				function(name);
				if((usercheack==TRUE)&&(emailcheack==TRUE))
				{
					alert("OK");
				}
				else{
					alert("not valid");
				}
		 }); */
	});
</script>
