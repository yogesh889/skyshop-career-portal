<?php
session_start();
if(!isset($_SESSION['loggedinadmin']) || $_SESSION['loggedinadmin']!=true ){
    header("location: /skyshop/admin/adminlogin.php");
    exit;
}
$server = "localhost";
$username = "root";
$password = "";
$database = "skyshop";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){

    die("Error". mysqli_connect_error());
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-page</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
    <style>

    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/loginsystem">Website Guru</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="/freelanceweb/admin/changeprice.php" class="btn btn-primary my-2 my-sm-0 mx-1 m-2"
                    type="submit">Change Price</a>
                <a href="/freelanceweb/admin/retailer-details.php" class="btn btn-primary my-2 my-sm-0 mx-1 m-2"
                    type="submit">Retailer Details</a>
                <a href="/freelanceweb/login.php" class="btn btn-primary my-2 my-sm-0 mx-1 m-2" type="submit">LOG IN</a>
                <a href="/freelanceweb/register.php" class="btn btn-primary my-2 my-sm-0 mx-1 m-2" type="submit">SIGN
                    UP</a>
            </form>
        </div>
    </nav>

    <?php
echo "<div class='container emp-profile'>
<h2>ADMIN PAGE</h2>
<table class='table table-bordered'>
  <thead>
    <tr>
      <th scope='col'>ID</th>
      <th scope='col'>User NAME</th>

      <th scope='col'>Job applied</th>
      <th scope='col'>View</th>
      <th scope='col'>Delete</th>
    </tr>
  </thead>
  <tbody>";
  $sql = 'SELECT * FROM `user_list`';
$retval = mysqli_query($conn, $sql);

if(! $retval ) {
   die('Could not get data: ' . mysql_error());
}


  while($row = mysqli_fetch_assoc($retval)) {
  echo"<tr>";
    echo"<td>" .$row['id']. "</td>";
      echo"<td>" .$row['name']. "</td>"; 
      

      echo"<td>".$row['job_applied']."</td>";
      echo"<td><a href='candidates-data-view.php?cid=".$row['id']."' id='".$row['id']. "' class ='btn btn-success'>View</a></td>";
      echo"<td><a href='deleteform.php?cid=".$row['id']."' id='".$row['id']. "' class ='btn btn-danger'>Delete</a></td>";
  echo "</tr>"; 
}
?>

    </tbody>
    </table>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
<!-- INSERT INTO `user_list` (`id`, `email_id`, `name`, `job_applyed`, `date_created`) VALUES (NULL, 'asd.123@gmail.com', 'test user ', '3', current_timestamp()); -->