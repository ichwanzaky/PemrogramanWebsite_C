<?php 

session_start();
if(!isset($_SESSION['session_username'])){
    header("location:login.php");
    exit();
}

$connect_database = mysqli_connect("localhost","root","","login");

$query = mysqli_query($connect_database,"SELECT * FROM user");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello Ahmad Ichwan Zaky</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <style>
    .contain{
        margin top: 30px;
        background-color: skyblue;
        padding: 10px;
    }
    .button a{
        text-decoration: none;
        margin top: auto;
        background-color: skyblue;
        padding: 15px;
        border-radius: 20px;
    }
    .button a:hover{
        background-color: salmon;
    }
    .container{
      width : 30%;
    }
  </style>
</head>

<body>
<br>
  <center>
  <div class="contain">
    <h2>Ahmad Ichwan Zaky - 192410101055 <br>Pemrograman Berbasis Website Kelas C</h2>
    </div>
    <br>
  <h1> SELAMAT DATANG <br> Anda Telah Berhasil Login ke dalam Sistem</h1><br>
  <h5>Anda juga bisa menggunakan akun berikut ini untuk login</h5>
    <div class="container">
      <div class="card mt-3">
        <table class="table table-bordered table-striped table-primary table-hover table-responsive" >
          <tr>
            <th>Username</th>
            <th>Password</th>
          </tr>
          <tbody>
          <?php
            while($row = mysqli_fetch_assoc($query)){ ?>
              <tr>
                  <form action="" method="POST">
                  <td><?= $row["username"] ?></td>
                  <td><?= $row["password"] ?></td>
                  </form>
              </tr>
              <?php
              }
          ?>
          </tbody>
          </table>
      </div>
      <br>
          <div class="button">
            <a href="logout.php" class="text-dark">Log Out</a>
          </div>
          </br>
          <br>
</center>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

<?php

print_r($_SESSION);
print_r($_COOKIE);

?>