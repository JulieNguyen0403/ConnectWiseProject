<?php
$conn=mysqli_connect('localhost','root','','loginandsignupform');

if(isset($_POST['signout'])){
  header('Location: index.php');
}
?>

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
            <a href='index.php'>ConnectWise</a>
          </div>
          <nav>
              <ul id='MenuItems'>
                  <li><a href='#'>Home</a></li>
                  <li><a href='#'>Services</a></li>
                  <li><a href='#'>Contact</a></li>
                  <li><a href='#'>MyAccount</a></li>
                  <li><a href='home.php'>Sign Out</a></li>
              </ul>
          </nav>
      </div>
      <h2> SERVICE PAGE IS COMING SOON</h2>
    </div>
    
</body>
</head>
</html>