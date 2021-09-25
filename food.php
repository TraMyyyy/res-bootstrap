<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Home</title>
    <link rel="stylesheet" href="css/style-home.css">
  </head>
  <body>

    <!-- Navbar here -->
<nav class=" navbar navbar-expand-lg navbar-light ">
     <div class = "container">
    <div class ="col-6">
      <a class="navbar-brand" href="">
        <img src="images/logo.png" alt="" >
      </a>
    </div>
    <div class ="col-3">
      <ul class="navbar-nav navbar-collapse me-auto mb-2 mb-lg-0 p-3 ">
        <li class="nav-item">
          <a class="nav-link fw-bold " href="home.php">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link fw-bold " href="categories.php">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="food.php">Food</a>
        </li>
        <li class ="nav-item">
            <a class ="nav-link fw-bold" href="#">Contact</a>
        </li>
      </ul>
   </div> 
</nav>

    <!-- Navbar end here -->

    <!-- Search start here -->
<nav class="navbar mb-0">
  <div class="container-fluid search justify-content-center">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search for Foods..." aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    <!-- Search end here -->


<!-- Food menu start here -->
<div class = "menu py-5">
  <div class ="text-center fs-1 p-4 my-0 fw-bold">
    Food Menu
  </div>
  <div class = "container">
    <div class ="row row-cols-1 row-col-mb-2 justify-content-center">
      <div class = "col col-auto rounded-3">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="images/menu-momo.jpg" class="img-fluid m-2 rounded-3" alt="...">
               </div>
            <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Dumplings Specials</h5>
              <p class="card-text">$4.0</p>
              <p class="card-text"><small class="text-muted">Chicken Dumplings with Herbs from Mountain...</small></p>
              <a href="order.php" class ="btn">Order Now</a>
            </div>
         </div>
        </div>
      </div>
      </div>
      <div class = "col col-auto rounded-3">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="images/menu-burger.jpg" class="img-fluid  rounded-3 m-2" alt="...">
               </div>
            <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Best Burger</h5>
              <p class="card-text">$4.0</p>
              <p class="card-text"><small class="text-muted">Burger with Pineapple and lots of chesse...</small></p>
              <a href="order.php" class ="btn">Order Now</a>
            </div>
         </div>
        </div>
      </div>
      </div>
      <div class = "col col-auto rounded-3">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="images/menu-momo.jpg" class="img-fluid m-2 rounded-3" alt="...">
               </div>
            <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Sakedo Momo</h5>
              <p class="card-text">$6.0</p>
              <p class="card-text"><small class="text-muted">Best spicy momo for Winter...</small></p>
              <a href="order.php" class ="btn">Order Now</a>
            </div>
         </div>
        </div>
      </div>
      </div>
      <div class = "col col-auto rounded-3">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="images/menu-pizza.jpg" class="img-fluid m-2 rounded-3" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Mixed Pizza</h5>
              <p class="card-text">$10.0</p>
              <p class="card-text"><small class="text-muted">Pizza with chicken, ham, buff, mushroom...</small></p>
              <a href="order.php" class ="btn">Order Now</a>
            </div>
            </div>
            </div>
        </div>
        </div>
      <div class = "col col-auto rounded-3">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="images/menu-pizza.jpg" class="img-fluid m-2 rounded-3" alt="...">
               </div>
            <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Mixed Pizza</h5>
              <p class="card-text">$10.0</p>
              <p class="card-text"><small class="text-muted">Pizza with chicken, ham, buff, mushroom...</small></p>
              <a href="order.php" class ="btn">Order Now</a>
            </div>
         </div>
        </div>
        
      </div>
      </div>
    </div>
  </div>

</div>
<!-- Food menu end here -->

<!-- Footer start here -->
<div class = "container mt-4">
  <div class= "social row justify-content-center">
    <a href="" class = "col-auto">
      <img src="images/facebook.png" alt="">
    </a>
    <a href="#" class = "col-auto">
      <img src="images/instagram.png" alt="">
    </a>
    <a href="#" class = "col-auto">
      <img src="images/twitter.png" alt="">
    </a>
  </div>
</div>

<div class = "container my-4">
  <div class = "footer row justify-content-center">
    <h3 class = "col-auto px-0">All rights reversed. Designed by </h3>
    <h3 class = "content col-auto px-1 text-pink-50">CSE485</h3>
  </div>
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
</body>
</html>
