<?php
$sql = "SELECT * FROM Product";
        $productids = $productnames = $productcosts = $productquantities = $productdescriptions = array();
        $result = $conn->query($sql);
        $i = 0;
        while ($row = $result->fetch_assoc()) {
            $productids[$i] = $row["product_id"];
            $productnames[$i] = $row["product_name"];
            $productcosts[$i] = $row["product_cost"];
            $productimages[$i] = $row["product_image"];
            $productdescriptions[$i] = $row["product_description"];
            $productquantities[$i] = $row["product_quantity"];
            $i++;
        }    
?>   

