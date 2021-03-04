<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Gymso Fitness HTML Template</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="home_assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="home_assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="home_assets/css/aos.css">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="home_assets/css/tooplate-gymso-style.css">
        <!--
        Tooplate 2119 Gymso Fitness
        https://www.tooplate.com/view/2119-gymso-fitness
        -->
    </head>
    <body data-spy="scroll" data-target="#navbarNav" data-offset="50">
            
        <!-- MENU BAR -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                
                <<img src="home_assets/images/kb.png" alt="alt"/>

                <a class="navbar-brand" href="home.php">Gymso Fitness</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a href="home.php#top" class="nav-link smoothScroll">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="home.php#about" class="nav-link smoothScroll">About Us</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="home.php#contact" class="nav-link smoothScroll">Contact</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="index.php" class="nav-link smoothScroll">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a href="product.php" class="nav-link smoothScroll">Our Products</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="cart.php" class="nav-link smoothScroll">Cart</a>
                        </li>

                    </ul>
                    <ul>
                        <li>
                            <?php if (isset($_SESSION['user']['username'])) {?>
                            <a href="logout.php" class="btn custom-btn bg-color mt-3">Logout</a>
                            <?php } else{?>
                            <a href="index.php" class="btn custom-btn bg-color mt-3">Login</a>
                            <?php }?>
                        </li>
                    </ul>    

                </div>

            </div>
        </nav>


    <!-- SCRIPTS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
    <script src="assets/js/custom.js"></script>

</body>
</html>