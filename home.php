
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
	body{
			margin: 0;
			padding: 0;
			background-color: #4297A0;
			background-size: cover;
		
			font-family: 'Poppins', sans-serif;
			
		}
    h1 {
            width:500px;
            height: 100px;
            margin: 0 auto;
            background: #E57F84;
            text-align: center;

        }
        [type="submit"]{
			border: none;
			outline: none;
			height: 40px;
			width: 200px;
			background: #fff;
			color: black;
			font-size: 18px;
			border-radius: 20px;
			text-decoration: none;
		}
		a{
			
			outline: none;
			height: 40px;
			width: 150px;
			background: #fff;
			color: black;
			font-size: 18px;
			border-radius: 20px;
			text-decoration: none;
		}
		
       
		</style>
	<title>HOME</title>
	
</head>
<body>

	 <br><br><br><br><br>
		<br><br><br>
		<br><br><br><br><br>
		<br><br><br>
	
     <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
	
   <h1><center><button class="logout"><a href="logout.php">Logout</a> </button></center><br/></h1>
	<h1><center><button type="submit">  <a href="display.php" >View Activity</a> </button></center></h1>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>                            		                            