<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Manage Food</title>
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
    <a class="nav-link nv fw-bold" href="manage-user.php">Admin</a>
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
    <h1>Manage Category</h1>
    <a href="#" class = "btn bg-primary text-light">Add category</a>
  </div>
    
  <div class ="table-responsive">
      <table class="table m-4">
      <thead>
        <tr>
          <th scope="col col-auto">S.N.</th>
          <th scope="col col-auto">Title</th>
          <th scope="col col-auto">Price</th>
          <th scope="col col-auto">Images</th>   
          <th scope="col col-auto">Feature</th>
          <th scope="col col-auto">Active</th>
          <th scope="col col-auto">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr >
          <th scope="row">1</th>
          <td>Mixed Pizza</td>
          <td>5.0</td>
          <td><img src="images/pizza.jpg" alt="" style = "width:10rem"></td>
          <td>Yes</td>
          <td>Yes</td>
          <td>
            <div class ="row">
            <a href="#" class = "col-4 col-auto rounded bg-success text-decoration-none p-1 m-1 text-center"><h3>Update Category</h3></a>
            <a href="#" class = "col-4 col-auto rounded bg-danger text-decoration-none p-1 m-1 text-center"><h4>Delete Category</h4></a>
          </div>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Burger Specials</td>
          <td>5.0</td>
          <td><img src="images/burger.jpg" alt="" style = "width:10rem"></td>
          <td>Yes</td>
          <td>Yes</td>
          <td>
            <div class ="row">
              
            <a href="#" class = "col-4 col-auto rounded bg-success text-decoration-none p-1 m-1 text-center"><h3>Update Category</h3></a>
            <a href="#" class = "col-4 col-auto rounded bg-danger text-decoration-none p-1 m-1 text-center"><h4>Delete Category</h4></a>
          </div>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Dumplings Specials</td>
          <td>5.0</td>
          <td><img src="images/momo.jpg" alt="" style = "width:10rem"></td>
          <td>Yes</td>
          <td>Yes</td>
          <td>
            <div class ="row">
              
            <a href="#" class = "col-4 col-auto rounded bg-success text-decoration-none p-1 m-1 text-center"><h3>Update Category</h3></a>
            <a href="#" class = "col-4 col-auto rounded bg-danger text-decoration-none p-1 m-1 text-center"><h4>Delete Category</h4></a>
          </div>
          </td>
        </tr>
        <tr>
        <tr>
          <th scope="row">4</th>
          <td>Mixed Pizza</td>
          <td>5.0</td>
          <td><img src="images/pizza.jpg" alt="" style = "width:10rem"></td>
          <td>Yes</td>
          <td>No</td>
          <td>
            <div class ="row">
              
            <a href="#" class = "col-4 col-auto rounded bg-success text-decoration-none p-1 m-1 text-center"><h3>Update Category</h3></a>
            <a href="#" class = "col-4 col-auto rounded bg-danger text-decoration-none p-1 m-1 text-center"><h4>Delete Category</h4></a>
          </div>
          </td>
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