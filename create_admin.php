<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

     $checkEmail="SELECT * From admin where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        header("location: emailexist.php");
     }
     else{
        $insertQuery="INSERT INTO admin(username, email, password)
                       VALUES ('$username','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: login_register_admin.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }


}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM admin WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: admin.php");
    exit();
   }
   else{
    header("location: wrong_emailpass.php");
   }

}
?>