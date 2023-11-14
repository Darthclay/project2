<!DOCTYPE html>
<html lang ="en">
<head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width= device-width initial-scale=1.0">
	 <link rel="stylesheet"href="style.css">

</head>
<body class="body-home">
	<div class="black-fill">
		<div class="container">
			<form class="login"
				  method="post"
				action="req/login.php">

	</div>
	<h3>LOGIN</h3>
	<?php if (isset($_GET['error'])) { ?>
		<div class="alert alert-danger" role="alert">
         <?=$_GET['error']?>
</div>
<?php } ?>
  <div class="mb-3">
    <label class="form-label">Username</label>
    <input type="text" 
           class="form-control"
           name="uname">
  </div>
    <div class="mb-3">

    <label class="form-label">Password</label>
    <input type="Password" 
           class="form-control"
           name="pass">
  </div>
    <div class="mb-3">
    <label class="form-label">Login As</label>
    <select class="form-control"
             name="role">
    	<option value="1">Admin</option>
    	<option value="2">Teacher</option>
    	<option value="3">Student</option>
    </select>
  </div>
 
 



  <button type="submit" class="btn btn-primary">login</button>
  <a href="sign up.php" class="text-decoration-none">Home</a>
  
</form> 
		
<br/>
<br/>
 <div class="text-center text-light">
 	Copyright &copy; 2023 Intelligent Ed System.
		</div>
		

	</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
