<?php
include "db_conn.php";

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gander = $_POST['gander'];

    $sql = "INSERT INTO `crude`(`id`, `first_name`, `last_name`, `email`, `gander`) 
    VALUES (NULL, '$first_name','$last_name','$email','$gander')";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        header("location: index.php? msg=New created successfully");
    } else {
        echo "failed: " . mysqli_error($connect);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---Add Bootstrap---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-----Font Awesome---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP crud Application</title>
</head>

<body>

    <div class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        PHP Complete Crude Application
    </div>
    <!----Use for text Div------>
    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New Students</h3>
            <p class="text-muted"> Complete the form below to a new students</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Enter Your First Name">
                    </div>

                    <div class="col">
                        <label class="form-label">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Enter Your Last Name">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email"
                        placeholder="shahbakhsh@students.usindh.edu.pk">
                </div>
                <div class="form-group mb-3">
                    <label>Gander:</label> &nbsp;
                    <input type="radio" class="form check-input" name="gander" id="male" value="male">
                    <label for="male" class="form-input-label">Male</label>
                    &nbsp;
                    <label></label>
                    <input type="radio" class="form check-input" name="gander" id="female" value="female">
                    <label for="female" class="form-input-label">female</label>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="main.php" class="btn btn-danger">cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!--Bootstrap--->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>