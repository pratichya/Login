<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel='stylesheet' type='text/css' media='screen' href='login.css'>
    <script src="https://kit.fontawesome.com/cee04f8a65.js" crossorigin="anonymous"></script>
    <style>
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
<div class="container"> 
    <div class="forms-container">
        <div class="signin-signup">
        <form action="save_password.php" class="sign-in-form" method="POST">
            <h2 class="title"> Sign in </h2>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="username" id="username">
        
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password" id="password">
               
            </div>
            <div class="input-field3">
            <input type="checkbox" name="save_password"> Remember me?
            </div>
            <input type="submit" value="Login" class="btn solid" onclick="validateForm()">
            <!-- <div class="social-text">
            <i class="fa-solid fa-user fa-xl" style="color: #e0e3e6;"></i>
            </div> -->
            <p class="social-text"> Don't have an account? <a href="register.php">Register</a></p>
            <!-- <div class="social-media">
            <a href="https://www.facebook.com/" class="social-icon">
            <i class="fab fa-facebook-f"></i></a>
            <a href="https://www.google.com/" class="social-icon">
                <i class="fab fa-google"></i>
            </a>
            </div> -->
          <small><div id="error-message-container"></div></small>
         

</div>
</div>
</div></form>

</body>
</html>