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
    <title>transaction</title>
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
              <li class="nav-item" >
                <a class="nav-link" href="transaction.php" id="currentpage">Transfer</a>
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
    <img src="transfer.gif" width="100px" height="100px" />
    <h1 class="users-head" >Transfer Money</h1>
  </center>

  <center>
    <form class="selectUser" action="sendMoney.php" method="POST" >
      <label for="senders">Sender:</label>
      <?php 
      if(isset($_POST['sender']) !=null)
      {
        $sender=$_POST['sender'];
        $q2="SELECT * from $tablename where id='". $sender ."'";
        $result2=mysqli_query($conn,$q2);
        while ($row=mysqli_fetch_array($result2))
        {?>
          <label  id="sender" class="selection"  ><?php echo "{$row['name']}";?>  [Balance:<?php echo "{$row['balance']}";?>]<input type="hidden" name="sender" value="<?php echo "{$row['id']}";?>"/></label>
        <?php
        } ?>
       <?php
      }else{
           ?><select name="sender" id="sender" class="selection">
             <option value="" selected disabled hidden>Select the sender</option>
              <?php
              $i=1;
              $q2="SELECT * from $tablename ";
              $result2=mysqli_query($conn,$q2);
              while ($row=mysqli_fetch_array($result2))
              {?>
                <option value=" <?php echo "{$row['id']}";?>  "><?php echo "{$row['name']}";?>  [Balance:<?php echo "{$row['balance']}";?>]</option>
              <?php
               $i++;
              }
            }
              ?>
        </select>
      <br>
      <label for="receivers">Receiver:</label>
          <select name="receiver" id="receiver" class="selection">
            <option value="" selected disabled hidden>Select the receiver</option>
              <?php
              $j=1;
              while ($row=mysqli_fetch_array($result))
              { 
                if($row['id']==$_POST['sender'])
                  {

                  }
                else{
                ?>
                <option value=" <?php echo "{$row['id']}";?>  "><?php echo "{$row['name']}";?>[Balance:<?php echo "{$row['balance']}";?>]</option>
              <?php
               }
               $j++;
              }
              ?>
          </select>
      <br>
      Amount:<input type="text" class="amountInput" name="amount">
      <br>
      <button type="submit" name="submit" id="sendBtn" value="submit"class="btn btn-primary btn-lg">Transfer</button>

    </form>
  </center>

  </body>
</html>