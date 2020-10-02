<!DOCTYPE html>
<html>
<head>
<title>Movies</title>
<link rel="stylesheet" type="text/css" href="l_all.css">
	<h2 style="text-align:center;color:white;">Movie Theater Management System</h2>
</head>
</head>
<body>
	<div class="container">
		<div class="header">
				<ul>
				<li><a href="http://localhost/Movie/home.php">Home</a></li>
				<li> <a href="#">Insert</a>
					<ul >
						<li><a href="http://localhost/Movie/movies.php">Movies</a></li>
						<li><a href="http://localhost/Movie/show.php">Show</a></li>
						<li><a href="http://localhost/Movie/ticket.php">Ticket</a></li>
						<li><a href="http://localhost/Movie/hall.php">Hall</a></li>
						<li><a href="http://localhost/Movie/sales.php">Employee</a></li>
						<li><a href="http://localhost/Movie/customer.php">Customer</a></li>
					</ul>
			</li>
				<li><a href="#">View</a>
					<ul>
						<li><a href="http://localhost/Movie/movies_view.php">Movies</a></li>
						<li><a href="http://localhost/Movie/show_view.php">Show</a></li>
						<li><a href="http://localhost/Movie/ticket_view.php">Ticket</a></li>
						<li><a href="http://localhost/Movie/hall_view.php">Hall</a></li>
						<li><a href="http://localhost/Movie/sales_view.php">Employee</a></li>
						<li><a href="http://localhost/Movie/customer_view.php">Customer</a></li>
					</ul>	
				</li>
				<li><a href="#">Search</a>
					<ul>
						<li><a href="http://localhost/Movie/movies_search.php">Movies</a></li>
						<li><a href="http://localhost/Movie/show_search.php">Show</a></li>
						<li><a href="http://localhost/Movie/ticket_search.php">Ticket</a></li>
						<li><a href="http://localhost/Movie/hall_search.php">Hall</a></li>
						<li><a href="http://localhost/Movie/sales_search.php">Employee</a></li>
						<li><a href="http://localhost/Movie/customer_search.php">Customer</a></li>
					</ul>	

				</li>
				<li><a href="#">Report</a></li>
			</ul>
		</div>

			<h2 class =" heading">Insert Movie Information</h2>
			<form action="connect_movies.php" method="POST">
	<div class="a">
	<p>ID:</br>
		<input type="number" name="ID" value=""></p>
		
	<p>Name:</br>
		<input type="text" name="Name" value=""></p>
		
	<p>Director:</br>
	
		<input type="text" name="Director" value=""></p>
		
	<p>Producer:</br>
	
		<input type="text" name="Producer" value=""></p>

	<p>Duration:</br>
		<input type="text" name="Duration" value=""></p>

		<input type="Submit" value="Submit">
</form>
</div>
<div class="toast">
	<?php
$servername="localhost";
$username="root";
$password="";
$db_name="db_movies";
$conn=mysqli_connect($servername,$username,$password,$db_name);
if(!$conn)
{
	die("Connection failed");
}
else
{
 echo nl2br("Successfully connected to the server\n");
}
$sql="INSERT INTO tb_movies(ID,Name,Director,Producer,Duration) VALUES('$_POST[ID]','$_POST[Name]','$_POST[Director]','$_POST[Producer]','$_POST[Duration]')";
if(mysqli_query($conn, $sql))
{
	echo nl2br("New record inserted successfully\n");
}
else
{
	echo nl2br("error");
}
?>
</div>
<footer class="footer">
	&copy Ehsan Ahmed Niloy</br>
	ID : 17103101</br>
	Sec: D
</footer>
</div>
</body>
</html>