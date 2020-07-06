<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<?php
    $state = $_GET['state'] ?? '';//state la trang thai php gui len
    $date = $_GET['date'] ?? '';
    $day = $_GET['day'] ?? '';
?>
     <div class="container">
         <div class="row">
             <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                 <h1 class="text-center my-3">
                     <form action="server/birthday.php" class="border p-3" method="post">
                         <div class="form-group">
                             <label for="birthday">Nhap ngay sinh</label>
                             <?php if($state === 'fail'): ?>
                                 <h3 class="text-center mb-1">Vui long nhap ngay sinh nhat</h3>
                             <?php endif; ?>
                             <?php if($state === 'happy'): ?>
                                 <h3 class="text-center text-danger mb-1">Happy Birthday To You</h3>
                             <?php endif; ?>
                             <?php if ($state ==='wait'): ?>
                                <h3 class="text-primary mb-2">Còn : <?php echo $day; ?>ngày là đến sinh nhật rồi</h3>
                             <?php endif; ?>
                             <input type="date" id="birthday" name="birthday" class="form-control" value="<?php echo $date; ?>">
                         </div>
                         <button class="btn btn-danger" name="btnCheck" type="submit">Check</button>
                     </form>
                 </h1>
             </div>
         </div>
<!--         <div class="row">-->
<!--             <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">-->
<!--                 -->
<!--             </div>-->
<!--         </div>-->
     </div>
</body>
</html>