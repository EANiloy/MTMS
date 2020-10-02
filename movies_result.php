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
		<h2 class =" heading">Search Result For Movies</h2>
<div class="table">
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbName = "db_movies"; 
  $connection = mysqli_connect($servername, $username, $password, $dbName);
  if ($connection) {
    echo "<br>";
  } else {
    die("Connection failed.<br>".mysqli_connect_error());
  }
$term = $_POST['term'];    

$SQL = "SELECT * FROM tb_movies WHERE ID LIKE '$term'";
  $result = mysqli_query($connection, $SQL);
 if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>Name</th><th>Director</th><th>Producer</th><th>Duration</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Director"]."</td><td>".$row["Producer"]."</td><td>".$row["Duration"]."</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
?>
</div>
</form>
<footer class="footer" style="margin-top:185px">
	&copy Ehsan Ahmed Niloy</br>
	ID : 17103101</br>
	Sec: D
</footer>
</div>
</body>
</html>