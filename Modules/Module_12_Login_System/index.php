<?php
include("connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    // Check if any user exists with the provided username
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if ($user['is_locked']) {
            echo "<script>alert('Your account is locked. Please contact the administrator.');</script>";
            echo "<script>window.location.href='index.php';</script>";
            exit;
        } else {
            // Verify the password
            if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $username;
                $_SESSION['logged_in'] = true;
                $id = $user['id'];
                
                // Reset failed login attempts
                $sql_fails = "UPDATE users SET failed_attempts = 0 WHERE id = '$id';";
                mysqli_query($conn, $sql_fails);

                echo "<script>window.location.href='welcome.php'</script>";
            } else {
                $id = $user['id'];
                $failed_attempts = $user['failed_attempts'] + 1;

                if ($failed_attempts >= 3) {
                    // Lock the account after 3 failed attempts
                    $sql_lock = "UPDATE users SET failed_attempts = '$failed_attempts', is_locked = 1 WHERE id = '$id';";
                    mysqli_query($conn, $sql_lock);

                    echo "<script>alert('Your account is locked. Please contact the administrator.');</script>";
                    exit;
                } else {
                    // Update failed attempts
                    $sql_update_fails = "UPDATE users SET failed_attempts = '$failed_attempts' WHERE id = '$id';";
                    mysqli_query($conn, $sql_update_fails);

                    echo "<script>alert('Invalid username or password. You have $failed_attempts attempts remaining.');</script>";
                }
            }
        }
    } else {
        echo "<script>alert('User Not Found.');</script>";
        echo "<script>window.location.href='index.php';</script>";
        exit;
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
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
        <h1 class="text-center pb-md-5 pt-md-5">Login!</h1>

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
                            <button type="submit" class="w-100 btn btn-primary">Login</button>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6 mt-md-2 p-md-3 text-center border-end border-1">
                            <small>Not Registered? <a href="register.php">Register Now</a></small>
                        </div>
                        <div class="col-md-6 mt-md-2 p-md-3 text-center">
                            <small><a href="register.php">Forget Password</a></small>
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