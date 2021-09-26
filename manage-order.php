<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Manage order</title>
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

<!-- Manage Order start here -->
<div class ="my-0 manage d-flex">
  <div class = "container">
  <div class = "title m-4">
    <h1>Manage Order</h1>
  </div>
  <div class ="table-responsive">
      <table class="table m-4">
      <thead>
        <tr>
          <th scope="col col-auto">S.N.</th>
          <th scope="col col-auto">Food</th>
          <th scope="col col-auto">Price</th>
          <th scope="col col-auto">Qty.</th>
          <th scope="col col-auto">Total</th>
          <th scope="col col-auto">Order Date</th>
          <th scope="col col-auto">Status</th>
          <th scope="col col-auto">Customer Name</th>
          <th scope="col col-auto">Contact</th>
          <th scope="col col-auto">Email</th>
          <th scope="col col-auto">Address</th>
          <th scope="col col-auto">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mixed Pizza</td>
          <td>10.0</td>
          <td>2</td>
          <td>20.0</td>
          <td>11:13:40</td>
          <td class = "text-success">Delivered</td>
          <td>Jana Bush</td>
          <td>012345678</td>
          <td>xxxx@gmail.com</td>
          <td>123 Ant Street</td>
          <td><h2 class ="bg-success text-wrap badge">Update Order</h2></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Mixed Pizza</td>
          <td>10.0</td>
          <td>2</td>
          <td>20.0</td>
          <td>11:13:40</td>
          <td class = "text-success">Delivered</td>
          <td>Jana Bush</td>
          <td>012345678</td>
          <td>xxxx@gmail.com</td>
          <td>123 Ant Street</td>
          <td><h2 class ="bg-success text-wrap badge">Update Order</h2></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Mixed Pizza</td>
          <td>10.0</td>
          <td>2</td>
          <td>20.0</td>
          <td>11:13:40</td>
          <td class = "text-danger">Cancelled</td>
          <td>Jana Bush</td>
          <td>012345678</td>
          <td>xxxx@gmail.com</td>
          <td>123 Ant Street</td>
          <td><h2 class ="bg-success text-wrap badge">Update Order</h2></td>
        </tr>
      </tbody>
    </table>
</div>
  </div>
</div>
<!-- Manage Order end here -->

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