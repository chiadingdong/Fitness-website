
<?php
$sql = "SELECT * FROM cart";
        $cart_productid = $cart_quantity = $cart_id = array();
        $result = $conn->query($sql);
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            $cart_productid[$i] = $row["product_id"];
            $cart_quantity[$i] = $row["quantity"];
            $cart_id[$i] = $row["cart_id"];
            $i++;
        }

?>            
