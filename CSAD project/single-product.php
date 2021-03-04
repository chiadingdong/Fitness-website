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
        /** @var type $_GET */
        $item_id = $_GET['item_id'] ?? 0;
        $_POST['item_id'] = $item_id
        ?>


    </head>

    <body data-spy="scroll" data-target="#navbarNav" data-offset="50">

        <?php include('navbar.php') ?>

        <!-- Page Content -->
        <!-- Single Starts Here -->
        <div class="single-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h1 style="margin-top: 120px"></h1>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-slider">
                            <div id="slider" class="flexslider">
                                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                    <img src="<?php echo $productimages[$item_id] ?>" alt="Image">
                                </div>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-content">
                            <h2><?php echo $productnames[$item_id] ?></h2>
                            <h6>$<?php echo $productcosts[$item_id] ?></h6>
                            <p style="font-size:15px;"><?php echo $productdescriptions[$item_id]?></p>
                            <span><?php echo $productquantities[$item_id] ?> left in stock</span>
                            <form action="product.php" method="POST">
                                <label for="quantity">Quantity </label>
                                <input name="quantity" type="number" class="quantity-text" id="quantity" value="1" min="1">
                                <input name="item_id" type ="hidden" value="<?php echo $item_id; ?>">
                                <button type="submit" class="form-control" id="submit-button">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Page Ends Here -->
        <p>

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

