<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Example Site;!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/styles.css">

</head>

<body class="bodyStyle">

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
   
   <a class="navbar-brand" href="index.php">
	 <img src="Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
	 <span class="h3 mx-1">Home</span>
   </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

	 <span class="navbar-toggler-icon"></span>
   </button>
   
  

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
	 <ul class="navbar-nav mr-auto">

	   <li class="nav-item active">
		 <a class="nav-link" href="#aboutUs">About Us</a>
	   </li>
	   <li class="nav-item">
		 <a class="nav-link" href="#contactUs">Contact Us</a>
	   </li>

	   <li class="nav-item">
		 <a class="nav-link" href="query.php">Query</a>
	   </li>





	   <!-- <li class="nav-item dropdown">
		 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Query</a>

		 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		   <a class="dropdown-item" href="#">網頁設計</a>
		   <a class="dropdown-item" href="#">平面設計</a>
		 </div>
	   </li> -->
	 </ul>
	 <form class="form-inline my-2 my-lg-0">
	   <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
	   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search
	   </button>
	 </form>
   </div>
   
 </nav>






	<div id="header" class="mainHeader">
		<hr>
		<div class="center"><H1>Example Social Research Organization</H1></div>
	</div>
	<br>
	<?php
		// Get the application environment parameters from the Parameter Store.
		include ('get-parameters.php');

		// Display the server metadata information if the showServerInfo parameter is true.
	
	?>
	<hr>
	<div class="topnav">
		<a href="#aboutUs">About Us</a>
		<a href="#contactUs">Contact Us</a>
		<a href="query.php">Query</a>
	</div>
	<hr>
	<div id="mainContent">

		<div id="mainPictures" class="center">
			
			<hr>
			<p>Welcome to our data query site. You can get data from countries all over the world to use in your research. </p>
			<br>
			<table>
				<tr>
				    <td>
						<div class="cursiveText">We provide data for a variety of areas including basic demographics and development statistics.</div>
						
					</td>
				</tr>
			</table>
			<hr>
		</div>
	</div>

	<div id="aboutUs" class="center">
		<hr>
		<div>
			<h2>About Us</h2>
		</div>
			<table>
				<tr>
					<td><figure><img src="Shirley.png" height=auto width="400"><figcaption>Shirley Rodriguez</figcaption></figure></td>
				</tr>	
					<tr><td><p>Our site got started when Shirley Rodriguez found that she was frequently looking up data from a variety of databases. <br>Shirley decided to start sharing some of this data with other social researchers. </p></td>
				</tr>
			</table>
			<hr>
		</div>

	<div id="contactUs" align="center">
		<hr>
		<div>
			<h2>Contact Us</h2>
		</div>
		<table>
			<tr>
				<td><img src="Logo.png" height=auto width="120"></td>
			</tr>
		</table>
		<div><p>123 Any Street<br>Any Town, USA<br></p></div>
		<div>
			<h3>Hours</h3>
		</div>
		<div>Weekdays: 6:00am - 6:00pm<br>Saturday: 7:00am - 7:00pm<br>Closed on Sundays</div>
	</div>

	<div id="Copyright" class="center">
		<h5>&copy; 2020, Amazon Web Services, Inc. or its Affiliates. All rights reserved.</h5>
	</div>
</body>
</html>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>