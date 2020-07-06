<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../b6/css/bootstrap.css">
    <title>Document</title>
    <style>
        .wrapper{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
         #number{
             margin-left: 10px;
         }
    </style>
</head>
<body>
<div class="container">
    <div class="wrapper">
        <?php
            $state = $_GET['state'] ?? '';
            $num = $_GET['num'] ?? '';
            ?>
        <?php if($state ==='ok'): ?>
        <h4 class="text-success">la so nguyen to</h4>
        <?php elseif ($state ==='err'): ?>
        <h4 class="text-danger">ko phai la nguyen to</h4>
        <?php endif; ?>
        <h3>Kiem tra so nguyen to</h3>
        <form action="server/checkNumber.php" method="post">
            <label for="number">number</label>
            <input type="number" id="number" name="number" value="<?php echo $num; ?>">
            <br><br>
            <button  type="submit" name="btnCheck">Checking</button>
        </form>
    </div>
</div>
</body>
</html>