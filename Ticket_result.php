<!DOCTYPE html>
<html>
<head>
<title>Ticket</title>
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
		<h2 class =" heading">Search Result For Tickets</h2>
			<div class="table" style="margin-left:450px;">
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

$SQL = "SELECT * FROM tb_ticket WHERE ID LIKE '$term'";
  $result = mysqli_query($connection, $SQL);
  if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>Serial No</th><th>Price</th></tr>";
     // output data of each row
     while($row = mysqli_fetch_array($result)) {
         echo "<tr><td>"  . $row["ID"]."</td><td>". $row["SN"]."</td><td>".$row["Price"]."</td></tr>";
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