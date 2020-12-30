<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- fontawesome CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!-- My CSS-->
  <link rel="stylesheet" href="./LandingPage.css">
  <link rel="stylesheet" href="./product.css">

  <script src="product.js"></script>
  <title>Product Page</title>
  <style>
    .col-6 > img {
      width:80%;
     }  
    .col-6 {
        padding-top: 50px;
        padding-left: 50px;
        padding-bottom: 80px;
     }
     #productImage {
        padding-left: 180px;
     }
     #info {
         padding-right:180px;
         padding-top:90px;
     }
  </style>
</head>

<body>
  <!-- The header of the page -->
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
            <form name="myForm" action="./search-results.php" method="get">
              <input type="text" id="mySearch" placeholder="Search..." name="search">
              <!-- <div class="input-group-btn align-middle"> -->
              <button class="btn btn-default" type="submit"><i class="fas fa-search fa-lg"></i></button>
              <!-- </div> -->
            </form>
          </div>
        </div>
        <div class="col-md d-flex align-items-center justify-content-end" id="Links">
          <ul class="nav justify-content-end" style="font-size: 18px;">
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: rgb(87, 86, 86);">Wish List <i class="fa fa-heart"
                  aria-hidden="true"> |</i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: rgb(87, 86, 86);">View Cart <i
                  class="fas fa-shopping-cart"></i></a>
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
      <a href="/menu/"><i class="fa fa-bars" aria-hidden="true"
          style="font-size: xx-large; color: rgb(87, 86, 86)"></i></a>
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
  <div>
    <div class="navigator">
      <nav>
        <a href="/LandingPage.html">Home /</a>
        <a href="/LandingPage.html">Home /</a>
        <a href="/LandingPage.html">Electronics /</a>
        <a href="/LandingPage.html">Headphones & Speakers </a>
      </nav>
    </div>
  </div>

    <!-- Product images slide show-->
  <div id="pageMiddle">
      <div class="container-fluid">
          <div class="row">
              <div class="col-6" id="productImage">
                  <!-- Display product image. -->
                  <?php
                      include "connection.php";
          
                      $id = $_GET['id'];
                                        
                      // sql queries to selecte data form table product.
                      $sql = "SELECT product_image FROM Product WHERE id=$id";
                      $result = $conn->query($sql);
                      $row = mysqli_fetch_assoc($result);
                      
                      // Display the product image.
                      echo '<img src="' . './' . $row['product_image'] . '"';
                      
                      mysqli_close($conn);
                  ?>            
              </div>
          </div>

              <div class="col-6" id="info">             
                  <!-- Fetch product information from database. -->              
                  <?php
                      // Connect database.
                      include "connection.php";

                      // sql queries to selecte data form table product.
                      $sql = "SELECT product_name, brand, rating, price FROM Product WHERE id=$id";
                      $result = $conn->query($sql);
                      $row = mysqli_fetch_assoc($result);

                      // Define the template of displaying product information.
                      $template = '  
                          <h3 id="name">{NAME}</h3>
                          <a id="brand" href="/LandingPage.html">{BRAND}</a>
                          <div class="rating">
                              <p>Rating:</p>
                              <p id="rating">{RATING}</p>
                          </div>
                          <hr>
                          <div class="priceInformation">
                              <p>Price: CND$</p>
                              <p id="price">{PRICE}</p>
                          </div>           
                      ';

                      // Replace the information from database.
                      $product = str_replace('{NAME}', $row['product_name'], $template);
                      $product = str_replace('{BRAND}', $row['brand'], $product);
                      $product = str_replace('{RATING}', $row['rating'], $product);
                      $product = str_replace('{PRICE}', $row['price'], $product);

                      echo $product;  // Display information.

                      mysqli_close($conn);  // close the database.
                  ?>

                  <p style="font-size: 20px;">Quantity</p>
                  <input id="number" type="number" min="0" oninput="totoalPrice()" placeholder="0" />
                  <br>
                  <p style="font-size: 20px;">Total Price</p>
                  <input type="text" id="totalPrice" placeholder="0.00">
                  <br>
                  <br>
                  <i class="fas fa-cart-plus"></i> <button type="button" class="btn btn-outline-secondary">Add to Cart</button>
                  <br>
                  <br>
                  <form action="/action_page.php">
                      <div class="form-check">
                      <label class="form-check-label" for="radio1">
                          <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Ship It
                      </label>
                      </div>
                      <div class="form-check">
                      <label class="form-check-label" for="radio2">
                          <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Pick Up In Store
                      </label>
                      </div>
                  </form>
                  <hr>
                  <h3><i class="fas fa-info-circle"></i>Product Details</h3>

                  <!-- Diplay product details. -->
                  <?php
                      include "connection.php";
                  
                      $sql = "SELECT details FROM Product WHERE id=$id";
                      $result = $conn->query($sql);
                      $row = mysqli_fetch_assoc($result);

                      $template = '  
                      <p id="details">{DETAILS}</p>
                      ';
                      $product = str_replace('{DETAILS}', $row['details'], $template);
                      
                      echo $product;
                      mysqli_close($conn);
                  ?>
              </div>
          </div>
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