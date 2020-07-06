<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
            $state = $_GET['state'] ?? '';
            $file = $_GET['file'] ?? '';
            $strFile = $_GET['files'] ?? '';
            $arrFile = explode(',', $strFile);
//            print_r($arrFile);
            define('IMAGE_PATH', 'Upload/image/');//gan duong dan cua file
                  //bien ........ ten duong dan
        ?>
        <?php //if($state === 'ok') : ?>
        <div class="row">
            <div class="col-12 col-md-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <img src="<?php echo IMAGE_PATH . $file; ?>" class="img-fluid" alt="">
            </div>
        </div>
            <div class="row">
                <div class="col-12 col-md-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                    <?php foreach ($arrFile as $img): ?>
                        <img src="<?php echo IMAGE_PATH . $img; ?>" class="img-fluid" alt="">
                    <?php endforeach; ?>
                </div>
            </div>
        <?php// endif; ?>
        <div class="row">
            <div class="col-12 col-md-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <form action="server/upload.php" method="post" enctype="multipart/form-data" class="border p-3 mt-3">
                    <div class="form-group">
                        <label for="file">Chon file</label>
                        <input type="file" name="file" id="file">
                    </div>
                    <hr>
                    <button style="margin: 0 200px;" class="btn btn-success" type="submit" name="btnUpload">Upload</button>
                </form>
            </div>
        </div>
        <h2>Multil upload file</h2>
        <form action="server/multi-upload.php" method="post" enctype="multipart/form-data" class="border p-3 mt-3">
            <div class="form-group">
                <label for="file">Chon file</label>
                <input type="file" name="multiFile[]" id="multiFile" multiple>
<!--                //multiple de upload nhieu file-->
            </div>
            <hr>
            <button style="margin: 0 200px;" class="btn btn-success" type="submit" name="upload">Upload</button>
        </form>
    </div>
</body>
</html>