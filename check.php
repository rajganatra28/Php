<html>
  <head>
    <title>Username Available Our Not</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  body
  {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
  }
  .box
  {
      width:800px;
      border:1px solid #ccc;
      background-color:#fff;
      border-radius:5px;
      margin-top:36px;
  }
</style>
</head>
<body>
  <div class="container box">
  <div class="form-group">
  <form method="POST">
  <label>Username:</label>
  <input type="text" name="username" id="username" class="form-control">
  <span id="availability"></span>
  <input type="submit" value="login" id="register" name="registere" class="btn btn-info" disabled>
  </form>
  </div>
  </div>
</body>
</html>
<script>
$(document).ready(function(){
		$('#username').on('keyup',function(){
			var username=$(#this).val();
			$.ajax({
				method:'POST',
				url:'',
				data:{user_name:username},
				success:function(data){
					if(data != '0')
					{
						$('#availability').html('<span class="text-danger">Username not available');
      $('#register').attr("disabled",true);
					}
					else
					{
						$('#availability').html('<span class="text-success">Username available');
      $('#register').attr("disabled", false);
					}
					
				}
			});
		});
});
</script>
      
