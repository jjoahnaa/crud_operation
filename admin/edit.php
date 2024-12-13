<?php 
 include_once '../components/header.php';
 include_once '../components/connection.php';


 if(isset($_GET['id'])){
    $product_id = $_GET['id'];

    $query = "SELECT * FROM product  WHERE product_id = $product_id";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $product_name = $row['product_name'];
        $product_price = $row['product_price'];
    }
}
?>

<form action="../controllers/updateProduct.php" method="POST">
    <input type="hidden" name="product_id" value="<?= $product_id ?>">
    <div class="mb-3">
        <label for="productName" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="product_name" name="product_name" value="<?= $product_name ?>" required>
    </div>
    <div class="mb-3">
        <label for="productPrice" class="form-label">Price</label>
        <input type="number" class="form-control" id="productPrice" name="product_price" value="<?= $product_price ?>" step="0.01"
            required>
    </div>

    <div class="mb-3">
        <label for="productType" class="form-label">Product Type</label>
        <select class="form-select" id="productType" name="product_type" required>
            <option value="">Select a type</option>
            <option value="Clothing">Clothing</option>
            <option value="Food">Food</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary" name="update_product">Add Product</button>
</form>
