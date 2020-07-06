<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form style="text-align: center;" action="server/handleLogin.php" class="login-form" id="" method="post">
    <h1>Login</h1>

    <div class="txtb">
        <input type="text" name="user" id="username" placeholder="Username">
    </div>

    <div class="txtb">
        <input type="password" name="pass" id="password" placeholder="Password">
    </div>
    <br>
    <label for="remember">Remember me</label>
    <input type="checkbox" id="remember" name="remember">
    <br>
    <input type="submit" name="login" class="logbtn" value="Login">
    <br>
    <a href="#">Forget password</a>
    <div class="bottom-text">
        Don't have account? <a href="#">Sign up</a>
    </div>

</form>
</body>
</html>

