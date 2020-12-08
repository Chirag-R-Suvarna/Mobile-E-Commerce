<?php 
session_start();

$host="localhost";
$user="root";
$password="";
$db="shopee";

$con=new mysqli($host,$user,$password,$db);
if ($con->connect_error) {
    die("connection failed".$con->connect_error);
}

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from user where first_name='".$uname."'and last_name='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
   
    if(mysqli_num_rows($result)==1){
        // echo " You Have Successfully Logged in";
        // exit();
        $_SESSION['uname']=$uname;
         header("location:index.php");
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
      
    }
        
}
?>