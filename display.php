<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
                width: 100%;
                color: #b35340;
                font-family: monospace;
                font-size: 25px;
                text-align: left;
                }
            th{
                background-color: #2F5061;
                color: white;
            }
            tr:nth-child(even) {background-color: #f67e7d}
            tr:nth-child(odd) {background-color: #ffb997}

            a{
            	position: absolute;
            	top: 900px;
            	left: 1000px;
            	background-color: white;
            	height: 30px;
            	width: 150px;
            	border-radius: 20px;
            	padding: 1% 0;
            	text-decoration: none;
            	color: black;
            	font-family: 'Poppins', sans-serif;



            }
</style>
</head>
<body bgcolor="#4297A0">
<button type="submit">  <a href="home.php" >Go back to home</a> </button></center></h1>
<?php 
session_start();

if ( isset($_SESSION['username'])) {

 ?>
<?php
		$link_address = '#'; 
$conn = mysqli_connect("localhost", "root", "", "test_db");
		if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql2="SELECT id, username, activity, time FROM acts WHERE username='{$_SESSION['username']}'
ORDER BY time DESC;";
$result2 = $conn->query($sql2);
$sql1="SELECT id, username, activity, time FROM acts
ORDER BY time DESC;";
	$result = $conn->query($sql1);



		echo "<br/><h3></h3>";
		echo "<table>";
		
echo "<table border='3'>

<tr>

<th>Id</th>

<th>Username</th>

<th>Activity</th>

<th>Time</th>

</tr>";

if($_SESSION['username']==="ADMIN"){
	if ($result->num_rows > 0)
while($row = $result->fetch_assoc()) {

  echo "<tr>" ;
	echo  "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['username'] . "</td>";
	echo " <td>" . $row['activity'] . "</td>";
	echo " <td>" . $row['time'] . "</td>";
	"<tr";
 
}
}
	
else{
		if ($result2->num_rows > 0)
	while($row = $result2->fetch_assoc()) {

  echo "<tr>" ;
	echo  "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['username'] . "</td>";
	echo " <td>" . $row['activity'] . "</td>";
	echo " <td>" . $row['time'] . "</td>";
	"<tr";
 
}
}


		echo "</table>";

}
$conn->close();
?>