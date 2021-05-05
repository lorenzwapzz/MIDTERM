<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
		<style>
		body{
			margin: 0;
			padding: 0;
			background-color: #4297A0;
            background-size: cover;
			background-position: center;
			font-family: 'Poppins', sans-serif;
		}
		.boxer{
			width: 320px;
			height: 400px;
			
			color: #004444;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 30px 30px;
			background-color: #E57F84;
			border-radius: 10px;
		}
		.pik{
			width: 100px;
			height: 100px;
			border-radius: 50%;
			position: absolute;
			top: -50px;
			left: calc(50% - 50px);
		}
		.h1{
			margin: 0;
			padding: 0 0 20px;
			text-align: center;
			font-size: 22px;
			color: white;
		}
		.boxer p {
			margin: 0;
			padding: 0;
			font-weight: bold;
		}
		.boxer input{
			width: 100%;
			margin-bottom: 20px;
		}
		.boxer input[type="text"], input[type="password"]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: black;
			font-size: 16px;	
		}
		.boxer input[type="submit"]{
			border: none;
			outline: none;
			height: 40px;
			background: #138086;
			color: #fff;
			font-size: 18px;
			border-radius: 20px;
		}
		.ca{
			text-decoration: none;

		}
</style>
</head>
<body>

     <form action="login.php" method="post">
     	<div class="boxer">
            <center></center>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		<p>LOGIN</p>
		<br>
		<br>
     	<input type="text" name="uname" placeholder="Username"><br>

     	<input type="password" name="password" placeholder="Password"><br>
            
        <input type="submit" value="Login">
<a href="logout.php" class="ca"></a><br/><br>
			<a href="changpass.php" class="ca">Forgot Password</a>&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="signup.php" class="ca">Create Account</a><br><br>
     	    
          
     </form>
</body>
</html>