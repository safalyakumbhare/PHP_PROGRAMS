<?php


    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);


    }

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">

    <div class="container mt-5">
        <div class="row d-flex mt-5 justify-content-center">
            <div class="col-md-4 mt-5 border border-3 border-white p-5 rounded-4 ">
                <h2 class="text-center text-white mb-4">Login Page</h2>
                <form action="login.php" method="POST">

                    <div class="form-group mt-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">

                        <button type="submit" name="submit" class="btn btn-success mt-5">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>