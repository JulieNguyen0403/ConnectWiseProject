<?php
$conn=mysqli_connect('localhost','root','','loginandsignupform');

if(isset($_POST['submit_si'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $select="SELECT * FROM user WHERE email ='$email'";

    $result= mysqli_query($conn,$select);
    while($row= mysqli_fetch_assoc($result)){
        $resultPassword= $row['password'];
        $resultuser_type= $row['user_type'];
        if ($password == $resultPassword && $resultuser_type == 'Job Seeker') {
            header('Location:dashboard.php');
        }elseif($password ==$resultPassword && $resultuser_type=='Help Seeker'){
                header('Location:service.php');
        }else{
            header('Refresh:0.5; url=login.php');
            echo "<script>
                alert('Login Failed!');
                </script>";
    
        }
        
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Form Design</title>
      <link rel="stylesheet" type="text/css" href="login.css">


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
                    <li><a href='contactus.php'>Contact</a></li>
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
                    <form  id="login" class="input-group"method="post" action="login.php">
                        <p> Username (Email):</p>
                        <input type="text" class="input-field" placeholder=" Enter Username" name="email" required>
                        <p> Password:</p>
                        <input type="text" class="input-field" placeholder=" Enter Password" name="password" required>
                        <a href="#">Forget password?</a> 
                        <input type="Submit" value="Login" name='submit_si'>
                        <div class="social-icons">
                          <a href="https://accounts.google.com/v3/signin/identifier?dsh=S-335473713%3A1669936250645266&ec=hpp_signin_001&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=ARgdvAsFSqSjt5TjImI2zUmTrBgJ0_i6H5VTTTSwJpvyGqV6t4ZbIb5m7z2X8vLUMHG1MX4_Pzf46g"><img src="google.png"></a>
                          <a href="https://www.facebook.com/"><img src="Facebook.png"></a>
                          <a href="https://twitter.com/i/flow/login"><img src="twitter.png"></a>
                        </div> 
                    </form>
                
          </div>
          
      </div>
    
  </body>
</head>
</html>
