<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
            <div class="row intro py-1" style="background-color : #fff;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" style="font-family : Times New Roman, serif ;">
                  <h3>Welcome to</h3>
                  <h1>Blue Bird Bank</h1>
                </div>
              </div>
              
            </div>
            <div class="row activity text-center">
                  <div class="col-md act">
                    <i class="far fa-user-circle" style="font-size: 10rem;" ></i>
                    <br>
                    <a href="createuser.php"><button class="button" style="background-color : #2785C4;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                  <i class="fas fa-exchange-alt" style="font-size: 10rem;" ></i>
                    <br>
                    <a href="transfermoney.php"><button class="button" style="background-color : #2785C4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                  <i class="fas fa-history" style="font-size: 10rem;"></i>
                    <br>
                    <a href="transactionhistory.php"><button class="button" style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>