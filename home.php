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
    <!-- explore foods-->
    <div class="container-flud">
        <div class="row">
            <div class="text-center">
                <h2 class="float">Explore Foods</h2>
            </div>
        </div>
    </div>
    <!--img explore foods-->
    <div class="container">
        <div class="row ">
            <div class="col-md-4">
                <a href="">
                    <img src="images/pizza.jpg" alt="" class="img-curve">
                </a>
                <h3 class="text-center">Pizza</h3>
            </div>
            <div class="col-md-4">
                <a href="">
                    <img src="images/burger.jpg" alt="" class="img-curve">
                </a>
                <h3 class="text-center">Burger</h3>
            </div>
            <div class="col-md-4">
                <a href="">
                    <img src="images/momo.jpg" alt="" class="img-curve">
                </a>
                <h3 class="text-center">Momo</h3>
            </div>
        </div>
    </div>
    <!-- end-->

    <!--menu-->
    <div class="container explore-food my-bg bg">
        <div class="row">
            <div class="text-center">
                <h2 class="pad">Food Menu</h2>
            </div>
            <!-- card images -->
            <div class="col-md-6 left">
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
            <div class="col-md-6 left">
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
            <div class="col-md-6 left">
                <div class="card mb-3 img-curve" style="max-width: 450px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/menu-momo.jpg" alt="Dumplings Specials" class="img-fluid img-card img-curve">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Sakedo Momo</h5>
                                <p class="card-text">$6.00</p>
                                <p class="card-text">Best Spicy Momo for Winter.</p>
                                <br>
                                <a href="" class="btn btn-primary text-white nav-link">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 left">
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
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="#">See All Foods</a>
                </li>
            </ul>
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
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>