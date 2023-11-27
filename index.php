<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <style>
    body {
        background-image: url('bg2.1.png');
        background-size: cover;
        background-position: center;
        height: 100vh;
        margin: 0;
        display: center;
        align-items: center;
        justify-content: center;
    }

    .container-form {
        background-color: rgba(0, 0, 0, 0.7);
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .container-cards {
        background-color: rgba(0, 0, 0, 0.7);
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        margin-top: 20px;
    }

    .form-control {
        background-color: rgba(255, 255, 255, 0.8);
    }

    .card {
        background-color: rgba(255, 255, 255, 0.8);
    }

    .btn-outline-info {
        transition: transform 0.2s ease-in-out;
    }

    .btn-outline-info:hover {
        transform: scale(1.1);
    }
    </style>
</head>

<body>
    <form action="insert.php" method="post">
        <div class="container container-form col-md-15">
            <div class="row justify-content-center shadow py-3 rounded-5">
                <div class="col-8">
                    <input type="text" name="list" class="form-control shadow" placeholder="What's on my mind?">
                </div>
                <div class="col-4">
                    <button class="btn btn-outline-info"><i class="fa-solid fa-plus"></i> ADD</button>
                </div>
            </div>
        </div>
    </form>

    <!-- Get data from localhost -->
    <?php
    include "config.php";
    $sql = mysqli_query($con, "SELECT * FROM `tabletodo`");
    $i = 1;
    ?>

    <!-- Display data using Bootstrap cards with medium gray background -->
    <div class="container container-cards mt-3 col-md-6">
        <div class="row row-cols-1 row-cols-md-2 g-4 col-20">
            <?php while ($row = mysqli_fetch_array($sql)) { ?>
            <div class="col">
                <div class="card rounded-5">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo $row['list']; ?> </h5>
                        <a href="halaman-update.php?ID=<?php echo $row['id']; ?>" class="btn btn-outline-info">
                            <i class="fa-solid fa-solid fa-pen-to-square fa-flip"></i> UPDATE</a>
                        <a href="delete.php?ID=<?php echo $row['id']; ?>" class="btn btn-outline-danger">
                            <i class="fa-solid fa-trash fa-fade"></i> DELETE </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>