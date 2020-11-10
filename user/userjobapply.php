<?php
$jid = $_GET['jid'];
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

if(isset($_POST['submit'])){
    echo '<h3>Form POST Method</h3>';  
    $name = $_POST['uname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zipcode'];
    $college = $_POST['college'];
    $college_web = $_POST['college_web'];
    $work_exp = $_POST['work_exp'];
    $other_note = $_POST['other_note'];
    $phone = $_POST['phone'];
    $degree = $_POST['degree'];

    $sql = "INSERT INTO `user_list` (`email_id`, `name`, `job_applied`, `date_created`, `address`, `city`, `state`, `zip`, `college`, `college_web`, `work_exp`, `other_note`, `phone`, `degree`) VALUES ('$email', '$name', '$jid', current_time, '$address', '$city', '$state', '$zip', '$college', '$college_web', '$work_exp', '$other_note', '$phone', '$degree');";
    if ($conn->query($sql) === TRUE) {
        ?>
        <script>
         alert ("Thanks for Applying your data is register successfully. We will soon share details through email");
         window.open('../index.php','_self');
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


    <div class="container pt-4 mt-4">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" name="uname" class="form-control" id="uname" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" name = "city" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" name="state" class="form-control">
                        <option value="none" selected >Choose...</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telagana">Telagana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input name ="zipcode" type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-md-3">
                    <label for="phone">Phone</label>
                    <input name ="phone" type="number" class="form-control" id="phone">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">

                    <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                    <label class="form-check-label" for="gridCheck">
                        Attended university degree program?
                    </label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="college">College or University</label>
                    <input type="text" name="college" class="form-control" id="college">
                </div>
            </div>
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="inputState">Degree</label>
                    <select name="degree" id="degree" class="form-control">
                        <option value="none" selected>Choose...</option>
                        <option value="BCA">BCA</option>
                        <option value="B.tech">B.tech</option>
                        <option value="M.tech">M.tech</option>
                    </select>
                </div>
                <!-- <div class="form-group col-md-2">
                    <label for="locationcollege">Location</label>
                    <input type="text" class="form-control" name="locationcollege" id="locationcollege">
                </div> -->
                <div class="form-group col-md-6">
                    <label for="inputZip">College Website</label>
                    <input type="text" class="form-control" name ="college_web" id="college_web">
                </div>
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Work experience</label>
                <textarea class="form-control" name = "work_exp" id="exampleFormControlTextarea1" rows="6"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Cover letter/other notes </label><small> (Optional)</small>
                <textarea class="form-control" name="other_note" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <!-- <div class="form-group">
                <label for="exampleFormControlFile1">Resume</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div> -->
            <input type="submit" class="btn btn-primary" name="submit">
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>