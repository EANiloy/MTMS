<!DOCTYPE html>
<html>
<head>
<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<h2 style="text-align:center;color:white;">Movie Theater Management System</h2>
</head>
<body>
	<div class="contain">
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
				<li><a href="http://localhost/Movie/export.php">Export</a></li>
			</ul>
		</div>
		

		<div class="ns">
			Now Showing
		</div>

	<segment >
		<h3 class="ab"> About</h3>
		<p class="about">
			This website handles all the required information<br>to generate a ticket and also to see available shows,<br> now showing movies and available seat number.
			</p>
	</segment>
	<div class= images>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2500">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="Johnny.jpg" alt="Johnny English">
    </div>

    <div class="item">
      <img src="hotel.jpg" alt="Hotel Transylvania">
    </div>

    <div class="item">
      <img src="Irene.jpg" alt="The Nun">
    </div>
    <div class="item">
      <img src="debi.jpg" alt="Debi">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
	<footer class="footer">
		&copy Ehsan Ahmed Niloy</br>
	ID : 17103101</br>
	Sec: D
</footer>
</div>
</body>
</html>




