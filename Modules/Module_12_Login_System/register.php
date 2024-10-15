<?php

    include("connection.php");
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username = $_POST['username'];
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result)>0){
            echo "<script>alert('Username already exists')</script>";
            echo "<script>window.location.href='index.php';</script>";

        }
        else{
            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
            $result = mysqli_query($conn, $sql);

            if($result){
                echo "<script>alert('Registration successful')</script>";
            echo "<script>window.location.href='index.php';</script>";

            }
            else{
                echo "<script>alert('Failed to register')</script>";
            echo "<script>window.location.href='register.php';</script>";

            }
        }

    }

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registeration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    .container-fluid {
        height: 100vh;
        background-color: #f8f9fa;
    }
</style>

<body>

    <div class="container-fluid bg-secondary">
        <h1 class="text-center pb-md-5 pt-md-5">Register!</h1>

        <div class="row justify-content-evenly">
            <div class="col-md-4 bg-light p-md-4 rounded-4">
                <form action="" method="POST">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="username" class="form-label">Username : </label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password : </label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <button type="submit" class="w-100 btn btn-primary">Register</button>
                        </div>
                       

                    </div>
            </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>


</html>