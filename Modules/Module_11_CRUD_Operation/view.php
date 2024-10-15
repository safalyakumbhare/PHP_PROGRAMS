<?php
include("db_connection.php");



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container-fluid {
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-secondary">

        <h1 class="pt-5 text-center pb-5">View Data</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row bg-white p-4">

                    <?php
                    $id = $_GET['ID'];
                    $sql = "SELECT * FROM tblusers WHERE ID = '$id'";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {



                        ?>
                        <div class="col-md- p-3">
                            <div class="form-group">
                                <h4>First Name :<span>
                                        <p class="d-inline fw-normal"><?php echo $row['FirstName'] ?>
                                    </span> </p>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md- p-3">
                            <div class="form-group">
                                <h4>Last Name : <span>
                                        <p class="d-inline fw-normal"><?php echo $row['LastName'] ?>
                                    </span></p>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md- p-3">
                            <div class="form-group">
                                <h4>Mobile Number : <span>
                                        <p class="d-inline fw-normal"><?php echo $row['MobileNumber'] ?>
                                    </span></p>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md- p-3">
                            <div class="form-group">
                                <h4>Email : <span>
                                        <p class="d-inline fw-normal"><?php echo $row['Email'] ?>
                                    </span></p>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-12 p-3">
                            <div class="form-group">
                                <h4>Address : <span>
                                        <p class="d-inline fw-normal"><?php echo $row['Address'] ?></p>
                                    </span></h4>
                            </div>
                        </div>
                        <div class="col-md-6 p-3">
                            <div class="form-group">
                                <h4>Pincode : <span>
                                        <p class="d-inline fw-normal"><?php echo $row['pincode'] ?></p>
                                    </span></h4>
                            </div>
                        </div>
                    </div>
                    <?php
                    }

                    ?>
            </div>
        </div>
    </div>
</body>

</html>