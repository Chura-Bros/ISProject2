<?php
session_start();
include_once 'connect.php';
if(isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $email=validate($_POST['email']);
    $password=validate($_POST['password']);

    if(empty($email)){
        header("Location: Admin log in.php?error=email is required");
        exit();
    }else if(empty($password)){
        header("Location: Admin log in.php?error=password is required");
        exit();
    }else{
        $sql="SELECT * FROM admin_details WHERE email ='$email' AND password ='$password'";
        
        $result = $mysqli->query($sql) or die($mysqli->error);
        if(mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);
           if($row['email']==$email && $row['password']==$password){
            $_SESSION['admin_ID']=$row['admin_ID'];
            $_SESSION['admin_name']=$row['admin_name'];
            $_SESSION['password']=$row['password'];
            $_SESSION['email']=$row['email'];
            $_SESSION['phone_no']=$row['phone_no'];

            header("Location: AdminPanel.php");
            exit();
           }else{
            header("Location: Admin log in.php?error=Incorrect email or password");
            exit();
        }
        }else{
            header("Location: Admin log in.php?error=Incorrect email or password");
            exit();
        }
    }

}else{
    header("Location: AdminPanel.php");
    exit();
}