<?php
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $number=$_POST['number'];

    //Database Connection
    $conn=new mysqli('localhost','root','','loginandsignupform');
  
    $select="SELECT * FROM user WHERE email ='$email' && password='$password'";

    $result= mysqli_query($conn,$select);
    if (mysqli_num_rows($result) > 0) {
      $error[]= 'User Already Exist!';
    }else{
        
    }
?>

