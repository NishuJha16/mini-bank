<?php
$tablename="history";
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'login');
$q1="SELECT * from $tablename ";
$result=mysqli_query($conn,$q1);
if(! $result)
{
	die("coudn't get data :".mysql_error());
	
}
else{
echo "";
}
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"  />
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" ></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="shortcut icon" type="image/png" href="images/cloudy.png">

    <style>
    #listusers {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #listusers td, #listusers th {
      border: 1px solid #ddd;
      padding: 8px;
      font-size: 1.5rem;
    }

    #listusers tr:nth-child(even){background-color: #f2f2f2;}

    #listusers tr:hover {background-color: #ddd;}

    #listusers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #1e272e;
      color: white;
    }
    </style>
        <meta charset="utf-8" />
        <title>transaction history</title>
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

                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home </a>
                  </li>
                  <li class="nav-item active"  >
                    <a class="nav-link" href="usersList.php">Users </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="transaction.php">Transfer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="history.php" id="currentpage">Transaction History</a>
                  </li>              
                </ul>

              </div>
            </nav>
          </div>      
        </div>
      </div>
    <form >
        <center><h1 class="users-head" >Transaction History</h1></center>
           <div class="col-md-10 col-12 mx-auto">
              <table border="2" id="listusers">
                  <th>Sl. No.</th>
                  <th>SENDER</th>
                  <th>RECEIVER</th>
                  <th>AMOUNT</th>
                  <th>DATE</th>
                  <th>STATUS</th>
                  <?php
                  $i=1;

                  while ($row=mysqli_fetch_array($result))
                  {
                          $val[$i]=$row['sender'];
                  		    echo "<tr>";
                  	      echo "<td><label >$i</label></td>";
                  	      echo "<td>{$row['sender']}</td>";
                  	      echo "<td>{$row['receiver']}</td>";
                          echo "<td>{$row['amount']}</td>";
                          echo "<td>{$row['date']}</td>";
                          if($row['status']=="success")
                          {
                            ?><td style="color:green;"<?php><?php echo "{$row['status']}" ?></td><?php
                          }
                          else{
                            ?><td style="color:red;"><?php echo "{$row['status']}" ?></td><?php
                          }
                          echo "</tr>";
                  	$i++;  	
                  }
                  ?>
              </table>
        </div>
    </form>
    </body>
</html>