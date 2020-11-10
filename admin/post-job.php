
<?php

if(isset($_POST["submit"]))
{   
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "skyshop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $about_job= $_POST['about_job'];
  $job_title = $_POST['job_title'];
  $min_qualifications= $_POST['min_qualifications'];
  $p_qualifications = $_POST['p_qualifications'];

  $sql = "INSERT INTO `job_post` (`job_title`, `min_qualifications`, `responsibilities`, `about_job`) VALUES ('$job_title', '$min_qualifications', '$p_qualifications', '$about_job')";

  if ($conn->query($sql) == TRUE) {
    ?>
    <script>
     alert ("New record created successfully");
 </script> 
 <?php
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
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
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
    </nav> -->
<!-- job post form -->
<div class="container pt-4 mt-4">
<form action="" method= "post">
  <div class="form-group">
    <label for="exampleInputEmail1">Job Title</label>
    <input type="text" class="form-control" id="job_title" name="job_title" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Job post name</small>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Minimum qualifications:</label>
    <textarea class="form-control todolist" rows="4" name="min_qualifications" id="todolist"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Responsibilities:</label>
    <textarea class="form-control" rows="6" name="p_qualifications" id="p_qualifications"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">About the job</label>
    <textarea class="form-control" id = "about_job" rows="12" name="about_job"></textarea>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!-- job form end -->
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(".todolist").focus(function() {
    if(document.getElementById('todolist').value === ''){
        document.getElementById('todolist').value +='• ';
	}
});
$(".todolist").keyup(function(event){
	var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        document.getElementById('todolist').value +='• ';
	}
	var txtval = document.getElementById('todolist').value;
	if(txtval.substr(txtval.length - 1) == '\n'){
		document.getElementById('todolist').value = txtval.substring(0,txtval.length - 1);
	}
});;</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
<!-- INSERT INTO `user_list` (`id`, `email_id`, `name`, `job_applyed`, `date_created`) VALUES (NULL, 'asd.123@gmail.com', 'test user ', '3', current_timestamp()); -->