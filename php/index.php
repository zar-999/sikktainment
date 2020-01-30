<?php

include_once 'login.php';

?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" href="index.css">
<meta charset="UTF-8">
<!--	Bootstrap CSS		-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--	Responsive Content - Mobile Devices		-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--	Responsive Content - Mobile Devices		-->


<title>Login</title>

</head> 
	
<body>
	
	<div class="container">  
	 
		<div class="row justify-content-center" > 		
				<h1 class="text-center Logo">
					<img alt="Sikktainment Logo" src="../img/sikktainment_button.png">
				</h1>
		</div>
	
		<div class="login-form">
   			<form  method="post">      
        	<div class="form-group">
	            <input type="text" name="un" class="form-control" placeholder="Username" required="required">
        	</div>
        	<div class="form-group">
           		<input type="password" name="pw" class="form-control" placeholder="Password" required="required">
        	</div>
        	<div class="form-group">
           		<button type="submit" class="btn btn-primary btn-block btn-dark">Log in</button>
        	</div>     
    		</form>
			
	<?php

			$username = $_POST["un"];
			$password = $_POST["pw"];
			
			$sql = "SELECT *
		              FROM promoter_login
				     WHERE username = $username;";
	
			$result = mysqli_query($conn, $sql);
			$resultcheck = mysqli_num_rows($result);
			
			echo($result);
			
			if($resultcheck > 0){
				$row = mysqli_fetch_assoc($result);
				if ($row['password'] == $password){
					echo ("<a href=main.php</a>");
				}{
					echo("login failed");
				}
					
			}else{
				echo("connection failed");
			}	
	
	?>
			
		</div>
		
	</div>








<!--	Bootstrap JS		-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--	Bootstrap JS		-->
</body>
</html>
