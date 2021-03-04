<!DOCTYPE html>
<html  style="background-color: #eee">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Shopping Cart</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/cart.css">
        <link rel="stylesheet" href="css/tooplate-gymso-style.css">


        <?php
        require_once 'config.php';
        include 'product-table.php';
        include 'cart-table.php';

        $id = 0;
        $total_cost = 0;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            function delete($id) {
                $conn = mysqli_connect("127.0.0.1:3308", "root", "", "fitnessdb");
                $sql = "DELETE FROM cart WHERE product_id=$id";
                $conn->query($sql);
            }

            if (isset($_POST['deleteval'])) {
                $id = $_POST['id'];
                delete($id);
                header("Refresh:0");
            }
            
        }
        ?>

    </head>
    <body style="background-color: #eee">
        <!-- Navigation -->
        <?php include('navbar.php') ?>
        <!-- Page Content -->
        <div class="shopping-cart">
            <!-- Title -->
            <div class="title">
                Shopping Cart - (<?php echo count($cart_productid); ?>)
            </div>

            <!-- Product #1 -->
            <?php for ($i = 0; $i < count($cart_productid); $i++): ?>
                <div class="item" >
                    <div class="formatting">
                        <span class="left"></span>
                        <span class="right"></span>
                    </div>
                    <div class="image">
                        <img width="120px" height="100px" src="<?php
                        $sql = "SELECT product_image FROM product WHERE product_id='$cart_productid[$i]'";
                        $result = mysqli_query($conn, $sql);
                        $value = mysqli_fetch_object($result);
                        echo $value->product_image;
                        ?>" alt="" />
                    </div>
                    <div class="description">
                        <span><?php
                            $sql = "SELECT product_name FROM product WHERE product_id='$cart_productid[$i]'";
                            $result = mysqli_query($conn, $sql);
                            $value = mysqli_fetch_object($result);
                            echo $value->product_name;
                            ?></span>
                    </div>
                    <div class="quantity">
                        <label>Quantity</label>
                        <span><?php echo $cart_quantity[$i] ?></span>
                    </div>
                    <div class="total-price">$<?php
                        $sql = "SELECT product_cost FROM product WHERE product_id='$cart_productid[$i]'";
                        $result = mysqli_query($conn, $sql);
                        $value = mysqli_fetch_object($result);
                        $total = $value->product_cost * $cart_quantity[$i];
                        $total_cost += $total;
                        echo $total;
                        ?>
                    </div>
                    <div class="delete">
                        <form method="post"> 
                            <input type="hidden" name="id" value="<?php echo $cart_productid[$i] ?>"/>
                            <input type="submit" name="deleteval" class="delete-btn" value="REMOVE" />
                        </form> 
                    </div>
                </div>
            <?php endfor; ?>
            <form method="post" action="cart.php" id="paypalform">
                <input type="hidden" name="useless" value="1"/>
                <div class="link" id="paypal-payment-button"></div>
            </form>
            <br/><!-- comment -->
            <div id="showpurchased"></div>
            <script src="https://www.paypal.com/sdk/js?client-id=Acl6O4AwC0zD8kZzLQKAFhG122iO54CkMooIeiCBVXeUPwZRkiyfUSZN4rP5un4TMURa2a260UQtoDMS&disable-funding=credit,card&currency=SGD"></script>
            <script>
                paypal.Buttons({
                    createOrder: function (data, actions) {
                        // This function sets up the details of the transaction, including the amount and line item details.
                        return actions.order.create({
                            purchase_units: [{
                                    amount: {

                                        value: <?php echo $total_cost ?>
                                    }
                                }]
                        });
                    },
                    onApprove: function (data, actions) {
                        // This function captures the funds from the transaction.
                        return actions.order.capture().then(function (details) {
                            // This function shows a transaction success message to your buyer.
                            //document.getElementById("showpurchased").innerHTML = "Transaction completed!";
                            if (alert('Transaction Complete!')) {
                            } else
                                document.getElementById('paypalform').submit();
                        });
                       
                    }
                }).render('#paypal-payment-button');
            </script>
    </body>
</html>
