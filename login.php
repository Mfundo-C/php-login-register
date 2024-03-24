<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Redirect to registration form
    header("Location: register.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
   
</head>
<body>
<section>
    <div class="login-box">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="loginForm">
            <h3>Login</h3>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail-outline"></ion-icon>
                </span>
                <input type="email" name="email" required>
                <label for="Email">Email</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </span>
                <input type="password" name="password" required>
                <label for="Password">Password</label>
            </div>
            <div class="remember-forgot">
                <label> <input type="checkbox">Remember me</label>
                <a href="#">Forgot Password?</a><br><br>
            </div>
            <button type="submit" class="btnLogin">Login</button>
            <div class="register-link">
                <p> Don't have an account?
                    <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
</section>
</body>
</html>