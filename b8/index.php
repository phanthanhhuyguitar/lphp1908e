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
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                        <h1 class="text-center my-3 text-primary">Send mail php</h1>
                    <form action="server/sendmail2.php" class="border p-3" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea  class="form-control" rows="5" name="content" id="content"></textarea>
                        </div>
                        <button class="btn btn-danger offset-md-5" name="btnSendmail">Send</button>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
