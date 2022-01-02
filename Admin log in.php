

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
<!-- <?php include_once("AdminHeader.php"); ?> -->
  
    <br><br>
    <form action="AdminLoginFunction.php"method="post"> 
        <h3>Admin Login</h3>
        <?php if(isset($_GET['error'])){?>
<p class="error"><?php echo $_GET['error'];?></p>
       <?php }?>
        <label for="Email">Email:</label>
    <input type="text" id="email " name="email"
   >
    <br><br>
    <label for="pass">Password:</label>
    <input type="password" id="pass" name="password"
    >
 
    
    <br><br>

    <input type ="reset">

    <button type="submit" name="login">Log in:</button> 
    </form>
    <!-- <?php include_once("footer.php"); ?> -->
</body>
</html>