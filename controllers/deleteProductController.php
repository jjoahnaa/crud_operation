<?php   
    include_once '../components/connection.php';


    if(isset($_GET['id'])){
        $product_id = $_GET['id'];

        $query = "DELETE FROM product WHERE product_id = '$product_id'";
        $result = mysqli_query($conn,$query);

        if($result){
            header('location:../admin/dashboard.php');
            exit();
        }
    }else{
        echo "uyy error napd";
    }