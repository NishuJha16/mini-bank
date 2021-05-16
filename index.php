<?php
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>TSF Bank</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"  />
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" ></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" type="image/png" href="images/cloudy.png">
	</head>

	<body>
		<div class="container-fluid main_menu">
			<div class="row">
				<div class="col-md-12 col-12 mx-auto">
				    <nav class="navbar navbar-expand-lg  ">
					  <a class="navbar-brand" href="#" ><i class="far fa-snowflake"></i>  <span class="main_text">TSF Bank</span> <i class="far fa-snowflake"></i></a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav ml-auto">

					      <li class="nav-item active" >
	                        <a class="nav-link" href="index.php" id="currentpage">Home </a>
	                      </li>	
					      <li class="nav-item active">
					        <a class="nav-link" href="usersList.php">Users </a>
					      </li>
					      <li class="nav-item" >
					        <a class="nav-link" href="transaction.php">Transfer</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="history.php">Transaction History</a>
					      </li>				       
					    </ul>

					  </div>
					</nav>
				</div>
				
			</div>
		</div>
	    <center>
	    	<div class="col-md-8 col-12 " >
	    		<h1 class="welcome-to-tsf">Welcome to TSF Bank</h1>
	    		<img src="bank.gif" />
	        </div>	
	    </center>		
	</body>
</html>