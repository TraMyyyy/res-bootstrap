<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style-manage-order.css">
  </head>
  <body>

  <!-- Navbar start here -->
      <div class = "border-bottom border-2 border-dark my-0">
  <ul class="navbar nav justify-content-center p-3 mb-2 mb-lg-0 ">
  <li class="nav-item">
    <a class="nav-link nv fw-bold" href="dashboard.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nv fw-bold" href="#">Admin</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nv fw-bold" href="manage-categories.php">Categories</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nv fw-bold" href="manage-food.php">Food</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nv fw-bold" href="manage-order.php">Order</a>
  </li>
  <li class="nav-item">
    <a class="nav-link nv fw-bold" href="#">Logout</a>
  </li>
</div>
</ul>
<!-- Navbar end here -->

<!-- Dashboard start here -->
<div class ="my-0 manage d-flex">
  <div class = "container">
  <div class = "title m-4">
    <h1>Dashboard</h1>
  </div>
      <div class = "row row-cols row-cols-md-4">
        <div class = "col col-auto">
            <div class = "card m-5 p-4">
                <h5 class ="p-1"><center>3</center></h5>
                <h5 class ="p-1"><center>Categories</center></h5>
            </div>
        </div>
        <div class = "col col-auto">
            <div class = "card m-5 p-4">
                <h5 class ="p-1"><center>6</center></h5>
                <h5 class ="p-1"><center>Foods</center></h5>
            </div>
        </div>
        <div class = "col col-auto">
            <div class = "card m-5 p-4">
                <h5 class ="p-1"><center>3</center></h5>
                <h5 class ="p-1"><center>Total Orders</center></h5>
            </div>
        </div>
        <div class = "col col-auto">
            <div class = "card m-5 p-4">
                <h5 class ="p-1"><center>$36.00</center></h5>
                <h5 class ="p-1"><center>Revenue Generated</center></h5>
            </div>
        </div>
      </div>
  </div>
</div>
<!-- Dashboard end here -->

<!-- Footer start here -->
<div class = "bg-danger my-0 pt-2">
  <div class = "footer row justify-content-center">
    <h2 class ="col-auto px-0">2020 All rights reversed. Food house. Developed by . </h2>
    <h2 class = "text-primary text-decoration-underline col-auto px-1">CSE485</h2>
  </div>

<!-- Footer end here -->

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