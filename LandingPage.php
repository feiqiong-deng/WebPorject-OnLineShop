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

  <!-- <script src="search-results.js"></script> -->
  <!-- <script src="LandingPage.js"></script> -->
  <title>Project Part 1</title>
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
            <form name="myForm" action="./search-results.php" method="get">
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
  <!-- The first row of the main content of the landing page. -->
  <div class="center">
    <div class="containerp">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./image1.png" class="d-block w-100" alt="image1">
            <div class="carousel-caption d-none d-md-block"></div>
          </div>
          <div class="carousel-item">
            <img src="./sale4.png" class="d-block w-100" alt="sale4">
            <div class="carousel-caption d-none d-md-block"></div>
          </div>
          <div class="carousel-item">
            <img src="./sale2.png" class="d-block w-100" alt="sale2">
            <div class="carousel-caption d-none d-md-block"></div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <!-- The second row of the main content of the landing page. -->
  <div class="middle" style="padding-top: 18px;">
    <p><img src="./TG.jpg" alt="image2"></p>
    <br>
    <br>
    <br>
    <p style="font-size:xx-large;font-weight:bold;">New. Smart Choice. Good Price.</p>
    <p style="font-size:x-large;font-weight:bold;color:rgb(87, 86, 86);">We have more than 1,000 trending products--</p>
    <p style="font-size:x-large;font-weight:bold;color:rgb(87, 86, 86);">and you will love it.</p>
    <br>
    <button type="button" class="btn btn-outline-secondary">LERAN MORE</button>
  </div>
  <!-- This is the title of featured products. -->
  <div class="featured products" style="background-color: oldlace; padding:25px;">
    <h2 style="font-size: xx-large;text-align: center;padding-top: 50px;">Featured products</h2>
  </div>
  <!-- These are four columns of featured products.  -->
  <div class="featured">
    <div class="clearfix">
      <div class="responsive" style="background-color: oldlace;">
        <div class="gallery">
          <a target="_blank" href="image3.png">
            <img src="./image3.png" alt="image3">
          </a>
          <div class="desc">COSMETICS</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="image4.png">
            <img src="./image4.png" alt="image4">
          </a>
          <div class="desc">SMALL APPLIANCES</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="image5.png">
            <img src="./image5.png" alt="image5" style="padding-left: 1px;">
          </a>
          <div class="desc">COMPUTERS</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="image6.png">
            <img src="./image6.png" alt="image6">
          </a>
          <div class="desc">SPORTS AND LEISURES</div>
        </div>
      </div>
    </div>
  </div>
  <!-- This is the last row of the main content. -->
  <div class="container-fluid-lower" style="background-color: oldlace; padding-top: 90px">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-5" style="background-color: rgb(236, 233, 233);">
        <br>
        <br>
        <br>
        <p style="font-size:xx-large;font-weight:bold;text-align:center;">Delight with an e-gift card</p>
        <br>
        <p style="font-size:x-large;font-weight:bold;color:rgb(87, 86, 86);text-align:center;">Perfect for special occations</p>
        <br>
        <button type="button" class="btn btn-outline-secondary" style="margin-left: 300px;">SHOP NOW</button>
        <br>
      </div>
      <div class="col-sm-5"><img src="./giftcard.png" alt="giftcard" style="margin-left:-20px; width: 800px;"></div>
      <div class="col-sm-1"></div>
    </div>
  </div>
  <div class="end" id="end" style="background-color: oldlace;height: 250px;padding-top: 180px;">
    <ul class="nav justify-content-center" style="font-size: 18px;">
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:rgb(87, 86, 86);"><i class="fas fa-envelope"></i> Email Offers |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: rgb(87, 86, 86);"><i class="fas fa-mobile-alt"></i> Download the App |</i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: rgb(87, 86, 86);"><i class="fas fa-calendar-alt"></i> Events |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: rgb(87, 86, 86);"> <i class="fas fa-comment-dollar"></i> SmartBuy Rewards</a>
      </li>
    </ul>
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