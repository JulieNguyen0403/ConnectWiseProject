
<!DOCTYPE html>
<html>
<html lang="en"></html>
  <head>
    <meta charset="UTF-8">
    <title>Login Form Design</title>
      <link rel="stylesheet" type="text/css" href="style.css">


  <body>
      <div class="hero">
        <div class="navbar">
          <div>
            <a href='home.php'>ConnectWise</a>
          </div>
          <nav>
              <ul id='MenuItems'>
                  <li><a href='home.php'>Home</a></li>
                  <li><a href='aboutus.php'>About Us</a></li>
                  <li><a href='contactus.php'>Contact</a></li>
                  <li><button name='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
              </ul>
          </nav>
      </div>


      <div id='login-form'class='login-page'>
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
                <a href="#">Forget password?</a><br>
                <a href="signup.php">Don't have an account? <u>register</u></a><br>
                <input type="Submit" value="Login" name='submit_si'>
                <div class="social-icons">
                  <a href="https://accounts.google.com/v3/signin/identifier?dsh=S-335473713%3A1669936250645266&ec=hpp_signin_001&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=ARgdvAsFSqSjt5TjImI2zUmTrBgJ0_i6H5VTTTSwJpvyGqV6t4ZbIb5m7z2X8vLUMHG1MX4_Pzf46g"><img src="google.png"></a>
                  <a href="https://www.facebook.com/"><img src="Facebook.png"></a>
                  <a href="https://twitter.com/i/flow/login"><img src="twitter.png"></a>
                </div> 
            </form>
            <form id="signup" class="input-group" method="post" action="signup.php">
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
                <select name="user_type">
                  <option value="Job Seeker">Job Seeker</option>
                  <option value="Help Seeker">Help Seeker</option>
                </select> </p>
                <a href="login.php">Have an account? <u>Sign In</u></a>
                
                <input type="Submit" value="Sign Up" name='submit_su'>
                
          
            <script>
            var x=document.getElementById('login');
            var y=document.getElementById('signup');
            var z=document.getElementById('btn');

            function signup(){
              x.style.left="-700px";
              y.style.left="50px";
              z.style.left="230px";
            }
            function login(){
              x.style.left="40px";
              y.style.left="650px";
              z.style.left="0";
            }
         
            </script>
          </div>
          
      </div>
        </div>
    
  </body>
</head>
</html>