<?php
$conn=mysqli_connect('localhost','root','','loginandsignupform');

if(isset($_POST['submit_su'])){
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $number=$_POST['number'];
    $user_type=$_POST['user_type'];
    $query="INSERT INTO user(firstName,lastName,email,password,number,user_type) VALUES ('$firstName','$lastName','$email','$password','$number','$user_type')";   
    $result= mysqli_query($conn,$query);
    
    if ($result){
      header('Refresh:1; url=login.php');
      echo"<script>alert('You have successfully create an account')</script>";
    }else{
        header('Refresh:1; url=signup.php');
        echo"<script>alert('Fail to create an account. Please Try Again!')</script>";
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Form Design</title>
      <link rel="stylesheet" type="text/css" href="signup.css">


  <body>
      <div class="hero">
        <div class="navbar">
            <div>
              <a href='index.php'>ConnectWise</a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='home.php'>Home</a></li>
                    <li><a href='aboutus.php'>About Us</a></li>
                    <li><a href='contact.php'>Contact</a></li>
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                </ul>
            </nav>
        </div>
        <img src="avatar.png" class="avatar">
            <div class="form-box">
                <h1>Welcome to ConnectWise!</h1>
                    <div class="button-box">
                      <div id="btn"></div>
                      <button type="button" name='login_demo' class="toggle-btn" onclick="login()">Login</button>
                      <button type="button" name= 'signup_demo' class="toggle-btn"onclick="signup()">Register</button>
                    </div>
                <form id="signup" class="input-group" method="post" action="">
                    <p> First Name:</p>
                    <input type="text" class="input-field" placeholder=" Enter First Name" name="firstName" required >
                    <p> Last Name:</p>
                    <input type="text" class="input-field" placeholder=" Enter Last Name"  name="lastName" required>
                    <p> Email:</p>
                    <input type="text" class="input-field" placeholder=" Enter Your Email"  name="email" required>
                    <p> Password:</p>
                    <input type="text" class="input-field" placeholder=" Enter Password"  name="password" required>
                    <p> Phone Number:</p>
                    <input type="text" class="input-field" placeholder=" Enter Your Phone Number" name="number">
                    <p> User Type:
                    <select name="user_type" required>
                      <option value="Job Seeker">Job Seeker</option>
                      <option value="Help Seeker">Help Seeker</option>
                    </select> </p>
                    <a href="#">Have an account?</a>
                    <a href="login"><u>Sign In</u></a>
                    
                    <input type="Submit" value="Sign Up" name='submit_su'>
                  </form>
                
          </div>
          
      </div>
    
  </body>
</head>
</html>
