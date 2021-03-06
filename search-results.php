<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <!-- fontawesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <!-- Bootstrap Table -->
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.css">
        <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>

        <title>Search Results - SmartBuy</title>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Custom Code for Assignment Part 2 -->
        <!-- <script src="search-results.js"></script> -->
        
    </head>
    <body class='middle'>
        <div class="top">
            <div class="container-fluid">
              <div class="row">
                <!-- This the logo. -->
                <div class="col-md-1 d-flex align-items-center">
                  <img src="./logo.jpg" alt="logo">
                </div>
                <!-- This is the title of the website. -->
                <div class="col-md-2 d-flex align-left">
                  <label style="font-size: 90px; color: rgb(87, 86, 86);">SmartBuy</label>
                </div>
                <!-- These are nav-links, including logo, search bar, sign up and view cart. -->
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

        <!-- Content (Search Results) -->
        <div class='container' style="padding-top: 50px;">
                
            <!-- <form name='product-filters' action="search-results.html" onsubmit="return search();" method="get"> -->
            <form name='product-filters' action="search-results.php"  method="get">

              <!-- This is the search bar. -->
              <tr>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search..." name="search" id="search">
                  <div class="input-group-btn align-middle">
                    <button class="btn btn-default" type="submit"><i class="fas fa-search fa-lg"></i></button>
                  </div>
                </div>
              </tr>
              <label class='mt-3' style='font-size: 20px;'>Filter</label>
              <!-- Filters -->
              <table class='table' id='product-filters'>
              <td>
                <label style='font-size: 16px;'>Price:</label>
                <div class="form-check">        
                    <input class="form-check-input" type="checkbox" name="price" value="0to25" id="0to25" checked>
                    <label class="form-check-label" for="0to25" id='checkbox'>
                    $0 - $25
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="price" value="25to50" id="25to50" checked>
                    <label class="form-check-label" for="25to50" id='checkbox'>
                    $25 - $50
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="price" value="50to75" id="50to75" checked>
                    <label class="form-check-label" for="50to75" id='checkbox'>
                    $50 - $75
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="price" value="75plus" id="75plus" checked>
                    <label class="form-check-label" for="75plus" id='checkbox'>
                    $75+
                    </label>
                </div>
              </td>
              <td>
                <label style='font-size: 16px;'>Rating:</label>
                <div class="form-radio">        
                    <input class="form-radio-input" name="rating" type="radio" value="4" id="4">
                    <label class="form-radio-label" for="4" id='checkbox'>
                    4.0 and up
                    </label>
                </div>
                <div class="form-radio">
                    <input class="form-radio-input" name="rating" type="radio" value="3" id="3">
                    <label class="form-radio-label" for="3" id='checkbox'>
                    3.0 and up
                    </label>
                </div>
                <div class="form-radio">
                    <input class="form-radio-input" name="rating" type="radio" value="2" id="2">
                    <label class="form-radio-label" for="2" id='checkbox'>
                    2.0 and up
                    </label>
                </div>
                <div class="form-radio">
                    <input class="form-radio-input" name="rating" type="radio" value="1" id="1" checked>
                    <label class="form-radio-label" for="1" id='checkbox'>
                    1.0 and up
                    </label>
                </div>
              </td>
              <td>
                <label style='font-size: 16px;'>Sort by:</label>
                <select class="form-control mb-3 col-md-5" name="sort" id="sort">
                  <option value='rating-desc'>Rating (High to Low)</option>
                  <option value='rating-asc'>Rating (Low to High)</option>
                  <option value='price-desc'>Price (High to Low)</option>
                  <option value='price-asc'>Price (Low to High)</option>
                </select>
                <button class="btn btn-secondary mt-4" type="submit">Submit</button>
              </td>
              </table>
            </form>

            <!-- Table for Results -->
            <div id='product-table'>
            
            <?php
                // create connection
                include "connection.php";

                $search_term = $_GET['search'];
                
                if ($search_term == '') {
                    $stmt = $conn->prepare("SELECT * FROM product");
                }
                else {
                    $stmt = $conn->prepare("SELECT * FROM product WHERE product_name LIKE CONCAT('%',?,'%')");
                    $stmt->bind_param('s', $search_term);
                }
                $stmt->execute();
                $stmt->bind_result($id, $name, $img, $brand, $rating, $price, $details);


                echo "<table class='table mt-3' style='background-color: rgb(240, 210, 159);' id='product-list'>";
                echo "<thead>";
                echo "    <th></th>";
                echo "    <th>Name</th>";
                echo "    <th>Price</th>";
                echo "    <th>Rating</th>";
                echo "</thead>";


                while ($stmt->fetch()) {

                    echo "<tr class='product'>";
                    echo "    <td><a href='./product.php?id=$id'><img class='td-img' src='$img'></a></td>";
                    echo "    <td><a href='./product.php?id=$id'>$name</a></td>";
                    echo "    <td>$$price</td>";
                    echo "    <td>$rating</td>";
                    echo "</tr>";

                }

                $stmt->close();

                echo '</table>';
            ?>

            </div>
        </div>
            
        <!-- This is the footer of the page. -->
        <div class="footer" style="background-color:rgb(240, 210, 159);color:rgb(87, 86, 86);padding-bottom: 50px;padding-top: 30px;margin-top: 100px;">
            <table id="table" style="width: 60%; text-align: center; margin-left: 350px; margin-bottom: 20px; background-color: rgb(240, 210, 159);">
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
            <table style="width: 50%; text-align: center; margin-left: 600px; background-color: rgb(240, 210, 159);">
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
    </body>
</html>