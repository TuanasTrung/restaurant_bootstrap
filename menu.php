<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- File CSS của bạn nên đặt ở dưới cùng để GHI ĐÈ các tác động -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- logo -->
    <header>
        <nav class="navbar navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" alt="" class="d-inline-block align-text-top">
                </a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- end logo -->

    <!-- food search -->
    <section class="food-search text-center">
        <div class="container">
            <form action="">
                <input type="search" name="search" placeholder="Search for food...">
                <input type="submit" name="submit" value="Search" class="btn1 btn-primary">
            </form>
        </div>
    </section>
    <!-- end food search -->
    <!--menu-->
    <div class="container-flud explore-food my-bg bg">
        <div class="row">
            <div class="text-center">
                <h2 class="pad">Food Menu</h2>
            </div>
            <!-- card images -->
            <div class="col-md-6 left-l">
                <div class="card mb-3 img-curve" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/menu-momo.jpg" alt="Dumplings Specials" class="img-fluid img-card img-curve">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Dumplings Specials</h5>
                                <p class="card-text">$5.00</p>
                                <p class="card-text">Chickent Dumpling with herbfrom Mountains.</p>
                                <a href="" class="btn btn-primary text-white nav-link">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 left-r">
                <div class="card mb-3 img-curve" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/menu-burger.jpg" alt="Dumplings Specials" class="img-fluid img-card img-curve">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Best Burger</h5>
                                <p class="card-text">$4.00</p>
                                <p class="card-text">Burger with Ham, Pineapple and lots of Cheese.</p>
                                <a href="" class="btn btn-primary text-white nav-link">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 left-l">
                <div class="card mb-3 img-curve" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/menu-pizza.jpg" alt="Dumplings Specials" class="img-fluid img-card img-curve">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Smoky BBQ Pizza</h5>
                                <p class="card-text">$6.00</p>
                                <p class="card-text">Best Firewood Pizza in Town.</p>
                                <a href="" class="btn btn-primary text-white nav-link">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 left-r">
                <div class="card mb-3 img-curve" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/menu-momo.jpg" alt="Dumplings Specials" class="img-fluid img-card img-curve">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Sadeko Momo</h5>
                                <p class="card-text">$6.00</p>
                                <p class="card-text">Best Spicy Momo for Winter.</p>
                                <a href="" class="btn btn-primary text-white nav-link">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 left-l">
                <div class="card mb-3 img-curve" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/menu-momo.jpg" alt="Dumplings Specials" class="img-fluid img-card img-curve">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Mixed Pizza</h5>
                                <p class="card-text">$10.00</p>
                                <p class="card-text">Pizza with chicken, Ham, Buff, Mushroom and Vegatables.</p>
                                <a href="" class="btn btn-primary text-white nav-link">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--social-->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href=""><img src="https://img.icons8.com/fluency/48/000000/facebook-new.png" /></a>
                </li>
                <li>
                    <a href=""><img src="https://img.icons8.com/fluency/48/000000/instagram-new.png" /></a>
                </li>
                <li>
                    <a href=""><img src="https://img.icons8.com/color/48/000000/twitter--v1.png" /></a>
                </li>
            </ul>
        </div>
    </section>
    <!--create by-->
    <section class="text-center">
        <div class="container">
            <p>All rights reserved. Designed by <a href="">TrungLe</a></p>
        </div>
    </section>
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