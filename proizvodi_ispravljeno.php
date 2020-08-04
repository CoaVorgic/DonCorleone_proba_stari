<?php session_start(); require "db_config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/main.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Don Corleone</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Početna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="proizvodi_ispravljeno.php">Proizvodi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addprod.php">Dodaj novi proizvod</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php">Admin stranica</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rezervacija.php">Rezervacija</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dostava.php">Dostava</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
        <span class="navbar-text">
            <span class="products-welcome-admin-name">Dobrodosli <?php echo $_SESSION['username']; ?></span>
        </span>
    </div>
</nav>


<div class="products-content">
    <div class="col-sm-12 products-content-section">
        <h3 class="products-content-section-title">Svi proizvodi</h3>
        <hr>
            <?php
                $sql= "SELECT * FROM menu";
                $result = mysqli_query($connection , $sql) or die(mysqli_error($connection));
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)) {
                ?>
            <div class="col-sm-12 products-content-section-card">
                <div class="col-sm-3 products-content-section-card-img">
                    <img class="img-responsive" src="images/<?= $row['picture'];?>" alt="<?= $row['name'];?>">
                </div>
                <div class="col-sm-9">
                    <div class="col-sm-8 products-content-section-card-description">
                        <h3><?= $row['name'];?></h3>
                        <h6><?= $row['description'];?></h6>
                    </div>
                    <div class="col-sm-4 products-content-section-card-price">
                        <h3><?= $row['price'];?> RSD</h3>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>

