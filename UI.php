<?php
include_once 'connect.php';
if(isset($_POST['add_to_cart'])){
    $ID=$_POST['product_ID'];
    $name=$_POST['product_name'];
    $price=$_POST['product_price'];
    // $image=$_POST['image'];
    $desc=$_POST['product_desc'];


    $query="insert into order_details (product_ID,product_name,product_price,product_desc)

    values ('$ID', '$name', '$price', '$desc')" ;

    $mysqli->query($query) or die($mysqli->error);

    // (header("location: cart.php"));

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
    
  <link rel="stylesheet" href="home.css?v=<?php echo time();?>">
</head>
<body><?php include_once("header.php"); ?>
<div class="hero">
  <div class="hero-inner">
    <h1>Welcome To ChuraBros!</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nesciunt accusantium tempora voluptatem velit enim quaerat sapiente sed, repellat temporibus eaque dignissimos, saepe ab recusandae incidunt fuga veniam vero vitae!</p>
    <a href="#" class="button">Learn More</a>
  </div>
</div>
<br><br>
  <div class="outer">

     <?php
           $query="SELECT * FROM product_details";
           $result = $mysqli->query($query) or die($mysqli->error);

            while($row=mysqli_fetch_array($result)){?>

            <form method="post" action="UI.php?id=<?=$row["product_ID"];?>">
            <?php echo '<img src="data:image;base64, '.base64_encode($row['image']).'" alt="Image"';?><br><br>  
            <h3><?=$row['product_name'];?></h2>
            <h4>KSH<?=number_format($row['product_price'],2);?></h2>
            <input type="hidden" name="product_ID" value="<?=$row['product_ID']?>">
            <input type="hidden" name="product_name" value="<?=$row['product_name']?>">
            <input type="hidden" name="product_price" value="<?=$row['product_price']?>">
            <!-- <input type="hidden" name="image" value="<?=$row['image']?>"> -->
            <input type="hidden" name="product_desc" value="<?=$row['product_desc']?>">

            <input type="submit"name="add_to_cart"value="Place Order" onclick="alert ('order placed')" >

            </form>
            
           
            <?php }
              

              ?> 
 
    </div>
    

   
</div>

  </div>  

  <?php include_once("footer.php"); ?>

</body>
</html>