<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="manage.css">
    <title>Restaurant Website</title>
</head>

<body>
    <!-- Header -->
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Admin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Food</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Order</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
        </li>
    </ul>
    <!-- end Header -->

    <!-- Dashboard -->
    <div class="container mys" style="background-color: rgb(241, 240, 240);">
        <h1>Dashboard</h1>

        <div class="grid">
            <div class="container-fluid">
                <div class="row d-inline-flex box-pos" style="padding-left: 5%;">
                    <!-- Gallery Item 1 -->
                    <div class="col-6 col-sm-4 col-md-3 p-2 size-box">
                        <div class="card h-100">
                            <h4 class="card-title text-center box-text">4</h4>
                            <p class="card-text text-center box-text">Categories</p>
                        </div>
                    </div>
                    <!-- Gallery Item 2 -->
                    <div class="col-6 col-sm-4 col-md-3 p-2 size-box">
                        <div class="card h-100">
                            <h4 class="card-title text-center box-text">6</h4>
                            <p class="card-text text-center box-text">Foods</p>
                        </div>
                    </div>
                    <!-- Gallery Item 3 -->
                    <div class="col-6 col-sm-4 col-md-3 p-2 size-box">
                        <div class="card h-100">
                            <h4 class="card-title text-center box-text">3</h4>
                            <p class="card-text text-center box-text">Total Orders</p>
                        </div>
                    </div>
                    <!-- Gallery Item 4 -->
                    <div class="col-6 col-sm-4 col-md-3 p-2 size-box">
                        <div class="card h-100">
                            <h4 class="card-title text-center box-text">$36.00</h4>
                            <p class="card-text text-center box-text">Revenue Generated</p>
                        </div>
                    </div>
                </div>
                <div class="clear-fix"></div>
            </div>
        </div>
    </div>
    <!-- End Dashboard -->

    <!-- Footer -->
    <footer class="text-center footer">
        <!-- Copyright -->
        <div class="text-center p-3 text-white">
            2021 All rights reserved, Food House. Developed By
            <a class="text-link" href="#">Trung Lê</a>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>