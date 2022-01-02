<?php
include('connect.php');

if(isset($_POST['add-product'])){
    $ID=$_POST['product_ID'];
    $name=$_POST['product_name'];
    $price=$_POST['product_price'];
    $image= addslashes (file_get_contents($_FILES["image"]["tmp_name"]));
    $desc=$_POST['product_desc'];


    $query="insert into product_details (product_ID,product_name,product_price,image,product_desc)

    values ('$ID', '$name', '$price', '$image', '$desc')" ;

    $mysqli->query($query) or die($mysqli->error);

    (header("location: productList.php"));

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Document</title>
        <link rel="stylesheet" href="form.css?v=<?php echo time();?>">
</head>
<body>
<!--  -->
       
        <br><br>
    <form method="POST" action="" enctype="multipart/form-data"> 
        <h2>Add product </h3>
        <!-- <label for="Product_ID">Product ID:</label>
        <input type="text" id="product_ID" name="product_ID"
        placeholder="product ID "> -->
            
        
        <br><br>
        <label for="Product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name"
        placeholder="product Name ">
        <br><br>
        <label for="price">Product Price:</label>
        <input type="text" id="product_price" name="product_price"
        placeholder="product price ">
       
        <br><br>
        <label for="image">Product image:</label>
        <input type="file" id="image" name="image"
        placeholder="URL ">
    
        <br><br>
        <label for="Product_description">Product description:</label>
        <input type="text" id="Product_description" name="product_desc"
        placeholder="product description ">    
        <br><br>  
     
        <button type="submit" name="add-product">Add</button> 
       
    </form>
    <!-- <?php include_once("footer.php"); ?> -->
</body>
 </html>