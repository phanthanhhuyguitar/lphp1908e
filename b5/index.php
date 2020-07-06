<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
    <style>
        form{
            position: absolute;
            margin: auto;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
    </style>
</head>
<body>
<!--su dung the a de gui du kieu len url cua trinh duyet bang get-->
<a href="home.php?id=10&name=lphp1908&age=3">Send data</a>
<!--<form action="home.php" method="get">-->
<!--    <label for="user">username</label>-->
<!--    <input type="text" name="user" id="user">-->
<!--    <br>-->
<!--    <label for="pass">password</label>-->
<!--    <input type="password" name="pass" id="pass">-->
<!--    <br>-->
<!--    <button type="submit" name="btnLogin">Login</button>-->
<!--</form>-->
<hr>
<form action="server/total.php" >
    <label for="number1">number 1</label>
    <input type="text" name="number1" id="number1">
    <br>
    <label for="number2">number 2</label>
    <input type="text" name="number2" id="number2">
    <br>
    <select name="gender">
        <option value="">--Gender---</option>
        <option value="1">Name</option>
        <option value="0">Nu</option>
    </select>
    <br>
    <input type="checkbox" name="agree" value="">
    <br>
    <input type="radio" name="radioCheck" value="">
    <button type="submit" name="btnSum">Sum</button>
</form>
</body>
</html>
