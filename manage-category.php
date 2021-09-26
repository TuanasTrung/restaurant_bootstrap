<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="manage.css">
    <title>Manage</title>
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
    <!-- Table -->
    <div class="container mys" style="background-color: rgb(241, 240, 240); padding-left: 4%">
        <h1>Manage Category</h1>
        <button type="button" class="button-table" style="cursor: pointer;">Add Category</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Featured</th>
                    <th scope="col">Active</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Pizza</td>
                    <td class="img-pos"><img src="images/pizza.jpg" alt="pizza" class="img-manage"></td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td style="font-weight:bold" class="text-manage">
                        <a href="" class="btn btn-primary" style="background-color: #2dc653; cursor: pointer; color: black">Update Category</a>
                        <a href="" class="btn btn-primary">Delete Category</a>
                    </td>
                </tr><tr>
                    <td>2.</td>
                    <td>Burger</td>
                    <td class="img-pos"><img src="images/burger.jpg" alt="burger" class="img-manage"></td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td style="font-weight:bold" class="text-manage">
                        <a href="" class="btn btn-primary" style="background-color: #2dc653; cursor: pointer; color: black">Update Category</a>
                        <a href="" class="btn btn-primary">Delete Category</a>
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>MoMo</td>
                    <td class="img-pos"><img src="images/momo.jpg" alt="momo" class="img-manage"></td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td style="font-weight:bold" class="text-manage">
                        <a href="" class="btn btn-primary" style="background-color: #2dc653; cursor: pointer; color: black">Update Category</a>
                        <a href="" class="btn btn-primary">Delete Category</a>
                    </td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Quia est ipsum id id</td>
                    <td class="img-pos"><img src="images/pizza.jpg" alt="pizza" class="img-manage"></td>
                    <td>No</td>
                    <td>Yes</td>
                    <td style="font-weight:bold" class="text-manage">
                        <a href="" class="btn btn-primary" style="background-color: #2dc653; cursor: pointer; color: black">Update Category</a>
                        <a href="" class="btn btn-primary">Delete Category</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- end Table -->
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