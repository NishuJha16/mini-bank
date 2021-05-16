<?php

$tablename="users";
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
  <title>TSF Bank</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"  />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" type="image/png" href="images/cloudy.png">

  <meta charset="utf-8" />
  <title>listUsers</title>
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
                <li class="nav-item active" >
                  <a class="nav-link" href="usersList.php" id="currentpage">Users </a>
                </li>
                <li class="nav-item">
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
    <h1 class="users-head" >🚹 Users in TSF Bank 🚹</h1>
  </center>
  <br>
<form action="transaction.php" method="post">
  <div id="cards_landscape_wrap-2">
          <div class="container">
              <div class="row">
                <?php
                $i=1;
                while ($row=mysqli_fetch_array($result))
                {
                      $val[$i]=$row['id'];?>      
                      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                          <div class="card-flyer">
                              <div class="text-box">
                                  <div class="image-box">
                                    <img 
                                     <?php
                                       if($i==1 ||$i==6 ||$i==7)
                                        {
                                          ?>
                                          src="female.png"
                                          <?php
                                         }
                                         else
                                         {
                                          ?>
                                          src="male.png"
                                          <?php
                                          } 
                                          ?>
                                          alt="" />
                                  </div>
                                  <div class="text-container">
                                      <h6><?php echo "{$row['name']}"?></h6>
                                      <p class="card-text"><?php echo "{$row['email']}"?></p>
                                      <p class="card-text">Balance:<?php echo "{$row['balance']}"?></p>
                                      <button type='submit' class="btn btn-primary btn-lg" name='sender' value=" <?php echo "{$row['id']}";?>" >Transact</button>
                                  </div>
                              </div>
                          </div>                 
                        </div>
                      <?php
                  $i++;  
                }
                ?>
           </div>
       </div>
    </div>
  </form>
  </body>
</html>