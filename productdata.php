<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- fontawesome CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!-- My CSS-->
  <link rel="stylesheet" href="./LandingPage.css">

  <script src="search-results.js"></script>
  <script src="LandingPage.js"></script>
  <title>Project Part 1</title>

  <style>
      .productdata {
        background-color:oldlace;
        padding-top: 40px;
        padding-bottom: 50px;
      }
      .productdata h1 {
        text-align: center;
        color:rgb(87, 86, 86);
      }
      .container label {
        font-size:25px;
      }
  </style>
</head>
<body>
  <!-- The header of the page -->
  <div class="top">
    <div class="container-fluid">
      <div class="row">
        <!-- This the logo. -->
        <div class="col-md-1 d-flex align-items-center">
          <img src="./logo1.png" alt="logo">
        </div>
        <!-- This is the title of the website. -->
        <div class="col-md-2 d-flex align-left">
          <label style="font-size: 90px; color: rgb(87, 86, 86);">SmartBuy</label>
        </div>
        <!-- This is the search bar. -->
        <div class="col-md-1 d-flex align-left"></div>
        <div class="col-md-5 d-flex align-items-center" id="Search">
          <div class="input-group">
            <form name="myForm" action="./search-results.html" onsubmit="return visitSearchPage()" method="get">
              <input type="text" id="mySearch" placeholder="Search..." name="search">
              <!-- <div class="input-group-btn align-middle"> -->
              <button class="btn btn-default" type="submit"><i class="fas fa-search fa-lg"></i></button>
              <!-- </div> -->
            </form>                        
          </div>
        </div>
        <div class="col-md d-flex align-items-center justify-content-end" id="Links">
          <ul class="nav justify-content-end" style="font-size: 15px;">
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:rgb(87, 86, 86);">Sign In |</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: rgb(87, 86, 86);">Wish List <i class="fa fa-heart" aria-hidden="true"> |</i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: rgb(87, 86, 86);">View Cart <i class="fas fa-shopping-cart"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: rgb(87, 86, 86);">Sign Up <i class="fas fa-user-plus"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- These are links to product categories.   -->
  <div class="choice">
    <nav>
      <a href="/menu/"><i class="fa fa-bars" aria-hidden="true" style="font-size: xx-large; color: rgb(87, 86, 86)"></i></a>
      <a href="/SignIn/">NEW IN</a>
      <a href="/WishList/">HOME</a>
      <a href="/View Cart/">WOMEN</a>
      <a href="/View Cart/">MEN</a>
      <a href="/View Cart/">KIDS & BABY</a>
      <a href="/View Cart/">BEAUTY</a>
      <a href="/View Cart/">ELECTRONICS</a>
      <a href="/View Cart/">COMPUTERS</a>
      <a href="/View Cart/">COUPONS</a>
      <a href="/View Cart/">GIFT CARDS</a>
      <a href="/View Cart/">BEST SELLERS</a>
    </nav>
  </div>

  <!-- Product data management form -->
  <div class="productdata">
        <div class="container">
            <h1>Product Data Management</h1>
            <br>
            <h2>Adding a new product</h2>
            <br>
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="product_name">Name of product:</label>
                    <input type="text" class="form-control" id="product_name" placeholder="Enter product name" name="product_name">
                </div>
                <div class="form-group">
                    <label for="brand">Brand of product:</label>
                    <input type="text" class="form-control" id="brand" placeholder="Enter product brand" name="brand">
                </div>
                <div class="form-group">
                    <label for="rating">Rating of product:</label>
                    <input type="text" class="form-control" id="rating" placeholder="Enter rating of product" name="rating">
                </div>
                <div class="form-group">
                    <label for="price">Price of product:</label>
                    <input type="text" class="form-control" id="price" placeholder="Enter product price" name="price">
                </div>
                <div class="form-group">
                    <label for="details">Description of product:</label>
                    <input type="text" class="form-control" id="details" placeholder="Enter product details" name="details">
                </div>
                <div class="form-group">
                    <label for="product_image">Image of product:</label>
                    <input type="file" class="form-control-file border" name="image">
                    <br>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

  <!-- This is the footer of the page. -->
  <div class="footer" style="background-color:rgb(240, 210, 159);color:rgb(87, 86, 86);padding-bottom: 50px;padding-top: 30px;">
    <table id="table" style="width: 60%; text-align: center; margin-left: 350px; margin-bottom: 20px;">
      <tr style="font-size: 20px;font-weight: bold;">
        <td>Customer Support</td>
        <td>Shop With Us</td>
        <td>Services</td>
        <td>About Us</td>
      </tr>
      <tr>
        <td><a href="default.asp" target="_blank">Contact us</a></td>
        <td><a href="default.asp" target="_blank">Brands A-Z</a></td>
        <td><a href="default.asp" target="_blank">Credit</a></td>
        <td><a href="default.asp" target="_blank">Careers</a></td>
      </tr>
      <tr>
        <td><a href="default.asp" target="_blank">Help & FAQs</a></td>
        <td><a href="default.asp" target="_blank">Gift Cards</a></td>
        <td><a href="default.asp" target="_blank">Finacial Services</a></td>
        <td><a href="default.asp" target="_blank">Services</a></td>
      </tr>
      <tr>
        <td><a href="default.asp" target="_blank">Shipping & Returns</a></td>
        <td><a href="default.asp" target="_blank">SMS Updates</a></td>
        <td><a href="default.asp" target="_blank">Product Protection</a></td>
        <td><a href="default.asp" target="_blank">Become an Affiliate</a></td>
      </tr>
      <tr>
        <td><a href="default.asp" target="_blank">Order Status</a></td>
        <td><a href="default.asp" target="_blank">Bridal</a></td>
        <td><a href="default.asp" target="_blank"></a></td>
        <td><a href="default.asp" target="_blank"></a></td>
      </tr>
      <tr>
        <td><a href="default.asp" target="_blank">Order History</a></td>
        <td><a href="default.asp" target="_blank">Brides</a></td>
        <td><a href="default.asp" target="_blank"></a></td>
        <td><a href="default.asp" target="_blank"></a></td>
      </tr>
      <tr>
        <td><a href="default.asp" target="_blank"></a></td>
        <td><a href="default.asp" target="_blank"></a></td>
        <td><a href="default.asp" target="_blank"></a></td>
        <td><a href="default.asp" target="_blank"></a></td>
      </tr>
    </table>
    <br>
    <hr style="width:68%;text-align:center;">
    <table style="width: 50%; text-align: center; margin-left: 600px;">
      <tr>
        <td style="font-size: x-large;"><a href="default.asp" target="_blank"><i class="fab fa-facebook-square"></i></a>
        </td>
        <td style="font-size: x-large;"><a href="default.asp" target="_blank"><i class="fab fa-instagram"></i></a></td>
        <td style="font-size: x-large;"><a href="default.asp" target="_blank"><i class="fab fa-twitter"></i></a></td>
        <td style="font-size: x-large;"><a href="default.asp" target="_blank"><i class="fab fa-youtube"></i></a></td>
        <td style="font-size: x-large;"><a href="default.asp" target="_blank"><i class="fab fa-pinterest"></i></a></td>
        <td></td>
        <td></td>
        <td style="text-align: end; font-size: large;"><a href="default.asp" target="_blank">Privacy Policy |</a></td>
        <td style="text-align: left; font-size: large;"><a href="default.asp" target="_blank">Terms & Conditions |</a> <a href="default.asp" target="_blank">Site Feedback</a></td>
      </tr>
    </table>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>
</html>