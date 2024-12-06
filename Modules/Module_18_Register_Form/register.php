<?php


    include("connection.php");

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
        // $confirm = password_hash($_POST['confirm'],PASSWORD_BCRYPT);
        $confirm = $_POST['confirm'];

        if($_POST['password'] == $confirm)
        {
            $sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";

            $result = mysqli_query($conn,$sql);

            if($result)
            {
                echo "<script>alert('Registration successful');
                window.location.href='login.php'</script>";
  
            }
            else
            {
                echo "<script>alert('Registration failed')</script>";
            }
        }
        else{
            echo "<script>alert('Passwords do not match')</script>";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <div class="container mt-5">
        <h2>Register</h2>
        <form action="register.php" method="POST">
            <div class="form-group mt-3">
                <label class="form-label" for="username">Username:</label>
                <input type="text" class="form-control text-white bg-dark" id="username" name="name" >
            </div>
            <div class="form-group mt-3">
                <label class="form-label" for="email">Email:</label>
                <input type="email" class="form-control text-white bg-dark" id="email" name="email" >
            </div>
            <div class="form-group mt-3">
                <label class="form-label" for="password">Password:</label>
                <input type="password" class="form-control text-white bg-dark" id="password" name="password" >
            </div>

            <div class="form-group mt-3">
                <label for="confirm" class="form-label">Confirm Password : </label>
                <input type="password" class="form-control text-white bg-dark" id="confirm" name="confirm" >
            </div>


            <button type="submit" class="btn btn-primary mt-4" name="submit">Register</button>
        </form>
    </div>
</body>

</html>