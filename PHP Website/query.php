<html>
<head>
<meta charset="UTF-8">
<title>Query Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
<script async src="https://cse.google.com/cse.js?cx=7c903019d793c3aa0"></script>
</head>


<body class="querybody">
	
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

	   <li class="nav-item">
		 <a class="nav-link" href="about.php">About Us</a>
	   </li>
	   <li class="nav-item">
		 <a class="nav-link" href="contact.php">Contact Us</a>
	   </li>

	   <li class="nav-item active">
		 <a class="nav-link" href="query.php">Query</a>
	   </li>

	 </ul>
	 <form class="form-inline my-2 my-lg-0">
	   <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
	   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search
	   </button> -->
	   <div class="gcse-searchbox-only">Search</div> 
	 </form>
   </div>
   
 </nav>


	<div id="header" class="mainHeader">
		<hr>
		
		<div class="imagebox">
			<img src="banner-plugin-query-builder.jpg" width="100%" height="50%"/>
			
			<div class="query_content">
				<H2>Example Social Research Organization</H2>
				<br>
				<H2>Country Data Query Page</H2>
				<br>
				<H2>Please select which query you want to run.</H2>
			</div>

		</div>
		
	</div>
	
	<form id="form1" method="post" action="query2.php">
		<div class="container download" id="downloads">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
				<input type="hidden" name="selection" id="sub" value="">
				<a href="#" onclick="document.getElementById('sub').value='Q1';document.getElementById('form1').submit();">
					<img alt="AltText" src="cell-phone-svgrepo-com.svg" class="img-fluid">
					<p class="lead" style="text-align: center">Mobile phones</p>
				</a>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12">
				 
				<a href="#" onclick="document.getElementById('sub').value='Q2';document.getElementById('form1').submit();">
					<img alt="AltText" src="population.svg" class="img-fluid" style="width:346.66px;">
					<p class="lead" style="text-align: center">Population</p>
				</a>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12">
				
				<a href="#" onclick="document.getElementById('sub').value='Q3';document.getElementById('form1').submit();">
					<img src="life.svg" alt="AltText" class="img-fluid" style="width:346.66px;">
					<p class="lead" style="text-align: center">Life Expectancy</p>
				</a>
				</div>

				

			</div>
			<div class="row" style="justify-content: center;">
				<div class="col-md-4 col-sm-4 col-xs-12">
				 
				<a href="#" onclick="document.getElementById('sub').value='Q4';document.getElementById('form1').submit();">
					<img alt="AltText" src="gdp.svg" class="img-fluid">
					<p class="lead" style="text-align: center">GDP</p>
				</a>
				</div>

				

				<div class="col-md-4 col-sm-4 col-xs-12">
				
				<a href="#" onclick="document.getElementById('sub').value='Q5';document.getElementById('form1').submit();">
					<img src="childhood.svg" alt="AltText" class="img-fluid">
					<p class="lead" style="text-align: center">Childhood</p>
				</a>
				</div>

				

			</div>
		</div>
		</form>
 
<hr>
<div id="Copyright" class="center">
    <h5>&copy; 2021, EE4221 or its Affiliates. All rights reserved.</h5>
</div>

</body>
</html>

<script>



</script>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>