<?php
include('connect.php');

if(isset($_POST['add-payment'])){
    $ID=$_POST['ID'];
    $f_name=$_POST['first_name'];
    $l_name=$_POST['last_name'];
    $email= $_POST['email'];
    $phone_no=$_POST['phone_no'];
    $method=$_POST['method'];



    $query="insert into payment_details (ID,first_name,last_name,email,phone_no,method)

    values ('$ID', '$f_name', '$l_name', '$email', '$phone_no','$method')" ;

    $mysqli->query($query) or die($mysqli->error);

    (header("location: ThankYou.php"));

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
<!-- <?php include_once("header.php"); ?> -->
       
        <br><br>
    <form method="POST" action="" enctype="multipart/form-data"> 
        <h2>Add payment  </h3>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name"
        placeholder="first name ">
            
        
        <br><br>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name"
        placeholder="last_name ">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"
        placeholder="email ">
       
        <br><br>
        <label for="phone_no">Phone number:</label>
        <input type="text" id="phone_no" name="phone_no"
       >
    
        <br><br>
        <label for="method">Method of payment :</label>
<select id="method" name="method" >
<option value="Payment method">Payment method</option>
  <option value="cash on delivery ">cash on delivery</option>
  <option value="mpesa">mpesa</option>
  
</select>  
        <br><br>  
     
        <button type="submit" name="add-payment">Add</button> 
       
    </form>
    <!-- <?php include_once("footer.php"); ?> -->
</body>
 </html>