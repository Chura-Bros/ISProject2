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
   
    <br><br>

    <form action="LoginFunction.php"method="post"> 
        <h2>User Login</h3>
        <?php if(isset($_GET['error'])){?>
<p class="error"><?php echo $_GET['error'];?></p>
       <?php }?>
 
    <label for="email">Email Address:</label>
    <input type="Email" id="email" name="email"
    placeholder="Yusuf.Ali@gmail.com">
    
 
    <br><br>
   
    <label for="pass">Password:</label>
    <input type="password" id="pass" name="password">
    <br><br>
  

 

    <button type="submit" >Log in:</button> 
    <br><br>

   <em>If you dont have an account click here <a href="create account.php" >Create account</a> </p>

    </form>

    
     
</body>
</html>