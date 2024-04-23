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
 </form>
  </div>
  </div>
</body>
</html>
<script>
$(document).ready(function(){
		$('#username').blur(function(){
			var username=$(this).val();
			$.ajax({
				url:"POST",
    method:"check.php",
				data:{user_name:username},
    dataType:"text",
				success:function(html)
					{
						$('#availability').html(html);
					}
			});
		});
});
</script>
      
