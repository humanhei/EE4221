<html>
<head>
	<meta charset="UTF-8">
	<title>Example Site!</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
     <body>
          <?php
               include 'get-parameters.php';

               $conn = new mysqli($ep, $un, $pw, $db);
               $_pick = $_POST['selection'];

               switch ($_pick) {
                    case "Q1":
                    
                         include 'mobile.php';
                         break;
                         
                    case "Q2":
                         include 'population.php';
                         break;
                         
                    case "Q3":
                         include 'lifeexpectancy.php';
                         break;
                         
                    case "Q4":
                         include 'gdp.php';
                         break;
                         
                    case "Q5":
                         include 'mortality.php';
                         break;
               }
          ?>

          <div id="Copyright" class="center">
               <h5>&copy; 2021, EE4221 or its Affiliates. All rights reserved.</h5>
          </div>
     </body>
</html>