<?php
include('connect.php');

if(isset($_POST['add-business'])){
    $ID=$_POST['business_ID'];
    $name=$_POST['business_name'];
    $email=$_POST['business_email'];
    $no=$_POST['business_no'];
    


    $query="insert into business_details (business_ID,business_name,business_email,business_no)

    values ('$ID', '$name', '$email', '$no')" ;

    $mysqli->query($query) or die($mysqli->error);

    (header("location: businesslist.php"));

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
        <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
</head>
<body>
<?php include_once("header.php"); ?>
       
        <br><br>
    <form method="POST" action=""> 
        <h3>Add business </h3>
        <label for="business_ID">business ID:</label>
        <input type="text" id="product_ID" name="business_ID"
        placeholder="Business_ID ">
        
        
        <br><br>
        <label for="business_name">Business Name:</label>
        <input type="text" id="business_name" name="business_name"
        placeholder="business Name ">
        <br><br>
        <label for="email">Business email:</label>
        <input type="email" id="business_ID" name="business_email"
        placeholder="business email ">
       
        <br><br>
        <label for="Business number">Business number:</label>
        <input type="text" id="business_number" name="business_no"
        placeholder="business number ">
    
        <br><br>
    
     
        <button type="submit" name="add-business">Add</button> 
       
    </form>
    <?php include_once("footer.php"); ?>
</body>
 </html>