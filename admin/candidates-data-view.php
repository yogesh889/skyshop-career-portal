<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="skyshop";
 
 
 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "not connected";
}
$cid = $_GET['cid'];
$sql = "SELECT * FROM `user_list` WHERE `id` = '$cid'";
$run = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($run);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-user-data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
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
                <a href="admin.php" class="btn btn-primary my-2 my-sm-0 mx-1 m-2" type="submit">Admin Page</a>
                <a href="/filesfreelance/login.php" class="btn btn-primary my-2 my-sm-0 mx-1 m-2" type="submit">LOG
                    IN</a>
                <a href="/filesfreelance/register.php" class="btn btn-primary my-2 my-sm-0 mx-1 m-2" type="submit">SIGN
                    UP</a>
            </form>
        </div>
    </nav>

    </style>
    <div class="container emp-profile">
        <h1>PROFILE DETAILS</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Candidate Name </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" readonly
                        value="<?php echo $data['name']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email </label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" readonly
                        value="<?php echo $data['email_id']?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" readonly
                        value="<?php echo $data['phone']?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">College Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" readonly
                        value="<?php echo $data['college']?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">College Website </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" readonly
                        value="<?php echo $data['college_web']?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Address </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" readonly
                        value="<?php echo $data['address']?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">City </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" readonly
                        value="<?php echo $data['city']?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Zip Code </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" readonly value="<?php echo $data['zip']?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">State </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" readonly
                        value="<?php echo $data['state']?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Job Applied </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" readonly name='expire_date'
                        value="<?php echo $data['job_applied']?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Degree</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" readonly name='Pass_wrod'
                        value="<?php echo $data['degree']?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Date Applied</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" readonly name='Pass_wrod'
                        value="<?php echo $data['date_created']?>">
                </div>
            </div>

            
            <div class="form-group row">
    <label for="work_exp" class="col-sm-2 col-form-label">Work EXP. </label>
    <div class="col-sm-10">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="12"
                    readonly><?php echo $data['work_exp']?></textarea>
    </div>
  </div>
            <input type="hidden" name="cid" value="<?php echo $data['id']; ?>">
            <a href="./admin.php"><input type="button" class="btn btn-primary" value="Back to Admin page"></a>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>