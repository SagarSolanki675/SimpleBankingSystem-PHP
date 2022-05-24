<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>

<style>
* {
  box-sizing: border-box;
}

.class1 {
  float: left;
  width: 25%;
  height: 350px;
  padding: 40px;
  background-color:#D3D3D3;
}
/* #introduction {
  background-image: url(img/bank5.jpg);
} */
/* .upper {
  background-image: url(img/bank5.jpg);
} */
</style>
  
      <div class="upper">
      <!-- Introduction section -->
            <div class="row intro py-1" id="introduction" style="background-color:#FFFFFF;">
              
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank4.jpg" class="img-fluid1" style="display: block; margin-left: auto; margin-right: auto; width: auto; height:290px;">
              </div>
            </div>

      <!-- Activity section -->
            <div class="lower">
                  <div class="class1">
                    <img src="img/user1.jpg" class="img-fluid" style="border : 3px solid black; height: 220px; border-radius: 10%;">
                    <br>
                    <a href="createuser.php"><button style="background-color:#0a0a23; color: #fff; border:none; border-radius:10px; box-shadow: 0px 0px 2px 2px rgb(0,0,0); transform : translate(25px, 15px);">Create a new User</button></a>
                  </div>
                  <div class="class1">
                    <img src="img/ruser1.jpg" class="img-fluid" style="border : 3px solid black; height: 220px; border-radius: 10%;">
                    <br>
                    <a href="removeuser.php"><button style="background-color:#0a0a23; color: #fff; border:none; border-radius:10px; box-shadow: 0px 0px 2px 2px rgb(0,0,0); transform : translate(48px, 15px);">Delete Users</button></a>
                  </div>
                  <div class="class1">
                    <img src="img/transfer1.jpg" class="img-fluid" style="border : 3px solid black; height: 220px; border-radius: 10%;">
                    <br>
                    <a href="transfermoney.php"><button style="background-color:#0a0a23; color: #fff; border:none; border-radius:10px; box-shadow: 0px 0px 2px 2px rgb(0,0,0); transform : translate(25px, 15px);">Make a new Transaction</button></a>
                  </div>
                  <div class="class1">
                    <img src="img/history1.jpg" class="img-fluid" style="border : 3px solid black; height: 220px; border-radius: 10%;">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color:#0a0a23; color: #fff; border:none; border-radius:10px; box-shadow: 0px 0px 2px 2px rgb(0,0,0); transform : translate(58px, 15px);">Transaction History</button></a>
                  </div>
                  
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2022 Made by <b>Sagar Narendra Solanki</b></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>