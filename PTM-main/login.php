<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>log-in</title>
</head>
<body>

    <header class="showcase">

        <a href="index.html"><img src="default-monochrome-black.svg" alt="PTM"></a>

</header>


    <div class="container">

     <div class="wrapper">

       <div class="title"><span>Login To Your Account</span></div>

       <form action="./includes/auth.php" method="post">
         <div class="row">
            <label>Email</label> 
           <input name="email" type="email" placeholder="Email" required>
         </div>

         <div class="row-1">
            <label>Password</label> 
           <input name="password" type="password" placeholder="Password" required>
         </div>

         <div class="remember-password">

         <div class="remember">
            <input value="true" type="checkbox"><label>Remember me</label>
        </div>

        <div class="pass"><a href="reset.html">Forgot password?</a></div>

         </div>
        
         <?php
            if (isset($_GET['user'])) {
              $user = $_GET['user'];

              if ($user == "null") {
                echo "<div style='color: red'>Invalid user credentials</div>";
              } 
            }
          ?>

         <div class="row button">
           <input name="login" type="submit" value="Login">
         </div>
         <div class="signup-link"> Dont have an account?  <a href="signup.php">Signup now</a></div>
       </form>

     </div>
   </div>
 
    
</body>
</html>