<?php
    include_once '../components/connection.php';

    if(isset($_POST['add_btn'])){
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_type = $_POST['product_type'];


        $query = "INSERT INTO product (product_name,product_price,product_type)
                        VALUES('$product_name',$product_price,'$product_type')";
        $result = mysqli_query($conn,$query);

        if($result){
            header('location: ../admin/dashboard.php');
        }else{
            echo "Error ka";
        }
    }else{
        echo "uyy error napd";
        die();  
    }