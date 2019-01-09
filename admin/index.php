<?php 
	
	include 'db.php';

	if(isset($_REQUEST['admin_login']))
	{
		$admin_username = $_REQUEST['admin_username'];
		$admin_password = $_REQUEST['admin_password'];

		$select = "select * from admin where username='$admin_username' and password='$admin_password'";
		$run = $connection->query($select);
		$fet = $run->fetch_object();
		$result = $run->num_rows;
		
		if (!$result) 
		{
			$error = "Wrong username or password"; 
		}
		else
		{
			$_SESSION['admin'] = $fet->username;
			echo "<script>
					window.location='dashboard.php';
				  </script>";
		}
	}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin area</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

</head>

<body>

<div class="container-fluid">
	<h1 class="text-center">Admin Login</h1>
	<div class="container">
		<form method="post" enctype="multipart/form-data">
			<div class="form-group col-md-offset-3 col-md-6">
				<label>Username</label>
				<input type="text" name="admin_username" class="form-control" placeholder="Enter Admin Username" required="" />
			</div>
			<div class="form-group col-md-offset-3 col-md-6">
				<label>Password</label>
				<input type="Password" name="admin_password" class="form-control" placeholder="Enter Admin Password" required="" />
			</div>
			<div class="form-group col-md-offset-3 col-md-6">
				<input type="submit" class="form-control btn btn-info" name="admin_login" value="Login">
			</div>
		</form>
	</div>
</div>

</body>
</html>