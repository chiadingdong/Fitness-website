<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

        <title>Gymsoo Fitness - Product Detail</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">



        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/flex-slider.css">
        <link rel="stylesheet" href="css/tooplate-gymso-style.css">

        <?php
        require_once 'config.php';
        include 'product-table.php';
        include 'cart-table.php';

        $item_id = -1;
        $quantity = 0;

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $item_id = $_POST['item_id'];
            $quantity = $_POST['quantity'];

            if (($productquantities[$item_id] - $quantity <= 0)) {
                echo "<script>alert('Failed to add to cart! Not enough stock!';</script>";
            } else {
                if (in_array($productids[$item_id], $cart_productid)) {
                    $i = array_search($productids[$item_id], $cart_productid);
                    $total_quantity = $quantity + $cart_quantity[$i];
                    $sql = "UPDATE cart SET quantity = $total_quantity WHERE cart_id =  $cart_id[$i]";
                    $conn->query($sql);
                } else {
                    $sql = "INSERT INTO cart (product_id, quantity) VALUES ('$productids[$item_id]','$quantity')";
                    $conn->query($sql);
                }
            }
        }
        /* $sql = "SELECT*FROM cart WHERE product_id ="

          $total_quantity = $cart_quantity[$i] + $cart_quantity[$j];
          $sql = "UPDATE cart SET quantity = $total_quantity WHERE cart_id =  $cart_id[$j]";
          $conn->query($sql);
          $sql = "DELETE FROM cart WHERE cart_id = $cart_id[$i]";
          $conn->query($sql);

          /* for ($i = 0; $i < count($cart_id); $i++) {
          for ($j = 0; $j < count($cart_id); $j++) {
          if ($cart_productid[$i] == $cart_productid[$j] && $i!=$j) {
          $total_quantity = $cart_quantity[$i] + $cart_quantity[$j];
          $sql = "UPDATE cart SET quantity = $total_quantity WHERE cart_id =  $cart_id[$j]";
          $conn->query($sql);
          $sql = "DELETE FROM cart WHERE cart_id = $cart_id[$i]";
          $conn->query($sql);
          }
          $j=0;
          }
          $i=0;
          } */
        ?>
    </head>

    <body data-spy="scroll" data-target="#navbarNav" data-offset="50">

        <!-- Navigation -->
        <?php include('navbar.php') ?>

        <!-- Page Content -->
        <div class="featured-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="section-heading">
                            <div class="line-dec"></div>
                            <h1>Featured Items</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="featured container no-gutter">
            <div class="row posts">
                <?php
                for ($i = 0; $i < count($productids); $i++):
                    ?>    
                    <div class="item new col-md-4">
                        <a href="<?php printf('%s?item_id=%s', 'single-product.php', $i); ?>">
                            <div class="featured-item">
                                <img src="<?php echo $productimages[$i] ?? "assets/images/product-01.jpg"; ?>" alt="">
                                <h4><?php echo $productnames[$i]; ?></h4>
                                <h6>$<?php echo $productcosts[$i]; ?></h6>
                            </div>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <br><br><br>

        <!-- Featured Page Ends Here -->

        <!-- Footer Starts Here -->
        <?php include('footer.php') ?>
        <!-- Footer Ends Here -->

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


        <!-- Additional Scripts -->
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/isotope.js"></script>
        <script src="assets/js/flex-slider.js"></script>


        <script language = "text/Javascript">
                    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
                    function clearField(t) {                   //declaring the array outside of the
                        if (!cleared[t.id]) {                      // function makes it static and global
                            cleared[t.id] = 1;  // you could use true and false, but that's more typing
                            t.value = '';         // with more chance of typos
                            t.style.color = '#fff';
                        }
                    }
        </script>


    </body>

</html>

