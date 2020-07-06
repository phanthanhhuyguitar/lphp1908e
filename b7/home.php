<?php
   session_start();
   $user = $_SESSION['username'] ?? '';
   $cookie = $_COOKIE['cookieApp'] ?? '';
//   nhung file
   require_once "checkLogin.php";
   checkUserLogin();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?php echo $user; ?></h1>
    <h2>Cookie:<?php echo $cookie; ?></h2>
    <form action="server/logout.php" method="post">
        <button type="submit" name="logout">Logout</button>
<!--        xoa het login-->
<!--        va quay ve login-->
    </form>
</body>
</html>
