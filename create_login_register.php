<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirm_password'];


     $checkEmail="SELECT * From user where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        header("location: emailexist.php");
     }
     else{
        $insertQuery="INSERT INTO user(username,email,password,confirm_password,date)
                       VALUES ('$username','$email','$password',' $confirmpassword', NOW())";
            if($conn->query($insertQuery)==TRUE){
                header("location: login_register.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }


}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   
   $sql="SELECT * FROM user WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: home.php");
    exit();
   }
   else{
    header("location: wrong_emailpass.php");
   }

}
?>