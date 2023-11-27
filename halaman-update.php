<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <style>
    body {
        background-image: url('bg1.1.png');
        background-size: cover;
        background-position: center;
        height: 100vh;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container {
        background-color: rgba(0, 0, 0, 0.7);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .btn-update {
        width: 100%;
    }
    </style>
</head>

<?php
$id = $_GET['ID'];
include "config.php";
$sql = mysqli_query($con, "SELECT * FROM `tabletodo` WHERE `id` = '$id'");
$data = mysqli_fetch_array($sql);
?>

<body>
    <form action="update.php" method="post">
        <div class="container col-md-20">
            <div class="text-center text-info font-monospace">
                <h2>Update My Data</h2>
            </div>
            <div class="form-group">
                <input type="text" value="<?php echo $data['list'] ?>" name="list" class="form-control shadow"
                    placeholder="Update your task">
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-update"><i class="fa-solid fa-circle-check fa-bounce"></i> UPDATE?</button>
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>