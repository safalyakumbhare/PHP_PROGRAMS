<?php
include("db_connection.php");

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];


    $sql = "INSERT INTO tblusers(FirstName,LastName,MobileNumber,Email,`Address`,pincode) VALUES ('$fname','$lname','$mobile','$email','$address','$pincode')";


    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('Data Inserted Successfully')</script>";
        // echo "<script>alert('You have successfully inserted the data');</script>";
        // echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    }
    else{
        echo "<script>alert('Data Not Inserted')</script>";
    }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container-fluid {
            height: 100vh;
            /* width:50%; */
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-secondary d-flex flex-column align-items-center justify-content-center">
        <h1 class="mb-5 text-center mt-5">Insert Data</h1>

        <div class="row mt-5 p-md-2 w-50 justify-content-evenly rounded bg-light">
            <div class="col-md-6">

                <form action="" method="post">


                    <div class="form-group">
                        <label for="name" class="form-label">First Name:</label>
                        <input type="text" class="form-control" id="name" name="fname">
                    </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="last" class="form-label">Last Name :</label>
                    <input type="text" class="form-control" id="last" name="lname" required="true">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="mobile" class="form-label">Mobile Number :</label>
                    <input type="number" class="form-control" id="mobile" name="mobile" required="true">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email" class="form-label">Email Address :</label>
                    <input type="email" class="form-control" id="email" name="email" required="true">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="address" class="form-label">Address :</label>
                    <textarea class="form-control" id="address" name="address" required="true" required=></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="pincode" class="form-label">Pincode :</label>
                    <input type="number" class="form-control" id="pincode" name="pincode" required=>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="col-md-3 text-center p-4">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</body>

</html>