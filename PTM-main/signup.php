<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title></title>
</head>
<body>

    <header class="showcase">

        <a href="index.html"><img src="default-monochrome-black.svg" alt="PTM"></a>

</header>
<div class="container">

    <div class="wrapper">

      <div class="title"><span>Create An Account</span></div>

      <form action="./includes/auth.php" method="post">
        <div class="row">
           <label>Email</label> 
          <input name="email" type="email" placeholder="Email" required>
        </div>

        <div class="row-1">
           <label>Password</label> 
          <input name="password1" type="password" placeholder="Password" required>
        </div>

        <div class="row-1">
            <label>Confirm Password</label> 
           <input name="password2" type="password" placeholder="Confirm Password" required>
         </div>

        <div class="remember-password">

        <div class="remember">
           <input value="true" type="checkbox"><label>Remember me</label>
       </div>

        </div>

        <div>
          <?php
            if (isset($_GET['user'])) {
              $user = $_GET['user'];

              if ($user == "exists") {
                echo "<div style='color: red'>User already exists</div>";
              } else {
                if ($user == "password_not_equal") {
                  echo "<div style='color: red'>Passwords not equal</div>";
                }
              }
            }
          ?>
        </div>
       

        <div class="row button">
          <input name="register" type="submit" value="Login">
        </div>
        <div class="signup-link">Already have an account?  <a href="login.php">Login now</a></div>
      </form>

    </div>
  </div>

   
</body>
</html>